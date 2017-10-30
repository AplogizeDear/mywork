<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-27 09:02:56
  from "D:\wamp64\www\MVC-PHP\template\index\collect.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-23',
  'unifunc' => 'content_59f2f640c1e290_94859481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21691b177628e6ee9dab39076c05b5b5bb14543d' => 
    array (
      0 => 'D:\\wamp64\\www\\MVC-PHP\\template\\index\\collect.html',
      1 => 1509094873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f2f640c1e290_94859481 (Smarty_Internal_Template $_smarty_tpl) {
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
/collect.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/public.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/person.js"><?php echo '</script'; ?>
>
    <title>Document</title>
</head>
<body>
<div class="fill">
</div>
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
<div class="row-one">
    <div class="main">
        <div class="main-top">
        <img src="<?php echo IMG_URL;?>
/collect.png" alt="">
        </div>
        <div class="bot">
            <ul class="inner">
                <li>
                    <!--右侧图片-->
                    <a href="index.php?m=index&f=index&a=detail" class="in-img">
                        <img src="<?php echo IMG_URL;?>
/wrap.jpg" alt="">
                    </a>
                    <!--内容-->
                    <div class="content">
                        <div class="author">
                            <a href="" target="_blank" class="head-img"><img src="<?php echo IMG_URL;?>
/tou-1.jpg" alt=""></a>
                            <div class="nickname">
                                <a href="" class="nic-link">与君成悦</a>
                                <span class="time">3小时前</span>
                            </div>
                        </div>
                        <a href="index.php?m=index&f=index&a=detail" class="title">我的诗和远方里，再无你</a>
                        <p class="inner-info">
                            浓暮秋景，凄落晚亭，光阴它说，人生如水，东流无歇。可我希望，如果时光可以倒流，我再也不要辜负你的深情。 2017.10.22 周日  阴雨 01 门前老树枯枝丫，石凳上的我，...
                        </p>
                        <div class="cla">
                            <a href="" class="fenlei">世间事</a>
                            <a href="" class="eye" target="_blank"><i class="iconfont icon-yanjing"></i>5949</a>
                            <a href="" class="message" target="_blank"><i class="iconfont icon-message2"></i>201</a>
                            <span class="like"><i class="iconfont icon-xin"></i>367</span>
                            <span class="price"><i class="iconfont icon-jiage"></i>10</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html><?php }
}
