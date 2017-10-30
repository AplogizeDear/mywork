<?php
/**
 * 面向对象   类，控制器，路由  实现调度通过地址栏;
 *  private static 静态的属性通过self::$name 来调用;
 *  webpck  grunt 混淆;
 * $_REQUEST   获取请求的数据(post和get能够同时获取);
 *
 * m 文件夹  m=index  f=index  a=init or a=list
 * f 文件
 * a 类
 *
 * 先写对象在写方法
 */
if(!defined("COME")){
    echo "非法接入";
}
class route{
   private static $m;
   private static $f;
   private static $a;
    private function getInfo(){
        self::$m=isset($_REQUEST["m"]) && !empty($_REQUEST["m"])? $_REQUEST["m"]:"index";
        self::$f=isset($_REQUEST["f"]) && !empty($_REQUEST["f"])? $_REQUEST["f"]:"index";
        self::$a=isset($_REQUEST["a"]) && !empty($_REQUEST["a"])? $_REQUEST["a"]:"init";
    }
    public function set(){
        /* 获取参数值 */
        $this->getInfo();
        /* $m=index文件夹 */
        $murl=MODEL_PATH."/".self::$m;
        if(is_dir($murl)){
            /*$f=index文件 判断是否有index.class.php */
            $furl=MODEL_PATH."/".self::$m."/".self::$f.".class.php";
            if(is_file($furl)){
                include_once $furl;
                if(class_exists(self::$f)){
                    $indexobj=new self::$f();
                    /* $a=init方法 */
                    $method=self::$a;
                    if(method_exists($indexobj,$method)){
                        $indexobj->$method();
                    }else{
                        echo "该方法不存在";
                    }
                }else{
                    echo "类不存在";
                }
            }else{
                echo "文件不存在";
            }
        }else{
            echo "目录不存在";
        }
    }
}