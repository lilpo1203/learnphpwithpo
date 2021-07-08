<?php
require_once("define.php");
// tao ket noi voi database
$connect = new mysqli(HOST,USERNAME,PASSWORD,DATABASE);
// cho phep databse luu tieng viet
mysqli_set_charset($connect,"utf8");
// Kiem tra ket noi co thanh cong khong
if($connect->connect_error){
    var_dump($connect->connect_error);
    die();
}