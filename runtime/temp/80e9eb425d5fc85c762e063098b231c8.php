<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"C:\wamp\www\myproject\public/../application/index\view\user\personal.html";i:1555742804;s:71:"C:\wamp\www\myproject\public/../application/index\view\user\header.html";i:1555571633;s:71:"C:\wamp\www\myproject\public/../application/index\view\user\footer.html";i:1555306651;}*/ ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
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
        <h1>个人中心</h1>
    <a href="http://www.sc.com/index/user/index">返回首页</a>
    <h2>用户名：<?php echo $myname; ?></h2>
    <h2>账户余额：<?php echo $myaccount; ?></h2>
    <h2>我的借出列表（<?php echo $mylendlist_count; ?>）</h2>
    <?php if(is_array($mylendlist) || $mylendlist instanceof \think\Collection): $i = 0; $__LIST__ = $mylendlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Details): $mod = ($i % 2 );++$i;?>
    <div class="info">
        ID：<?php echo $Details['project_id']; ?><br />
        借款人id：<?php echo $Details['borrow_id']; ?><br />
        借出的钱数：<?php echo $Details['lend_money']; ?><br />
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>

    <h2>我的借入列表（<?php echo $borrowlist_count; ?>）</h2>
    <?php if(is_array($borrowlist) || $borrowlist instanceof \think\Collection): $i = 0; $__LIST__ = $borrowlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project): $mod = ($i % 2 );++$i;?>
    <div class="info">
        ID：<?php echo $project['id']; ?><br />
        借款的总钱数：<?php echo $project['total_money']; ?><br />
        正常利息：<?php echo $project['normal_percent']; ?><br />
        逾期利息：<?php echo $project['overdue_percent']; ?><br />
        借款天数：<?php echo $project['day']; ?><br />
        是否完成投标：<?php echo $project['issuccess']; ?><br />
        已逾期天数：后期再计算并加入<br />
        <a href="http://www.sc.com/index/user/repayment">立即还款</a>

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
这里是user的底部，后期开发前台页面时，再进行更改渲染。
</body>
</html>