<?php   
    require_once('dbhelp.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí sinh viên</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Quản lí sinh viên
                <form action="" method="GET">
                <input type="text" name="s" class="form-control" style="margin:15px 0">
                </form>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>So thu tu</th>
                            <th>Ho va ten</th>
                            <th>Tuoi</th>
                            <th>Dia chi</th>
                            <th width="60px"></th>
                            <th width="60px"></th>
                        </tr>
                    </thead>
                    <tbody>
<?php
if(isset($_GET['s']) && $_GET['s'] != ''){
    $sql = 'select * from student where fullname like "%'.$_GET['s'].'%"';
}else{
    $sql = 'select * from student';
}
$studentList = executeResult($sql);
$index = 1;
foreach ($studentList as $std){
    echo '<tr>
    <td>'.($index++).'</td>
    <td>'.$std['fullname'].'</td>
    <td>'.$std['age'].'</td>
    <td>'.$std['address'].'</td>
    <td><button class="btn btn-warning" onclick=\'window.open("input.php?id='.$std['id'].'", "_self")\'>Edit</button></td>
    <td><button class="btn btn-danger" onclick="deleteStudent('.$std['id'].')">Delete</button></td>
    </tr>';
    }
?>      
                    </tbody>
                </table>
                <button class="btn btn-success" onclick="window.open('input.php', '_self')">Add Student</button>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function deleteStudent(id){
            option = confirm('Ban co muon xoa sinh vien nay ko')
            if(!option){
                return;
            }
            $.post('deleteStudent.php', {
                'id': id
            },function(data){
                alert("Xoa thanh cong !!!")
                location.reload();
            })
        }
    </script>
</body>
</html>