<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-28 04:17:02
  from "D:\wamp64\www\MVC-PHP\template\index\car.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-23',
  'unifunc' => 'content_59f404beca4577_14991903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f051ae1cac7e305689dac7ebf571ff6ecc36c8e' => 
    array (
      0 => 'D:\\wamp64\\www\\MVC-PHP\\template\\index\\car.html',
      1 => 1509164220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f404beca4577_14991903 (Smarty_Internal_Template $_smarty_tpl) {
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
/car.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/public.js"><?php echo '</script'; ?>
>
    <title>我的购物车</title>
</head>
<body>
<div class="fill"></div>
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
<div class="content">
    <div class="head">
        <span>我的购物车</span>
    </div>
    <div class="main">
        <ul class=nav>
            <li><a href="">全部商品</a><span>1</span><em></em></li>
            <li><a href="">降价商品</a><span>0</span><em></em></li>
        </ul>
        <ul class="head-top">
            <li><input class="Check"  type="checkbox" name="select-all"><span>全选</span></li>
            <li><span>文章标题</span></li>
            <li><span>单价</span></li>
            <li><span>金额</span></li>
            <li><span>操作</span></li>
        </ul>
        <div class="order-content">
            <div class="middle">
                <input class="check-one"  type="checkbox" name="">
                <div class="author">
                    <div class="imgbox">
                        <img src="<?php echo IMG_URL;?>
/header-2.jpg" alt="">
                    </div>
                    <div class="title">
                        <a href="index.php?m=index&f=index&a=detail">我的诗和远方里，再无你</a>
                    </div>
                    <div class="price">
                        ￥<span>10</span>
                    </div>
                    <div class="shiji">
                        ￥<span>10</span>
                    </div>
                    <div class="caozuo">
                        <a href="" class="yidong">移入收藏夹</a>
                        <a href="" class="delete">删除</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sum">
            <div class="choose">
            <input class="check-two" id="" type="checkbox" name="">
            <span>全选</span>
            </div>
            <div class="del">
                <a href="" class="del-one">删除</a>
            </div>
            <div class="yichu">
                <a href="" class="yi-one">移入收藏夹</a>
            </div>
            <div class="past">
                已选商品 <span>0</span> 件
            </div>
            <div class="zong">
                合计：<span>0.00</span>
            </div>
            <div class="jiesuan">
                <a href="" class="sum-sum">结算</a>
            </div>
        </div>
    </div>

</div>
</body>
</html><?php }
}
