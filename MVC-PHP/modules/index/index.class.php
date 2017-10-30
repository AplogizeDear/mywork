<?php
class index extends main{
    /* 主页 */
    function init(){
        $this->smartyobj->display("index/index.html");
    }
    /* 前台登录页面 */
    function login(){
        $this->smartyobj->display("admin/login.html");
    }
    /* 后台登录页面 */
    function reg(){
        $this->smartyobj->display("admin/reg.html");
    }
    /* 详情页面 */
    function detail(){
        $this->smartyobj->display("index/detail.html");
    }
    /* 关注页面 */
    function follow(){
        $this->smartyobj->display("index/follow.html");
    }
    /* 消息页面 */
    function message(){
        $this->smartyobj->display("index/message.html");
    }
    /* 写作页面 */
    function write(){
        $this->smartyobj->display("index/write.html");
    }
    /* 个人主页 */
    function person(){
        $this->smartyobj->display("index/person.html");
    }
    /* 收藏页面 */
    function collect(){
        $this->smartyobj->display("index/collect.html");
    }
    /*喜欢的文页面*/
    function love(){
        $this->smartyobj->display("index/love.html");
    }
    /*设置页面*/
    function set(){
        $this->smartyobj->display("index/set.html");
    }
    /*退出页面*/
    function back(){
        $this->smartyobj->display("index/back.html");
    }
    /* 我的钱包页面或者购物车页面 */
    function car(){
        $this->smartyobj->display("index/car.html");
    }
    function price(){
        $this->smartyobj->display("index/price.html");
    }
    /* 检查 */
    function submit(){
        var_dump( $_POST);
    }
    function check(){
        $aname=$_POST["aname"];
        $apass=$_POST["apass"];
        $imgcode=strtolower($_POST["imgcode"]);
        $sesscode=strtolower($_SESSION["code"]);
        /* 验证码 */
        if($imgcode==$sesscode){
            echo "<script>alert('登陆成功');
            location.href='index.php?m=index&f=index&a=init';
            sessionStorage.setItem('name','yes')</script>";
        }else{
            echo "<script>alert('验证码错误，登陆失败');
            location.href='index.php?m=index&f=index&a=login';</script>";
        }
    }
    /* 验证码 */
    function code(){
        include LIBS_PATH."/code.class.php";
        $obj=new code();
        $obj->out();
    }
}