<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"C:\wamp\www\myproject\public/../application/index\view\index\register.html";i:1555305186;s:72:"C:\wamp\www\myproject\public/../application/index\view\index\header.html";i:1555231629;s:72:"C:\wamp\www\myproject\public/../application/index\view\index\footer.html";i:1555161153;}*/ ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>注册页面</title>
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

    <h2>注册用户</h2>
    <!-- 注意要在form表单中写上 enctype="multipart/form-data" 属性，否则文件上传不了-->
    <FORM method="post" enctype="multipart/form-data" class="form" action="<?php echo url('index/index/register'); ?>">
        昵 称：<INPUT type="text" class="text" name="username"><br />
        密 码：<INPUT type="password" class="text" name="password"><br />
        身份证号：<INPUT type="text" class="text" name="idcard"><br />
        电话号码：<INPUT type="text" class="text" name="telephone"><br />
        账户余额：<INPUT type="text" class="text" name="account"><br />
        身份证照片：<INPUT type="file" class="file" name="identity"><br />
        个人信用报告文件：<INPUT type="file" class="file" name="credit"><br />
        <INPUT type="submit" class="btn" value=" 提交 ">
    </FORM>
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