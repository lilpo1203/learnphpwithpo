<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h1 style="text-align: center;">Welcome master</h1>
    <div class="container-fluid">
        <table class="table table-bordered table-hover">
            <tr>
                <th>No</th>
                <th>Full name</th>  
                <th>Email</th>
                <th>Password</th>                
            </tr>
            <tbody>
                <?php
                    require_once("sql_connect.php");
                    // Thuc hieu truy van du lieu
                    $query = "SELECT * FROM STUDENT";
                    $result = mysqli_query($connect, $query);
                    $data = array();
                    while($row = mysqli_fetch_array($result,1)){
                        $data[] = $row;
                    }
                   require_once("sql_close.php");
                   for($i = 0; $i < count($data); $i++){
                       echo '<tr>
                       <th>'.($i + 1).'</th>
                       <th>'.$data[$i]['FULL_NAME'].'</th>  
                       <th>'.$data[$i]['EMAIL'].'</th>
                       <th>'.$data[$i]['PASSWORD'].'</th>                
                    </tr>';
                   }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>