<?php

require_once "A_News.php";

class Article extends A_News {

    protected $table = 'articles_table';

    public function add($title,$article){
        $sql = "INSERT INTO ".$this->table." (`title`,`article`) VALUES ('$title','$article') ";
        $db = new DB();
        mysql_query($sql);
    }

} 