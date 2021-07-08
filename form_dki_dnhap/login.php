<?php
function login(){
    if(!empty($_POST)){
        $email = $_POST["email"];
        $passwrd = $_POST["password"];
        require_once("sql_connect.php");
         // Thuc hieu truy van du lieu
         $query = "SELECT * FROM STUDENT WHERE EMAIL ='".$email."' AND PASSWORD = '".$passwrd."'";
         $result = mysqli_query($connect, $query);
         $data = array();
         while($row = mysqli_fetch_array($result,1)){
             $data[] = $row;
         }
        require_once("sql_close.php");
         if($data != null && count($data) > 0){
             header("Location: welcome.php");
         }
    }
}
?>