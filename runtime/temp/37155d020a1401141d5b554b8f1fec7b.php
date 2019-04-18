<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"C:\wamp\www\myproject\public/../application/index\view\user\repayment.html";i:1555571737;s:71:"C:\wamp\www\myproject\public/../application/index\view\user\header.html";i:1555571633;s:71:"C:\wamp\www\myproject\public/../application/index\view\user\footer.html";i:1555306651;}*/ ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>还款页面</title>
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

        h1 {
            color: #e71b1b;
            font-weight: 400;
            padding: 6px 0;
            margin: 6px 0 0;
            font-size: 28px;
            border-bottom: 1px solid #eee;
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
这是user 里面的 header
<div>
    <a href="http://www.sc.com/index/user/index">返回首页</a>

    <div class="info">
        ID：<?php echo $id; ?><br />
        正常利息：<?php echo $normal_percent; ?><br />
        逾期利息：<?php echo $overdue_percent; ?><br />
        借款天数：<?php echo $day; ?><br />
        是否完成投标：<?php echo $issuccess; ?><br />
        已逾期天数：<?php echo $overdue_day; ?><br />
        需要还款总额：<?php echo $amount; ?><br />
        <a href="http://www.sc.com/index/user/setsession">确认还款</a>
    </div>

</div>
<!--
<div class="copyright">
    <a title="官方网站" href="http://www.thinkphp.cn">ThinkPHP</a> 
    <span>V5</span> 
    <span>{ 十年磨一剑-为API开发设计的高性能框架 }</span>
</div>
-->
这里是user的底部，后期开发前台页面时，再进行更改渲染。
</body>
</html>