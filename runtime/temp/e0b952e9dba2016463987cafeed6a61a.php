<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"C:\wamp\www\myproject\public/../application/admin\view\user\details_info.html";i:1555765110;s:72:"C:\wamp\www\myproject\public/../application/admin\view\index\header.html";i:1556694313;s:72:"C:\wamp\www\myproject\public/../application/admin\view\index\footer.html";i:1556694856;}*/ ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>项目详情</title>
        <link charset="utf-8" rel="stylesheet" href="__PUBLIC__/common.css">
        <style>
            body {
                font-family: "Microsoft Yahei", "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-size: 20px;
                padding: 5px;
                background-color: rgb(231, 226, 205);
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

<div style="padding: 24px 48px;">

    <a href="http://www.sc.com/admin.html">首页</a>
    <h2>项目详情（<?php echo $listcount; ?>）</h2>
    <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$details): $mod = ($i % 2 );++$i;?>
    <div class="info">
        项目ID：<?php echo $details['project_id']; ?><br />
        借出人ID：<?php echo $details['lender_id']; ?><br />
        该借出人所借出的钱：<?php echo $details['lend_money']; ?><br />
        <a href="http://www.sc.com/index.php?s=admin/user/user_info/userid/<?php echo $details['lender_id']; ?>">查看借出人信息</a>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>


<div class="copyright">
    <span>方便快捷的网络借贷系统---<b>速贷123</b> </span>
</div>

</body>
</html>