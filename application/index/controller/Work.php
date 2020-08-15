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

class Work extends Controller
{
    //注册用户
    public function work()
    {
        return view();
    }
}