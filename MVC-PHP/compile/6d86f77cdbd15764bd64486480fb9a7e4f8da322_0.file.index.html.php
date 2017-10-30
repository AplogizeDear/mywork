<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-19 11:57:26
  from "D:\wamp64\www\MVC-PHP\template\index\index.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-23',
  'unifunc' => 'content_59e89326111fb7_03483655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d86f77cdbd15764bd64486480fb9a7e4f8da322' => 
    array (
      0 => 'D:\\wamp64\\www\\MVC-PHP\\template\\index\\index.php',
      1 => 1508414240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e89326111fb7_03483655 (Smarty_Internal_Template $_smarty_tpl) {
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
/index.css">
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
<ul>
    <li>名字 <?php echo $_smarty_tpl->tpl_vars['v']->value["Sname"];?>
</li>
    <li>年龄 <?php echo $_smarty_tpl->tpl_vars['v']->value["Ssex"];?>
</li>
</ul>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</body>
</html><?php }
}
