<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"C:\wamp\www\myproject\public/../application/index\view\index\login.html";i:1556697216;s:72:"C:\wamp\www\myproject\public/../application/index\view\index\footer.html";i:1556695476;}*/ ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>用户登陆</title>
    <link charset="utf-8" type="text/css" rel="stylesheet" href="__PUBLIC__/common.css">
    <style>
        body {
            font-family: "Microsoft Yahei", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 16px;
            padding: 5px;
            background-image: url("/image/9.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            overflow-x: hidden;
            width: 100%;
            height: 516px;
            margin: 0 auto;
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

        h3 {
            color: #ec3d1e;
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
    <h3>
        安全
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp; 快捷
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 利息低
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 有保障
    </h3>

<div  style="text-align:center;height:360px;">
<!-- action="<?php echo url('index/user/add'); ?>"   意思：当提交后去访问index模块的index控制器的login方法  -->
<form name="input" action="<?php echo url('index/index/login'); ?>" method="POST">
    用户名: <input type="text" name="username" ><br><br>
    密 码: &nbsp; <input type="password" name="password"><br>
    <input type="submit" value="登陆">
</form>
</div>
<div class="copyright">
    <span>方便快捷的网络借贷系统---<b>速贷123</b> </span>
</div>
</body>
</html>