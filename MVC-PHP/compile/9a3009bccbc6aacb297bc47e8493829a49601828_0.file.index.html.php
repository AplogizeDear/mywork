<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-29 08:16:45
  from "D:\wamp64\www\MVC-PHP\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-23',
  'unifunc' => 'content_59f58e6d6c5fe3_09923640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a3009bccbc6aacb297bc47e8493829a49601828' => 
    array (
      0 => 'D:\\wamp64\\www\\MVC-PHP\\template\\index\\index.html',
      1 => 1509155305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f58e6d6c5fe3_09923640 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/public.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/index.css">
    <?php echo '<script'; ?>
 src=<?php echo JS_URL;?>
/jquery.js><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/index.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="fill"></div>
<!--头部导航-->
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
            <ul class="mi-left-two">
                <li><a href="index.php?m=index&f=index&a=init">发现</a></li>
                <li><a href="javascript:;">下载APP</a></li>
                <li class="search">
                    <form action="">
                        <input type="text" name="q" value="" autocomplete="off" placeholder="搜索"
                               class="search-input">
                        <a href="" class="s-btn"><i class="iconfont icon-sousuo"></i></a>
                    </form>
                </li>
            </ul>
            <div class="mi-right">
                <div class="login-block">
                <a href="index.php?m=index&f=index&a=reg" class="reg">注册</a>
                <span></span>
                <a href="index.php?m=index&f=index&a=login" class="login">登录</a>
                </div>
                <div class="head-p">
                    <div id="triangle-up"></div>
                    <img src="<?php echo IMG_URL;?>
/header-2" alt="">
                    <ul class="drop-menu">
                        <li><a href="index.php?m=index&f=index&a=person">我的主页</a></li>
                        <li><a href="index.php?m=index&f=index&a=collect">收藏的文章</a></li>
                        <li><a href="index.php?m=index&f=index&a=love">喜欢的文章</a></li>
                        <li><a href="index.php?m=index&f=index&a=price">我的钱包</a></li>
                        <li><a href="index.php?m=index&f=index&a=car">我的购物车</a></li>
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
<div class="container">
<div class="row">
    <!--轮博图-->
    <div class="slide">
        <div class="item">
        <div class="sl-left">
            <a href=""><img src="<?php echo IMG_URL;?>
/banner.jpg" alt=""></a>
        </div>
        <div class="sl-right">
            <div class="sl-top">
                <a href=""><img src="<?php echo IMG_URL;?>
/banner2.jpg" alt=""></a>
            </div>
            <div class="sl-bot">
                <a href=""><img src="<?php echo IMG_URL;?>
/banner3.jpg" alt=""></a>
            </div>
        </div>
        </div>
    </div>
    <!--查看标题分类-->
    <div class="main">
        <div class="cllection">
            <a href="" class="lei">
                <img src="<?php echo IMG_URL;?>
/logo-1.jpg" alt="">
                <div class="name">读书</div>
            </a>
            <a href="" class="lei">
                <img src="<?php echo IMG_URL;?>
/logo-2.jpg" alt="">
                <div class="name">散文</div>
            </a>
            <a href="" class="many">更多热门专题<i class="iconfont icon-dayuhao"></i></a>
        </div>
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
    <div class="aside">
        <!--右侧logo-->
        <div class="as-ph">
            <a href=""><img src="<?php echo IMG_URL;?>
/aside-1.png" alt=""></a>
            <a href=""><img src="<?php echo IMG_URL;?>
/aside.png" alt=""></a>
            <a href=""><img src="<?php echo IMG_URL;?>
/aside-2.png" alt=""></a>
            <a href=""><img src="<?php echo IMG_URL;?>
/aside-4.png" alt=""></a>
            <a href=""><img src="<?php echo IMG_URL;?>
/aside-3.png" alt=""></a>
        </div>
        <!--二维码-->
        <a href="" class="app">
            <img src="<?php echo IMG_URL;?>
/erwei.png" alt="二维码">
            <div class="info">
                <div class="title">下载简书手机APP<i class="iconfont icon-dayuhao"></i></div>
                <div class="description">随时随地发现和创作内容</div>
            </div>
        </a>
        <!--简书日报-->
        <div class="daily">
            <div class="da-top">
            <div class="title">简书日报</div>
            <a href="" class="look-history">查看往期</a>
            </div>
            <div class="da-mi">
                <a href="" target="_blank" class="note">
                    <div class="note-title">
                        简婶揭秘013 —— 为什么社交软件让我们越来越寂寞？
                    </div>
                </a>
                <a href="" target="_blank" class="note">
                    <div class="note-title">
                        简影喵009—简书电影@釜山国际电影节系列①：《追·踪》
                    </div>
                </a>
            </div>
        </div>
        <!--推荐作者-->
        <div class="recommended">
            <div class="re-top">
                <div class="title-left">推荐作者</div>
                <a href="" class="title-right"><i class="iconfont icon-huanyipi"></i>换一批</a>
            </div>
            <ul class="list">
                <li>
                    <a href="" target="_blank"><img src="<?php echo IMG_URL;?>
/as-1.png" alt=""></a>
                    <a href="" class="li-name">简书出版</a>
                    <a href="" class="follow">
                        <i class="iconfont icon-jiaguanzhu"></i>
                    </a>
                    <p>写了247.9k字 · 18.1k喜欢</p>
                </li>
                <li>
                    <a href="" target="_blank"><img src="<?php echo IMG_URL;?>
/as-1.png" alt=""></a>
                    <a href="" class="li-name">简书出版</a>
                    <a href="" class="follow">
                        <i class="iconfont icon-jiaguanzhu"></i>
                    </a>
                    <p>写了247.9k字 · 18.1k喜欢</p>
                </li>
                <li>
                    <a href="" target="_blank"><img src="<?php echo IMG_URL;?>
/as-1.png" alt=""></a>
                    <a href="" class="li-name">简书出版</a>
                    <a href="" class="follow">
                        <i class="iconfont icon-jiaguanzhu"></i>
                    </a>
                    <p>写了247.9k字 · 18.1k喜欢</p>
                </li>
                <li>
                    <a href="" target="_blank"><img src="<?php echo IMG_URL;?>
/as-1.png" alt=""></a>
                    <a href="" class="li-name">简书出版</a>
                    <a href="" class="follow">
                        <i class="iconfont icon-jiaguanzhu"></i>
                    </a>
                    <p>写了247.9k字 · 18.1k喜欢</p>
                </li>
                <li>
                    <a href="" target="_blank"><img src="<?php echo IMG_URL;?>
/as-1.png" alt=""></a>
                    <a href="" class="li-name">简书出版</a>
                    <a href="" class="follow">
                        <i class="iconfont icon-jiaguanzhu"></i>
                    </a>
                    <p>写了247.9k字 · 18.1k喜欢</p>
                </li>
            </ul>
        </div>
        <!--查看更多-->
        <a href="" class="look-many">
            查看更多 >
        </a>
    </div>
</div>
</div>


</body>
</html><?php }
}
