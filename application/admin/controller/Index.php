<?php
namespace app\admin\controller;
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
class Index extends Controller
{
    public function index()
    {
        if (Session::has('adminstatus')) {
            return view('index/show');
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
        if ($_POST) {

                $request = Request::instance();
                $username = $request->param('username');
                $password = $request->param('password');


                //连接数据库，user表，对比username和passward是否正确, 在网贷系统中每个用户的登陆用户名必须唯一
                if ($user = Users::get(['username'=>$username,'password'=>$password]) )
                    {
                        //echo "true";
                        //查询成功，用户名和密码都正确
                        Session::set('adminstatus', 1);
                        $this->success('登陆成功', 'index');
                    } else {
                    //用户名或密码错误，没有查到数据
                    $this->error('用户名或密码错误,请重新登陆', 'login');
                }
            } else {
                $this->assign('name', '孙晨');
                return view();
            }
    }

    //退出登陆
    public function logouot()
    {
        Session::delete('status');
        $this->success('退出当前账户成功', 'index');
    }

    //注册用户
    public function register()
    {
        if ($_POST) {
            /*
            $response = Response::instance();
            $username = $response->param('username');
            $password = $response->param('password');
            $telephone = $response->param('telephone'); //电话号码
            $idcard = $response->param('idcard'); //身份证号
            //字段后期再加

            //查询user表该用户名是否已经存在，若存在则注册失败，需要重新选区username进行注册，username要在系统中唯一
            if(User::getByusername('$username'))
            {
                //这里要跳转的是注册页面，后期进行修改
                $this->error('该用户名已被占用，请重新设置用户名进行注册','index');
            }else{
                    $user = new User();
                    $user->username = $username;
                    $user->password = $password;
                    $user->telephone = $telephone;
                    $user->idcard = $idcard;
                    //其他字段后期加

                    //这里要跳转的是登陆页面，后期进行修改
                    $this->success('恭喜，注册成功','index');
            }*/
            //这里要跳转的是登陆页面，后期进行修改
            $this->success('恭喜，注册成功', 'login');
        } else {
            return view();
        }
    }
}
