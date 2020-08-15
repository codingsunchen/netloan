<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"C:\wamp\www\myproject\public/../application/index\view\user\apply_borrow.html";i:1556697424;s:72:"C:\wamp\www\myproject\public/../application/index\view\index\header.html";i:1556697314;s:72:"C:\wamp\www\myproject\public/../application/index\view\index\footer.html";i:1556695476;}*/ ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>申请贷款</title>
        <link charset="utf-8" type="text/css" rel="stylesheet" href="__PUBLIC__/common.css">
        <style>
            body {
                font-family: "Microsoft Yahei", "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-size: 16px;
                padding: 5px;
                background-color: beige;
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

<h2>申请借款</h2>
<!-- 注意要在form表单中写上 enctype="multipart/form-data" 属性，否则文件上传不了-->
<FORM method="post" class="form" action="<?php echo url('index/user/apply_borrow'); ?>">
    贷款金额：<INPUT type="text" class="text" name="total_money"><br />
    借款天数：<INPUT type="text" class="text" name="day"><br />
    正常利息：<INPUT type="text" class="text" name="normal_percent"><br />
    逾期利息：<INPUT type="text" class="text" name="overdue_percent"><br />
    <INPUT type="submit" class="btn" value=" 提交 ">
</FORM>
<div class="copyright">
    <span>方便快捷的网络借贷系统---<b>速贷123</b> </span>
</div>
</body>
</html>

