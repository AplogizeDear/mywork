<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-27 07:40:31
  from "D:\wamp64\www\MVC-PHP\template\index\follow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-23',
  'unifunc' => 'content_59f2e2ef8e7e81_84459208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4daab5cef0998414e5a15ae5bca2e66e3f4cc76f' => 
    array (
      0 => 'D:\\wamp64\\www\\MVC-PHP\\template\\index\\follow.html',
      1 => 1509090028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f2e2ef8e7e81_84459208 (Smarty_Internal_Template $_smarty_tpl) {
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
/follow.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/follow.js"><?php echo '</script'; ?>
>
    <title>关注页面</title>
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
<div class="main">
    <div class="row">
        <div class="aside">
            <a href="" class="all">全部关注</a>
            <ul class="follow">
                <li><a href="" class="addfoll">
                    <img src="<?php echo IMG_URL;?>
/follow-1.png" alt="">
                    <span>添加关注</span>
                </a></li>
                <li><a href="" class="addfoll">
                    <img src="<?php echo IMG_URL;?>
/1.jpg" alt="">
                    <span>城市故事</span>
                </a></li>
            </ul>
        </div>
        <div class="ma-right">
            <ul class="menu">
                <li><a>全部推荐</a>
                <span class="one"></span>
                </li>
                <li><a>推荐作者</a>
                <span class="two"></span>
                </li>
                <li><a>推荐专题</a>
                <span class="three"></span>
                </li>
            </ul>
            <ul class="list">
                <li>
                    <span>简书推荐专题</span>

                    <div class="info">
                        <a href="" class="pho"><img src="<?php echo IMG_URL;?>
/1.jpg" alt=""></a>
                        <a href="" class="title">城市故事</a>
                        <p>世界上有那么多的城镇，城镇中有那么多的酒馆，她却偏偏走进了我的酒...</p>
                        <a href="" class="info-num">
                            128.9K篇文章 · 1324.2K人关注
                        </a>
                        <a href class="btn">
                            + 关注
                        </a>
                    </div>
                </li>
                <li>
                    <span>简书推荐专题</span>

                    <div class="info">
                        <a href="" class="pho"><img src="<?php echo IMG_URL;?>
/1.jpg" alt=""></a>
                        <a href="" class="title">城市故事</a>
                        <p>世界上有那么多的城镇，城镇中有那么多的酒馆，她却偏偏走进了我的酒...</p>
                        <a href="" class="info-num">
                            128.9K篇文章 · 1324.2K人关注
                        </a>
                        <a href class="btn">
                            + 关注
                        </a>
                    </div>
                </li>
                <li>
                    <span>简书推荐专题</span>

                    <div class="info">
                        <a href="" class="pho"><img src="<?php echo IMG_URL;?>
/1.jpg" alt=""></a>
                        <a href="" class="title">城市故事</a>
                        <p>世界上有那么多的城镇，城镇中有那么多的酒馆，她却偏偏走进了我的酒...</p>
                        <a href="" class="info-num">
                            128.9K篇文章 · 1324.2K人关注
                        </a>
                        <a href class="btn">
                            + 关注
                        </a>
                    </div>
                </li>
                <li>
                    <span>简书推荐专题</span>

                    <div class="info">
                        <a href="" class="pho"><img src="<?php echo IMG_URL;?>
/1.jpg" alt=""></a>
                        <a href="" class="title">城市故事</a>
                        <p>世界上有那么多的城镇，城镇中有那么多的酒馆，她却偏偏走进了我的酒...</p>
                        <a href="" class="info-num">
                            128.9K篇文章 · 1324.2K人关注
                        </a>
                        <a href class="btn">
                            + 关注
                        </a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</div>
</body>
</html><?php }
}
