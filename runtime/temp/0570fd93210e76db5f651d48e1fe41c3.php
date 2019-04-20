<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"C:\wamp\www\myproject\public/../application/admin\view\index\admin.html";i:1555765041;s:72:"C:\wamp\www\myproject\public/../application/admin\view\index\header.html";i:1555231836;s:72:"C:\wamp\www\myproject\public/../application/admin\view\index\footer.html";i:1555231845;}*/ ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>管理员首页</title>
        <link charset="utf-8" rel="stylesheet" href="__PUBLIC__/common.css">
        <style>
            body {
                font-family: "Microsoft Yahei", "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-size: 16px;
                padding: 5px;
            }
    
            .form {
                padding: 15px;
                font-size: 16px;
            }
    
            .form .text {
                padding: 3px;
                margin: 2px 10px;
                width: 240px;
                height: 24px;
                line-height: 28px;
                border: 1px solid #D4D4D4;
            }
    
            .form .btn {
                margin: 6px;
                padding: 6px;
                width: 120px;
    
                font-size: 16px;
                border: 1px solid #D4D4D4;
                cursor: pointer;
                background: #eee;
            }
    
            a {
                color: #868686;
                cursor: pointer;
            }
    
            a:hover {
                text-decoration: underline;
            }
    
            h2 {
                color: #4288ce;
                font-weight: 400;
                padding: 6px 0;
                margin: 6px 0 0;
                font-size: 28px;
                border-bottom: 1px solid #eee;
            }
    
            div {
                margin: 8px;
            }
    
            .info {
                padding: 12px 0;
                border-bottom: 1px solid #eee;
            }
    
            .copyright {
                margin-top: 24px;
                padding: 12px 0;
                border-top: 1px solid #eee;
            }
        </style>
    </head>    
    <body>
        这里是公共模板头部，后期开发前台页面时，进行渲染。

<div style="padding: 24px 48px;">
    <a href="http://www.sc.com/admin/index/logout">退出登陆</a>

    <!--在下面的这三个项目表中，再给每一个项目添加一个链接可以查看该项目的详情信息，这个另起一个html文件用来做展示-->
    <a href="http://www.sc.com/admin/user/notFinished">未完成投标的项目表</a>
    <a href="http://www.sc.com/admin/user/finished">已完成投标的项目表</a>
    <a href="http://www.sc.com/admin/user/successProject">已完成还款的项目</a>
    <p> 用户已经登陆这是管理员首页<br /><span style="font-size:30px">欢迎进入孙晨的网贷系统</span></p>


    <h2>已认证用户：（<?php echo $listcount; ?>）</h2>
    <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
    <div class="info">
        ID：<?php echo $user['id']; ?><br />
        用户名：<?php echo $user['username']; ?><br />
        身份证号：<?php echo $user['idcard']; ?><br />
        电话号码：<?php echo $user['telephone']; ?><br />
        账户余额：<?php echo $user['account']; ?><br />
        身份证照片：<br> <img border="0" src="<?php echo $user['identity']; ?>" alt="图片加载失败" width="304" height="228"> <br>
        个人信用报告文件：<br> <img border="0" src="<?php echo $user['credit']; ?>" alt="图片加载失败" width="304" height="228"> <br>
       
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>

    <h2>未认证用户：（<?php echo $nolistcount; ?>）</h2>
    <?php if(is_array($nolist) || $nolist instanceof \think\Collection): $i = 0; $__LIST__ = $nolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
    <div class="info">
        ID：<?php echo $user['id']; ?><br />
        用户名：<?php echo $user['username']; ?><br />
        身份证号：<?php echo $user['idcard']; ?><br />
        电话号码：<?php echo $user['telephone']; ?><br />
        账户余额：<?php echo $user['account']; ?><br />
        身份证照片：<br> <img border="0" src="<?php echo $user['identity']; ?>" alt="图片加载失败" width="304" height="228"> <br>
        个人信用报告文件：<br> <img border="0" src="<?php echo $user['credit']; ?>" alt="图片加载失败" width="304" height="228"> <br>
        
        <a href="http://www.sc.com/admin/user/passAuthentication/userid/<?php echo $user['id']; ?>">确认该用户通过认证</a>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    
</div>
<!--
<div class="copyright">
    <a title="官方网站" href="http://www.thinkphp.cn">ThinkPHP</a> 
    <span>V5</span> 
    <span>{ 十年磨一剑-为API开发设计的高性能框架 }</span>
</div>
-->
这里是公共模板底部，后期开发前台页面时，再进行更改渲染。
</body>
</html>