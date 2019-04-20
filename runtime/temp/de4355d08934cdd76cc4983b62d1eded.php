<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"C:\wamp\www\myproject\public/../application/admin\view\user\completed_info.html";i:1555767049;s:72:"C:\wamp\www\myproject\public/../application/admin\view\index\header.html";i:1555231836;s:72:"C:\wamp\www\myproject\public/../application/admin\view\index\footer.html";i:1555231845;}*/ ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>项目详情</title>
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
    <h2>项目详情（<?php echo $listcount; ?>）</h2>
    <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$completed): $mod = ($i % 2 );++$i;?>
    <div class="info">
        借款人ID：<?php echo $completed['borrow_id']; ?><br />
        借出人ID：<?php echo $completed['lender_id']; ?><br />
        该借出人所借出的钱：<?php echo $completed['lend_money']; ?><br />
        <a href="http://www.sc.com/index.php?s=admin/user/user_info/userid/<?php echo $completed['lender_id']; ?>">查看借出人信息</a>
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