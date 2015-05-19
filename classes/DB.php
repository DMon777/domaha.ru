<?php



class DB {

    public function __construct(){
        mysql_connect("localhost","root","","articles_base");
        mysql_select_db("articles_base");
        mysql_query("SET NAMES 'UTF8'");
        mysql_query("SET CHARACTER SET 'UTF8'");
    }

    public function query($sql){
        $ret_arr = array();
        $res = mysql_query($sql);
        while($row = mysql_fetch_assoc($res)){
            $ret_arr[] = $row;
        }
        return $ret_arr;
    }

} 