<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"C:\wamp\www\myproject\public/../application/index\view\user\lend.html";i:1555740490;s:71:"C:\wamp\www\myproject\public/../application/index\view\user\header.html";i:1555571633;s:71:"C:\wamp\www\myproject\public/../application/index\view\user\footer.html";i:1555306651;}*/ ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>出借</title>
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
出借人首页，在这里显示所有的未完成投标的项目，可以选择一个项目进行投标
在这里可以查看参与过的历史完成的项目。
</div>

<a href="//www.sc.com/index/user/personal">个人中心</a>
<h2>项目列表（<?php echo $count; ?>）</h2>
<?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project): $mod = ($i % 2 );++$i;?>
<div class="info">
    ID：<?php echo $project['id']; ?><br />
    借款人id：<?php echo $project['borrow_id']; ?><br />
    需要接的总钱数：<?php echo $project['total_money']; ?><br />
    已借到的钱：<?php echo $project['existence_money']; ?><br />
    正常利息：<?php echo $project['normal_percent']; ?><br />
    逾期利息：<?php echo $project['overdue_percent']; ?><br />
    所借天数：<?php echo $project['day']; ?><br />
    <a href="//www.sc.com/index/user/apply_lend/project_id/<?php echo $project['id']; ?>">选择该项目投资</a>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>

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