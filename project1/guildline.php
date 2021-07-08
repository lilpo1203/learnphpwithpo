<!-- Bước 1: Xây dựng cơ sở dữ liệu
- Tạo CSDL: db1656;
- Tạo bảng Student
create table student (
    id int primary key auto_increment,
    fullname varchar(80) not null,
    age int,
    address varchar(200)
)
Bước 2: Tạo dự án PHP
- Tạo giao diện
- DBHelper -> Cấu hình liên kết với database -->