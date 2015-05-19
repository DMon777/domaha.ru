<?php



 abstract class A_News {

     protected $table;

     public function get_all(){
         $sql = "SELECT * FROM ".$this->table;
         $db = new DB();
        $items = $db->query($sql);
         return $items;
     }

     public function get_one($id){
         $sql = "SELECT * FROM ".$this->table." WHERE id=".$id;
         $db = new DB();
         $item = $db->query($sql);
         return $item[0];
     }

     public function add($title,$article){
         $sql = "INSERT INTO ".$this->table." (`title`,`article`) VALUES ('$title','$article') ";
         $db = new DB();
         mysql_query($sql);
     }



 }