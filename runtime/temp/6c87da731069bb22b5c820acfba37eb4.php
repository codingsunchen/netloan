<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"C:\wamp\www\myproject\public/../application/admin\view\index\login.html";i:1555234767;s:72:"C:\wamp\www\myproject\public/../application/admin\view\index\header.html";i:1555231836;s:72:"C:\wamp\www\myproject\public/../application/admin\view\index\footer.html";i:1555231845;}*/ ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>管理员登陆页面</title>
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

<style type="text/css">
    * {
        padding: 0;
        margin: 0;
    }

    .think_default_text {
        padding: 4px 48px;
    }

    a {
        color: #2E5CD5;
        cursor: pointer;
        text-decoration: none
    }

    a:hover {
        text-decoration: underline;
    }

    body {
        background: #fff;
        font-family: "Century Gothic", "Microsoft yahei";
        color: #333;
        font-size: 18px
    }

    h1 {
        font-size: 100px;
        font-weight: normal;
        margin-bottom: 12px;
    }

    p {
        line-height: 1.6em;
        font-size: 42px
    }
</style>
<div style="padding: 24px 48px;">
    <h1>:)</h1>
    <p> 管理员登陆界面<br /><span style="font-size:30px">欢迎进入<?php echo $name; ?>的网贷系统</span></p>
</div>

<!-- action="<?php echo url('index/user/add'); ?>"   意思：当提交后去访问index模块的index控制器的login方法  -->
<form name="input" action="<?php echo url('admin/index/login'); ?>" method="POST">
    用户名: <input type="text" name="username"><br>
    密码: <input type="password" name="password"><br>
    <input type="submit" value="登陆">
</form>
<br>

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