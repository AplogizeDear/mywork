2017/10/16
MVC简介
html+css  描述性的语言
 js       汇编语言->指令集可识别
 ajax       php（PDO  mysqli）-> smarty    thinkphp   Larary(基于node.js)
                        js -> jquery原理

 amd  cmd   vue.js   node.js    thinkphp    laravel
 1.框架
 2.造轮子

 1.前后台没办法分离
 2.mvc  model(数据)   view   controller
 3.文件结构的混乱   工程化的思维方式
 4.权限控制  指的是文件是个人都可以进入  代码复用的混乱，单入口文件


controller  路由 一个概念 调度方式（）
路由实现方式  地址栏  内存对变量的控制

第一种:地址栏
 libs  存放的基础文件
 modules 存放的是模块   所有的页面和后台都是通过这个文件夹来跳转页面
 static 存放的是静态文件
 template 存放的是模板

 smarty框架:首先得有一个路由，用来在地址栏分配数据，通过自己设置的参数，可以在某个
 文件下找见某个文件，某种类
 通过单入口文件实现实现路由的调度。
 再然后由modules统一给一个标识用来修改需要修改的模板文件
 然后是吧编译后的文件放到compile里面，页面中展示的文档就是经过编译后放到文件夹里面的文件
 再然后是缓存，是直接运行的html文件，也就是说不需要在经过php解析模块，
 目的是加快服务器的运行速度。以及用户的体验。
 再然后如果有缓存的文件的话就执行缓存的文件，如果没有的话执行的就是生成缓存的文件。
 以上就是对smarty暂时的理解

 mvc(90年代)  mvvm  mvp
 路由
 地址栏   -> 同意管理用户的请求，分发响应的数据->但入口文件  安全性 可维护性  良好的管理
 单入口文件
 面向对象编程的思想  80年代

 移动端的应用  改变认知和行动


2017/10/17  10:00
模板引擎  工作效率  机器运行效率 smarty(框架 用来你解析自己写的模板转换成为php
模块可以解析的文件，也就是php文件)->foreach $stu as $v;$v就是输出来的值

数据库里面取东西
创建配置文件 return array=(
    database=array(
                    ))
引入配置文件
简化sql查询 db.class.php

作用域

tablename
方法  selecttable
        select
        filed
        where
        order
        limit
       fetch_all  5.3之前  mysql解析器
                   5.3     mysqlid

                   过程：首先是组装sql语句  通过几个方法

实现  假如传进来的是自己写的sql语句
        写个方法用来  查看是什么语句

        insert  以数组的方式

        alert table abc auto_increment=2;

        关联查询
           学生表stu  id  name    sex
                      1    a        nan
                      2    b        nv
            课程表classes    id     name
                          1     javascript
                          2       html
            中间表middle  id  stuid   classid
                         1
                         2
                    left join
                    right join
2017/10/20
1.单入口文件
负责处理一个请求的声明周期


2017/10/23
1.基类  父类  子类  extend main
2.
