<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-24 08:52:45
  from "D:\wamp64\www\MVC-PHP\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-23',
  'unifunc' => 'content_59eeff5d256d58_88528762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cfe8527a6412018df0f6ad3ebf8dfa35bb4f411' => 
    array (
      0 => 'D:\\wamp64\\www\\MVC-PHP\\template\\admin\\login.html',
      1 => 1508835158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59eeff5d256d58_88528762 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录页面</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/public.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/login.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/iconfont.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/login.js"><?php echo '</script'; ?>
>

</head>
<body>
<div class="login">
    <div class="main">
        <h4 class="title">
            <div class="style-title">
            <a href="index.php?m=index&f=index&a=login" class="active">登录</a>
            <b>.</b>
            <a href="index.php?m=index&f=index&a=reg" class="reg">注册</a>
            </div>
        </h4>
        <div class="content">
            <form action="index?m=index&f=index&a=check" method="post" id="form-sum">
                <div class="user">
                <input type="text" placeholder="手机号或邮箱" id="user" name="aname">
                    <i class="iconfont icon-denglu"></i>
                </div>
                <div class="pass">
                    <input type="password" placeholder="密码" name="apass" id="password">
                    <i class="iconfont icon-mima-copy"></i>
                </div>
                <div class="imgcode">
                    <input type="text" placeholder="请输入验证码" name="imgcode">
                    <img src="index.php?&a=code" alt="" class="code"
                    onclick="this.src='index.php?m=index&f=index&a=code'">
                   <!--<image src="index.php?m=index&f=index&a=code" class="code"></image>-->
                </div>
                <div class="remember">
                    <input type="checkbox" value="true" checked="checked" name="" id="">
                    <span>记住我</span>
                </div>
                <div class="forget">
                    <a href="" class="problem">登录遇到问题？</a>
                </div>
                <input type="submit" name="" value="登录" class="com">
            </form>
            <div class="more">
                <h6>社交账号登录</h6>
                <ul>
                    <li><a href=""><i class="iconfont icon-weibo"></i></a></li>
                    <li><a href=""><i class="iconfont icon-weixin"></i></a></li>
                    <li><a href=""><i class="iconfont icon-qq"></i></a></li>
                    <li><a href="" class="qi">其它</a></li>
                </ul>
            </div>
        </div>


    </div>
</div>
</body>
</html><?php }
}
