<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Url;
use think\Log;
use app\index\model\Users;
use app\index\model\UserLevel;
use app\index\model\Details;
use app\index\model\Region;
use app\admin\model\Completed;
use app\index\model\Successproject;
use app\admin\model\Project;
use org\util\ArrayList;
use app\common\util\Myclass;
use think\Session;
use think\Cookie;
use think\Request;
use think\Response;

class User extends Controller
{
    public function passAuthentication()
    {
        //获取需要通过认证的用户的id
        $request = Request::instance();
        $userid = $request->param('userid');

        $user = Users::get($userid);
        $user->authentication = 1;
        $user->save();
        $this->success('设置该用户通过认证成功', 'http://www.sc.com/index.php?s=/admin/index/index');
    }

    //展示未完成投标的项目表
    public function notFinished()
    {
        //从project表中获取未完成投标的项目
        $list = Project::where('issuccess', '=', 0)->select();
        $this->assign('list', $list);
        $this->assign('listcount', count($list));
        return view();
    }

    //展示已完成投标的项目表
    public function finished()
    {
        //从project表中获取已完成投标的项目
        $list = Project::where('issuccess', '=', 1)->select();
        $this->assign('list', $list);
        $this->assign('listcount', count($list));
        return view();
    }


    //展示已完成还款的项目
    public function successProject()
    {
        //从successproject表中获取已完成还款的项目
        $list = Successproject::where('id', '>', -1)->select();
        $this->assign('list', $list);
        $this->assign('listcount', count($list));
        return view();
    }

    //查看指定用户信息
    public function user_info()
    {
        $request = Request::instance();
        $user_id = $request->param('userid');
        $user = Users::get($user_id);
        $this->assign('user', $user);
        return view();
    }

    //查看项目详情，从详情表details中获取数据
    public function details_info()
    {
        $request = Request::instance();
        $project_id = $request->param('projectid');

        $list = Details::where('project_id', '=', $project_id)->select();
        $this->assign('list', $list);
        $this->assign('listcount', count($list));
        return view();
    }

    //查看已完成还款的项目，对应的详情表
    public function completed_info()
    {
        $request = Request::instance();
        $borrowid = $request->param('borrowid');
        $start_day = $request->param('startday');

        $list = Db::name('Completed')
                            ->where('borrow_id', '=', $borrowid)
                            ->where('start_day', '=', $start_day)
                            ->select();
        $this->assign('list', $list);
        $this->assign('listcount', count($list));
        return view();
    }
}