<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-25 01:45:46
  from "D:\wamp64\www\MVC-PHP\template\index\header.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-23',
  'unifunc' => 'content_59efecca518d80_83558948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9a2b08ff789b318951e382ecd617528302b19b7' => 
    array (
      0 => 'D:\\wamp64\\www\\MVC-PHP\\template\\index\\header.php',
      1 => 1508895079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59efecca518d80_83558948 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header>
    <nav>
        <a href="index.php?m=index&f=index&a=init"><img src="<?php echo IMG_URL;?>
/logo.png" alt="logo">
        </a>
        <div class="middle">
            <ul class="mi-left">
                <li><a href="index.php?m=index&f=content&a=wangze">发现</a></li>
                <li><a href="index.php?m=index&f=index&a=follow">关注</a></li>
                <li><a href="index.php?m=index&f=index&a=message">消息</a></li>
                <li class="search">
                    <form action="">
                        <input type="text" name="q" value="" autocomplete="off" placeholder="搜索"
                               class="search-input">
                        <a href="" class="s-btn"><i class="iconfont icon-sousuo"></i></a>
                    </form>
                </li>
            </ul>
            <div class="mi-right">
                <a href="index.php?m=index&f=index&a=reg" class="reg">注册</a>
                <span></span>
                <a href="index.php?m=index&f=index&a=login" class="login">登录</a>
                <a href="" class="night">Aa</a>

            </div>
        </div>
        <a href="" class="write"><i class="iconfont icon-write"></i>写文章</a>
    </nav>
</header>
</body>
</html><?php }
}
