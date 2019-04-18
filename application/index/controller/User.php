<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Url;
//sc:引入了创建的user类和user表对应的那个命名空间
//这样就可以在该控制器里面通过user类来操作数据库的user表。
use app\index\model\Users;
use app\index\model\UserLevel;
use app\index\model\Test;
use app\index\model\Details;
use app\index\model\Project;
use app\index\model\Completed;
use think\Validate;
use think\Request;
use think\Session;


class User extends Controller
{
    public function index()
    {
        
        return view();
    }   

    public function borrow()
    {
        return view();
    }

    public function lend()
    {
        $list = Project::where( 'issuccess', '=', 0)->select();
        $this->assign('list', $list);
        $this->assign('count', count($list));
        return view();
    }

    //申请借钱
    public function apply_borrow()
    {
        if($_POST)
        {
            $request = Request::instance();
            $total_money = $request->param('total_money');
            $day = $request->param('day');
            $normal_percent = $request->param('normal_percent');
            $overdue_percent = $request->param('overdue_percent');

            //从session中获取当前用户的id，这样就知道当前是哪个用户在进行借款操作
            $borrow_id = Session::get('user_id');

            //empty(var)函数，当var存在并且非零时返回false否则返回ture
            if(empty($borrow_id))
            {
                return view('index/login');
            }

            //连接数据库，project表，这个用户的借款请求添加到project表中
            //判断这个用户是否有未完成的借款项目，如果有则不能继续借款
            $project = Project::getByborrow_id($borrow_id);
            if (empty($project)) 
            {
                    //向project表中插入这个借款请求
                    $project = new Project;
                    $project->borrow_id = $borrow_id;
                    $project->total_money = $total_money;
                    $project->existence_money = 0;

                    $project->day = $day;
                    $project->normal_percent = $normal_percent;
                    $project->overdue_percent = $overdue_percent;
                    $project->issuccess = 0;
                    $project->start_day = date("Y-m-d H:i:s", time());
                    $project->create_time = date("Y-m-d H:i:s", time());
                
                    if ($project->save()) 
                    {
                            //这里要跳转的是个人中心页面
                            $this->success('恭喜，借款项目已生成', 'personal');
                    }
                    else 
                    {
                            echo "project->save error" . "<br>";
                            return $project->getError();
                    }
            }
            else 
            {
                //跳转到个人中心页面
                $this->error('有未完成的借款项目，请先进行还款', 'personal');
            }
        }
        else
        {
            return view();
        }
    }

    public function setsession()
    {
        Session::set('repay', 1);
        
        $this->repayment();
    }

    //还款页面
    public function repayment()
    {
        echo "call reapyment function";
        echo "<br>";
        
        $myid = Session::get('user_id');

        //记得加上find()  Project::where()->find();
        $record = Project::where('borrow_id', '=', $myid)->find();

        $a = $record->start_day;
        $nowtime = date_create(NULL);
        $startday = date_create( $record->start_day);
        //已经借钱的总天数（包括没有逾期的天数和逾期的天数）
        $borrowday = date_diff($startday, $nowtime)->format("%a");
        
        //逾期天数
        if($record->issuccess == 0)
        {
            $overdue_day = 0;
        }
        else
        {
            $tmpday = $startday;
            $d = $record->day;
            date_add($tmpday, date_interval_create_from_date_string("$d days"));
            $diff = date_diff($tmpday, $nowtime);
            if($tmpday < $nowtime)
                $overdue_day = $diff->format("%a");
            else
                $overdue_day = 0;
        }

        //需还款的总额
        $amount = 0;
        if($record->issuccess == 1)
        {
            $amount = $record->total_money + $record->total_money * ($record->normal_percent * ($borrowday-$overdue_day) + 
                        $record->overdue_percent * $overdue_day);
        }

        $this->assign('overdue_day', $overdue_day);
        $this->assign('amount', $amount);
        $this->assign( 'normal_percent', $record->normal_percent);
        $this->assign( 'overdue_percent', $record->overdue_percent);
        $this->assign( 'day', $record->day);
        $this->assign( 'issuccess', $record->issuccess);
        $this->assign('id', $record->id);
        
        $repay = Session::get('repay');
        echo "session repay is:" . $repay . "<br>";
        if( Session::has('repay'))
        {
            echo "session::has(repay) ok:" .  "<br>";
            Session::delete('repay');
            $user = Users::get($myid);
            if($user->account < $amount)
            {
                $this->error('账户余额不足，请先进行充值',"personal");
            }
            else
            {
                $user->account -= $amount;
                trace("user->account is : $user->account");
                if ($user->save()) {
                    trace("user->save() success");
                    //这里要跳转的是登陆页面
                } else {
                    trace("user->save() error 因为并没有对users表中的数据做出任何修改，所以会在save的时候失败，属于正常现象");
                }
                //////////////////////////////////////////////////一对多关联操作
                $project = Project::getByborrow_id($user->id);
                $issuccess = $project->issuccess;
                trace('######');
                foreach($project->detail as $detail)
                {
                    trace("call foreach(project->detail as detail)");
                    $lender_id = $detail->lender_id;
                    $lenduser = Users::get($lender_id);
                    if($issuccess)
                    {
                        //还钱
                        $money = ($detail->lend_money * $record->normal_percent * ($borrowday - $overdue_day))
                                + ($detail->lend_money * $record->overdue_percent * $overdue_day);
                        $lenduser->account += $detail->lend_money;   

                        //存入completed表中
                        $complete = new Completed;
                        $complete->borrow_id = $detail->borrow_id;
                        $complete->lender_id = $detail->lender_id;
                        $complete->lend_money = $detail->lend_money;
                        $complete->normal_percent = $record->normal_percent;
                        $complete->overdue_percent = $record->overdue_percent;
                        $complete->total_money = $record->total_money;
                        $complete->start_day = $a;
                        $complete->end_day = date("Y-m-d H:i:s", time());
                        trace("call complete->save()");
                        if($complete->save())
                        {
                            trace("complete->save() success");
                        }
                        else
                        {
                            trace("complete->save() error");

                        }
                    }
                    else
                    {
                        $lenduser->account += $detail->lend_money;
                    }
                    //保存$lenduser记录
                    if($lenduser->save())
                    {
                        trace("lenduser->save() success");
                    }
                    else{
                        trace("lenduser->save() error");
                    }

                    //删除关联数据
                    $detail->delete();
                    trace("下次 foreach");
                }
                trace("foreache 完成");

                //删除project
                $project->delete();

                $this->success('恭喜，还款成功', "personal");
               
            }
        }
        else
        {
            echo "call into return view()" . "<br>";
            return view();
        }
        
/*
        if($record->issuccess == 1)
        {
            $this->deleterecord(true);
        }
        else
        {
            $this->deleterecord(false);
        }
        return $this->success('恭喜还款成功','www.sc.com/index/user/personal');
        */
    }

