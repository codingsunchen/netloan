<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"C:\wamp\www\myproject\public/../application/admin\view\user\finished.html";i:1555765301;s:72:"C:\wamp\www\myproject\public/../application/admin\view\index\header.html";i:1555231836;s:72:"C:\wamp\www\myproject\public/../application/admin\view\index\footer.html";i:1555231845;}*/ ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>已完成投标的项目</title>
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

    <a href="http://www.sc.com/admin.html">首页</a>
    <h2>项目信息（<?php echo $listcount; ?>）</h2>
    <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project): $mod = ($i % 2 );++$i;?>
    <div class="info">
        项目ID：<?php echo $project['id']; ?><br />
        借款人ID：<?php echo $project['borrow_id']; ?><br />
        借款的总钱数：<?php echo $project['total_money']; ?><br />
        已借到的钱数：<?php echo $project['existence_money']; ?><br />
        正常利息：<?php echo $project['normal_percent']; ?><br />
        逾期利息：<?php echo $project['overdue_percent']; ?><br />
        借款天数：<?php echo $project['day']; ?><br />
        项目创建时间：<?php echo $project['create_time']; ?><br />
        <a href="http://www.sc.com/index.php?s=admin/user/user_info/userid/<?php echo $project['borrow_id']; ?>">查看借款人信息</a>
        <a href="http://www.sc.com/index.php?s=admin/user/details_info/projectid/<?php echo $project['id']; ?>">查看项目详情</a>
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