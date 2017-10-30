<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-29 07:53:44
  from "D:\wamp64\www\MVC-PHP\index.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-23',
  'unifunc' => 'content_59f5890853cfb3_98656543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '264528db44dc213ff51a973fa1e3f46762df321f' => 
    array (
      0 => 'D:\\wamp64\\www\\MVC-PHP\\index.php',
      1 => 1508996817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f5890853cfb3_98656543 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>session_start();
header("Content-type:text/html;charset=utf-8");
define("COME","yes");
/*
 *   单入口文件
 *  1.定义常用路径
 *   文件路径         web路径  http  host  主机名
 *   define() 定义一个常量 /  文件路径，记得加引号
 * */
/* 定义常见文件路径 */
define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"]);
define("APP_PATH",substr($_SERVER["SCRIPT_FILENAME"],0,strrpos($_SERVER["SCRIPT_FILENAME"],"/")));
define("LIBS_PATH",APP_PATH."/libs");
define("MODEL_PATH",APP_PATH."/modules");
define("TEMPLATE_PATH",APP_PATH."/template");
/* 定义服务器路径 */
/* http */
define("PORT",strtolower(strchr($_SERVER["SERVER_PROTOCOL"],"/",true)));
/* localhost */
define("HOST",$_SERVER["HTTP_HOST"]);
define("APP_URL",substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")));
define("HTTP_PATH",PORT."://".HOST.APP_URL);
define("STATIC_URL",HTTP_PATH."/static");
define("CSS_URL",STATIC_URL."/css");
define("JS_URL",STATIC_URL."/js");
define("IMG_URL",STATIC_URL."/img");
define("PHP_URL",STATIC_URL."/php");
/*定义百度编辑器的路径*/
define("EDITOR_URL",HTTP_PATH."/editor");

/* 控制器,设置的是路由 */
include_once LIBS_PATH."/Route.class.php";
include_once LIBS_PATH."/main.class.php";
include_once LIBS_PATH."/Smarty.class.php";
include_once LIBS_PATH."/db.class.php";
$config=include_once APP_PATH."/config.php";
$obj=new route();
$obj->set();
<?php echo '?>';
}
}
