<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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

        .thumbnail {
            height: 60px;
            width: 100px;
            overflow: hidden;
        }

        .thumbnail img {
            width: 100%;
        }

        #input1 {
            margin-left: 645px;
        }
    </style>
</head>
<body>

<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <form method="post" action="myPhp.php">
        <input type="text" id="input1" name="search" placeholder="Nhập tên cần tìm">
        <input type="submit" id="input2" placeholder="search">
    </form>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>

        <?php
        $customerlists = array(
            "1" => array("name" => "Nguyễn Thư Dung", "birthday" => "1995-01-01", "address" => "Hà Nội", "picture" => "picture/thu_dung.jpg"),
            "2" => array("name" => "Thư Ngọc Trinh", "birthday" => "1989-09-27", "address" => "Trà Vinh", "picture" => "picture/ngoc-trinh-1.jpg"),
            "3" => array("name" => "Bà Tưng Cr7", "birthday" => "1993-09-06", "address" => "Hà Nội", "picture" => "picture/batung.jpg"),
            "4" => array("name" => "Cr7 Nguyễn", "birthday" => "1985-02-05", "address" => "Portugal", "picture" => "picture/ronaldo.jpg"),
            "5" => array("name" => "Nguyễn Messi", "birthday" => "1987-06-24", "address" => "Argentina", "picture" => "picture/messi.jpg")
        );

        foreach ($customerlists as $key => $values) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $values['name'] . "</td>";
            echo "<td>" . $values['birthday'] . "</td>";
            echo "<td>" . $values['address'] . "</td>";
            echo "<td><div class='thumbnail'><image src = '" . $values['picture'] . "'/></div></td>";
            echo "</tr>";
        }

        ?>
    </tr>

</table>
</body>
</html>

