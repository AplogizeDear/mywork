<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-30 00:47:43
  from "D:\wamp64\www\MVC-PHP\template\index\write.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-23',
  'unifunc' => 'content_59f676af4dbf30_47088868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ef41cd183276e29aa50056f1a665aeae2cbe186' => 
    array (
      0 => 'D:\\wamp64\\www\\MVC-PHP\\template\\index\\write.html',
      1 => 1509324375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f676af4dbf30_47088868 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/public.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/write.css">
    <?php echo '<script'; ?>
 src="<?php echo EDITOR_URL;?>
/ueditor.all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo EDITOR_URL;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo EDITOR_URL;?>
/ueditor.all.js"><?php echo '</script'; ?>
>
    <title>写文章页面</title>
</head>
<body>

<div class="expansion">
    <div class="exp-left">
            <a href="index.php?m=index&f=index&a=init" class="back"><span>回首页</span></a>
            <div class="net-book">
                <a href="javascript:;" class="new">+ 新建文集</a>
            </div>
            <ul class="note-list">
                <li><a href="" class="daily">日记本</a></li>
                <li><a href="" class="daily">随笔</a></li>
            </ul>
    </div>
    <div class="exp-middle">
        <div class="cont">
            <div class="bb">
                <img src="<?php echo IMG_URL;?>
/book.jpg" alt="">
            </div>
        </div>
        <h5>在此处添加标题</h5>
    </div>
    <form action="index.php?m=index&f=index&a=submit" method="post">
    <div class="exp-right">
        <input type="text" placeholder="标题" name="title">
        <?php echo '<script'; ?>
 id="container" name="content" type="text/plain" id="editor">
            初始化的内容
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            var ue = UE.getEditor('container');
        <?php echo '</script'; ?>
>
        <button type="submit" id="sum">内容完成后提交</button>
    </div>
    </form>
</div>

</body>
</html><?php }
}
