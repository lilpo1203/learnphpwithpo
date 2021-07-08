<?php
function register(){
    if(!empty($_POST)){
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        // tao ket noi voi database
        require_once("sql_connect.php");
        // Thuc hieu truy van du lieu
        $query = "INSERT INTO STUDENT (FULL_NAME, EMAIL, PASSWORD) VALUES('".$fullname."','".$email."','".$password."')";
        mysqli_query($connect, $query);

        // Dong ket noi
        require_once("sql_close.php");
        header("Location: bai5.php");

    }
}
?>