    //个人中心页面
    public function personal()
    {
        $list = Project::where('issuccess', '=', 0)->select();
        $this->assign('list', $list);
        $this->assign('count', count($list));
        

        $myid = Session::get('user_id');
        //我的借出列表
        $mylendlist = Details::where('lender_id', '=', $myid)->select();
        $this->assign('mylendlist', $mylendlist);
        $this->assign('mylendlist_count', count($mylendlist));

        //我的借入列表，只可能存在一个，只有这个项目还款后才能开下个项目
        $myborrowlist = Project::where('borrow_id', '=', $myid)->select();
        $this->assign('borrowlist', $myborrowlist);
        $this->assign('borrowlist_count', count($myborrowlist));

        //我的账户余额
        $user = Users::get($myid);
        $myaccount = $user->account;
        $this->assign('myaccount', $myaccount);

        //我的用户名
        $myname = $user->username;
        $this->assign('myname', $myname);
/*
        //我的认证信息
        $myidentity = $user->identity;
        $this->assign('myidentity', $myidentity);
*/
        /*
            //我的已完成借出项目
            $mycompletedlendlist = Completed::where('lender_id', '=', $myid);
            $this->assign('mycompletedlendlist', $mycompletedlendlist);
            $this->assign('mycompletedlendlist_count', count($mycompletedlendlist));

            //我的已完成借入项目
            $mycompletedborrowlist = Completed::where('borrow_id', '=', $myid);
            $this->assign('mycompletedborrowlist', $mycompletedborrowlist);
            $this->assign('mycompletedborrowlist_count', count($mycompletedborrowlist));
        */
        return view();
    }

    //对一个项目进行投资，项目id由url传入 借出钱
    public function apply_lend()
    {
        if($_POST)
        {
            $request = Request::instance();
            $project_id = $request->param('project_id');
            $lend_money = $request->param('lend_money');

            //从session中获取当前用户的id，这样就知道当前是哪个用户在进行借出操作借出人id
            $lend_id = Session::get('user_id');
            $user = Users::get($lend_id);
            if($user->account < $lend_money)
            {
                $this->error("账户余额不足，请先进行充值","personal");
            }
            //从该用户账户中减去投资的钱
            $user->account -= $lend_money;
            $user->save();
            

            //根据项目id到project中找到该项目，更改里面的钱数等数据
            $project = Project::get($project_id);
           
            $project->existence_money += $lend_money;
            if($project->existence_money == $project->total_money)
            {
                $project->issuccess = 1;
                $project->start_day = date("Y-m-d H:i:s", time());
                $borrowuser = Users::get($project->borrow_id);
                $borrowuser->account += $project->total_money;
                if($borrowuser->save())
                {
                    trace("borrowuse->save() success");
                }
                else{
                    trace("borrows->save() error");
                    return $borrowuser->getError();
                }
            }
            if ($project->save()) {
                trace("project->save() seuucee");
            } else {
                trace("project->save() error");
                return $project->getError();
            }

            //向details详情表中插入该条借款信息
            $details = new Details;
            $details->project_id = $project_id;
            $details->borrow_id = $project->borrow_id;
            $details->lender_id = $lend_id;
            $details->lend_money = $lend_money;
            $details->issuccess = $project->issuccess;
            if ($details->save()) {
                //这里要跳转的是登陆页面
                $this->success('恭喜，投资成功', 'lend');
            } else {
                return $details->getError();
            }
        }
        else
        {
            $request = Request::instance();
            $project_id = $request->param('project_id');

            $this->assign('project_id', $project_id);
            return view();
        }
    }

  
}
