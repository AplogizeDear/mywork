<?php
/* 其他页面继承此类，并且获得他的功能*/
class main{
    public function __construct()
    {
        $smartyobj=new Smarty();
        $smartyobj->setCompileDir("compile");
        $smartyobj->setTemplateDir("template");
        $this->smartyobj=$smartyobj;
    }
}