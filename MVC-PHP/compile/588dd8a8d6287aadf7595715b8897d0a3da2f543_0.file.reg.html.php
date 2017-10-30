<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-23 02:37:30
  from "D:\wamp64\www\MVC-PHP\template\admin\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-23',
  'unifunc' => 'content_59ed55eab6cd25_92669392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '588dd8a8d6287aadf7595715b8897d0a3da2f543' => 
    array (
      0 => 'D:\\wamp64\\www\\MVC-PHP\\template\\admin\\reg.html',
      1 => 1508726133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ed55eab6cd25_92669392 (Smarty_Internal_Template $_smarty_tpl) {
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
/reg.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/iconfont.css">
    <!--<link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.css">-->
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
/reg.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/index.js"><?php echo '</script'; ?>
>-->

</head>
<body>
<div class="login">
    <div class="main">
        <h4 class="title">
            <div class="style-title">
                <a href="index.php?m=index&f=index&a=login" class="reg">登录</a>
                <b>.</b>
                <a href="index.php?m=index&f=index&a=reg" class="active">注册</a>
            </div>
        </h4>
        <div class="content">
            <form action="" method="post" id="form-sum">
                <div class="user">
                    <input type="text" id="user" placeholder="你的昵称" name="nickname">
                    <i class="iconfont icon-denglu"></i>
                </div>
                <div class="phone">
                    <input type="text" id="phone" placeholder="手机号" name="phone">
                    <i class="iconfont icon-shoujihao"></i>
                </div>
                <div class="pass">
                    <input type="password" placeholder="设置密码" name="password" id="password">
                    <i class="iconfont icon-mima-copy"></i>
                </div>
                <input type="submit" name="" value="注册" class="com">
            </form>
            <div class="xieyi">
                <p>点击 “注册” 即表示您同意并愿意遵守简书</p><br>
                <a href="" target="_blank">用户协议</a>和
                <a href="" target="_blank">隐私政策</a>
            </div>
            <div class="more">
                <h6>社交账号直接注册</h6>
                <ul>
                    <li><a href=""><i class="iconfont icon-weibo"></i></a></li>
                    <li><a href=""><i class="iconfont icon-weixin"></i></a></li>
                    <li><a href=""><i class="iconfont icon-qq"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
</body>
</html><?php }
}
