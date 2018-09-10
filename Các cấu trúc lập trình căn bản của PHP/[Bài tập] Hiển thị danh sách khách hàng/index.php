<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .thumbnail{
            height: 60px;
            width: 100px;
            overflow: hidden;
        }
        .thumbnail img{
            width:100%;
        }
    </style>
</head>
<body>
<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
</table>
</body>
</html>

<?php
$customerlist = array(
    "1" => array("name" => "Thư Dung", "birthday" => "1995-01-01", "address" => "Hà Nội", "picture" => "picture/thu_dung.jpg" ),
    "2" => array("name" => "Ngọc Trinh", "birthday" => "1989-09-27", "address" => "Trà Vinh", "picture" => "images/img2.jpg"),
    "3" => array("name" => "Bà Tưng", "birthday" => "1993-09-06", "address" => "Hà Nội", "picture" => "images/img3.jpg"),
    "4" => array("name" => "Trần Đăng Khoa", "birthday" => "1983-08-17", "address" => "Hà Tây", "picture" => "images/img4.jpg"),
    "5" => array("name" => "Nguyễn Đình Thi", "birthday" => "1983-08-19", "address" => "Hà Nội", "picture" => "images/img5.jpg")
);
foreach ($customerlist as $key => $values) {
    echo "<tr>";
    echo "<td>" . $key . "</td>";
    echo "<td>" . $values['name'] . "</td>";
    echo "<td>" . $values['birthday'] . "</td>";
    echo "<td>" . $values['address'] . "</td>";
    echo "<td><div class='thumbnail'><image src = '" . $values['picture'] . "'/></div></td>";
    echo "</tr>";
}
?>