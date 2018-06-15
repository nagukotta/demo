<?php error_reporting(0);

class test{


var $host = "localhost";
var $root = "root";
var $pass = "";
var $db1   ="test";
var $qur ="mysql_query";


function db_connection(){

   $func = 'mysql_connect'; 
   $db='mysql_select_db';

   $func($host, $root, $pass);
   $db("test");
}


function get_users(){


$sql = "select * from users";
$qur = mysql_query($sql);
return $qur;

}



}

$obj = new  test();

$obj->db_connection();

$r = $obj->get_users();

while($row = mysql_fetch_array($r)){

echo $row[1]."<br>";
}


?>