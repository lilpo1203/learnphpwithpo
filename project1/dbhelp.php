<?php
require_once('config.php');

// Hàm execute dùng cho các lệnh như Insert, Update, Delete
function execute($sql){
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    // query

    mysqli_query($conn, $sql);
    // Dong connection
    mysqli_close($conn);
}

// Hàm executeResult dùng cho lệnh select để lấy kết quả trả về
function executeResult($sql){
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    // query

    $resultset = mysqli_query($conn, $sql);
    $list = [];
    while($row = mysqli_fetch_array($resultset, 1)){
        $list[] = $row;
    }
    // Dong connection
    mysqli_close($conn);
    
    return  $list;
}
