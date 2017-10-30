<?php
class db{
    function __construct($tablename=""){
        global $config;
        $this->host=$config["database"]["host"];
        $this->username=$config["database"]["username"];
        $this->pass=$config["database"]["pass"];
        $this->dbname= $config["database"]["dbname"];
        $this->table=$tablename;

        $this->ops["field"]="*";
        $this->ops["where"]=$this->ops["order"]=$this->ops["limit"]="";
        $this->connect();
    }
    /*数据库的连接*/
    function connect(){
        $conn = new mysqli($this->host,
            $this->username,
            $this->pass,
            $this->dbname);
        if ($conn->connect_error) {
            die("连接失败: " . $conn->connect_error);
        }
        $conn->query('set names utf8');
        $this->conn=$conn;
    }
    /* 将要查询的表 */
    function selecttable($table){
        $this->table=$table;
    }
    /*数据库的查询 select 字段 from table where 字段 order by 字段 limit 0,2*/
    /* 多条数据的查询 */
    function Query(){
        $sql="select"." ".$this->ops["field"]. "from"." ".$this->table.
            " ".$this->ops["where"]." ".$this->ops["limit"];
        $result=$this->conn->query($sql);
        $arr=array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
//        $arr=$result->mysqli_fetch_all(mysqli_fetch_assoc());
        return $arr;
    }
    /* 单条语句查询 */
    function find(){
        $sql="select"." ".$this->ops["field"]. "from"." ".$this->table.
            " ".$this->ops["where"]." ".$this->ops["limit"];
        $result=$this->conn->query($sql);
        $row=$result->fetch_assoc();
        return $row;
    }
    /* 自定义的sql语句 */
    function exec($sql){
        $result = $this->db->query($sql);
        return $result;
    }
    /* insert into table (  ) values (   ) */
    /* 插入 */
    function insert($arr){
        $attr="";
        $val="";
        foreach ($arr as $k=>$v){
//            echo $k."<br>";  name
//            echo $v."<br>";  zhangsan
            $attr.=$k.",";
            $val.=$v.",";
        }
        $sql="insert into ".$this->table."(".$attr.")"."values"."(".$val.")";
        $this->conn->query($sql);
        return $this->conn->affected_rows;
    }
    /* update table set () where 字段*/
    /* 更新 */
    function updata($sql){
        $sql1="updata ".$this->table." set ".$sql." ".$this->ops["where"];
        $this->conn->query($sql1);
        return $this->conn->affected_rows;
    }
    /* delete from table where*/
    /* 删除 */
    function delete(){
        $sql="delete from".$this->table.$this->ops["where"];
        $this->conn->query($sql);
        return $this->conn->affected_rows;
    }
    /* 把字段做成函数*/
    function filed($field){
        $this->ops["field"]=$field;
        return $this;
    }
    function where($where){
        $this->ops["where"]="where ".$where;
        return $this;
    }
    function order($order){
        $this->ops["order"]="order by ".$order;
        return $this;
    }
    function limit($limit){
        $this->ops["limit"]="limit ".$limit;
        return $this;
    }
}
?>