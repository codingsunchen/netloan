<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Url;
use think\Log;
use app\index\model\Users;
use app\index\model\UserLevel;
use app\index\model\Test;
use app\index\model\Region;
use app\index\model\ShippingArea;
use org\util\ArrayList;
use app\common\util\Myclass;
use think\Session;
use think\Cookie;
use think\Request;
use think\Response;
use think\Image;

class Index extends Controller
{
    /**
     * 
     * 在index方法中，显示出来首页内容，当点击了登陆或者注册的按钮时，进入相应的页面中
     * 刚进来会先判断session的状态是否已经登陆，如果没有登陆则进入登陆或注册的页面
     * 如果session中判断是已经登陆的，那么进入到登陆后的首页，在这个首页里可以看到更多的内容
     * 
     */
    public function index($name = '孙晨')
    {
        if(Session::has('status'))
        {
            $this->assign('name', $name);
            return view('user/index');
        }
        return view();
    }

    public function work()
    {
        if ($_POST)
        {
            $this->success("恭喜注册发表成功",'work');
        }
        return view();
    }

    /**
     * 在login方法中，先获取usesrname和password，然后访问数据库
     * 如果和数据库中的内容相匹配则进行页面跳转，跳转到该控制器下的index方法中，并且设置session的状态，标记为已经登陆。
     *
     */
    public function login()
    {
        if($_POST)
        {
            $request = Request::instance();
            $username = $request->param('username');
            $password = md5($request->param('password'));
           

            //连接数据库，user表，对比username和passward是否正确, 在网贷系统中每个用户的登陆用户名必须唯一
            if($user = Users::get(['username'=>$username,'password'=>$password]) )
            {
                //查询成功，用户名和密码都正确
                Session::set('status', 1);
                Session::set('user_id', $user->id);
                $this->success('登陆成功','index');
            }
            else{
                //用户名或密码错误，没有查到数据
                $this->error('用户名或密码错误,请重新登陆', 'login');
            }
        }
        else
        {
            $this->assign('name', '孙晨');
            return view();
        }
    }

    //退出登陆
    public function logouot()
    {
        Session::delete('status');
        $this->success('退出当前账户成功','index');
    }

    //注册用户
    public function register()
    {
        if ($_POST) {
            $request = Request::instance();
            $username = $request->param('username');
            $password = md5($request->param('password'));
            $telephone = $request->param('telephone'); //电话号码
            $idcard = $request->param('idcard'); //身份证号
            $account = $request->param('account');//账户余额
            $identity = $request->param('identity');//身份证照片
            $credit = $request->param('credit');//个人信用报告
           
            //查询user表该用户名是否已经存在，若存在则注册失败，需要重新选区username进行注册，username要在系统中唯一
            if(Users::getByusername($username))
            {
                //这里要跳转的是注册页面
                $this->error('该用户名已被占用，请重新设置用户名进行注册','register');
            }else{
                    $user = new Users;
                    $user->username = $username;
                    $user->password = $password;
                    $user->telephone = $telephone;
                    $user->idcard = $idcard;
                    $user->account = $account;

                    // 获取表单上传文件 identity
                    $file = $request->file('identity');
                    // 移动到框架应用根目录/public/uploads/ 目录下,sc:这里是按照给定的规则进行命名的。按照文件的md5对文件命名
                    $info = $file->rule('md5')->move(ROOT_PATH . 'public' . DS . 'uploads');
                    //sc：通过上传文件后返回的对象$info,可以获取上传文件的名字和上传文件的路径。
                    if ($info) {
                        //$this->success($info->getSaveName() . '文件上传成功：' . $info->getRealPath());
                    } else {
                        // 上传失败获取错误信息
                        $this->error($file->getError());
                    }
                    //讲文件的路径和文件名拼接在一起，存放在数据库中
                    $identitypath = $info->getRealPath();
                    $user->identity = substr($identitypath, 29);

                    // 获取表单上传文件 credit
                    $file = $request->file('credit');
                    // 移动到框架应用根目录/public/uploads/ 目录下,sc:这里是按照给定的规则进行命名的。按照文件的md5对文件命名
                    $info = $file->rule('md5')->move(ROOT_PATH . 'public' . DS . 'uploads');
                    //sc：通过上传文件后返回的对象$info,可以获取上传文件的名字和上传文件的路径。
                    if ($info) {
                        //$this->success($info->getSaveName() . '文件上传成功：' . $info->getRealPath());
                    } else {
                        // 上传失败获取错误信息
                        $this->error($file->getError());
                    }
                    //讲文件的路径和文件名拼接在一起，存放在数据库中
                    $creditpath = $info->getRealPath();
                    
                    $user->credit = substr($creditpath, 29);

                    $user->authentication = 0;

                    if($user->save())
                    {
                        //这里要跳转的是登陆页面
                        $this->success('恭喜，注册成功', 'login');
                    }
                    else
                    {
                        return $user->getError();
                    }
                    
            }
        }else{
            return view();
        }
    }

    public function test25()
    {
        $list = Users::where('user_id', '>', 2596)->select();
        $this->assign('list', $list);
        $this->assign('count', count($list));
        return $this->fetch();
    } 
  
}
