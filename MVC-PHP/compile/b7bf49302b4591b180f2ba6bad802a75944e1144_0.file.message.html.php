<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-27 07:50:17
  from "D:\wamp64\www\MVC-PHP\template\index\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-23',
  'unifunc' => 'content_59f2e539529121_70542851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7bf49302b4591b180f2ba6bad802a75944e1144' => 
    array (
      0 => 'D:\\wamp64\\www\\MVC-PHP\\template\\index\\message.html',
      1 => 1509090614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f2e539529121_70542851 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/public.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/message.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/public.js"><?php echo '</script'; ?>
>
    <title>消息页面</title>
</head>
<body>
<header>
    <nav>
        <a href="index.php?m=index&f=index&a=init"><img src="<?php echo IMG_URL;?>
/logo.png" alt="logo">
        </a>
        <div class="middle">
            <ul class="mi-left">
                <li><a href="index.php?m=index&f=index&a=init">发现</a></li>
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
                <div class="head-p">
                    <div id="triangle-up"></div>
                    <img src="<?php echo IMG_URL;?>
/header-2" alt="">
                    <ul class="drop-menu" style="z-index:999;">
                        <li><a href="index.php?m=index&f=index&a=person">我的主页</a></li>
                        <li><a href="index.php?m=index&f=index&a=collect">收藏的文章</a></li>
                        <li><a href="index.php?m=index&f=index&a=love">喜欢的文章</a></li>
                        <li><a href="index.php?m=index&f=index&a=price">我的钱包</a></li>
                        <li><a href="index.php?m=index&f=index&a=set">设置</a></li>
                        <li><a href="index.php?m=index&f=index&a=back">退出</a></li>
                    </ul>
                </div>
                <a href="" class="night">Aa</a>
            </div>
        </div>
        <a href="index.php?m=index&f=index&a=write" class="write"><i class="iconfont icon-write"></i>写文章</a>
    </nav>
</header>
<section>
    我是消息页面
</section>
</body>
</html><?php }
}
