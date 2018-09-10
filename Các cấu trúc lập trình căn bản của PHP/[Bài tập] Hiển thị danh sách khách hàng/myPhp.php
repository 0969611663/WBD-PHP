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
        <?php
        $customerlists = array(
            "1" => array("name" => "Nguyễn Thư Dung", "birthday" => "1995-01-01", "address" => "Hà Nội", "picture" => "picture/thu_dung.jpg"),
            "2" => array("name" => "Thư Ngọc Trinh", "birthday" => "1989-09-27", "address" => "Trà Vinh", "picture" => "picture/ngoc-trinh-1.jpg"),
            "3" => array("name" => "Bà Tưng Cr7", "birthday" => "1993-09-06", "address" => "Hà Nội", "picture" => "picture/batung.jpg"),
            "4" => array("name" => "Cr7 Nguyễn", "birthday" => "1985-02-05", "address" => "Portugal", "picture" => "picture/ronaldo.jpg"),
            "5" => array("name" => "Nguyễn Messi", "birthday" => "1987-06-24", "address" => "Argentina", "picture" => "picture/messi.jpg")
        );

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $searchName = $_POST['search'];
            $count = 0;

            foreach ($customerlists as $key => $customerlist) {
                $pos = strpos($customerlist['name'], $searchName);
                if ($pos !== false) {
                    echo "<tr>";
                    echo "<td>" . $key . "</td>";
                    echo "<td>" . $customerlist['name'] . "</td>";
                    echo "<td>" . $customerlist['birthday'] . "</td>";
                    echo "<td>" . $customerlist['address'] . "</td>";
                    echo "<td><div class='thumbnail'><image src = '" . $customerlist['picture'] . "'/></div></td>";
                    echo "</tr>";
                    $count++;
                }
            }
            if ($count == 0) {
                echo "Không tìm thấy khách hàng";
            }
        }


        //CÁCH 2
        //        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //            $searchName = $_POST["search"];
        //            $flag = 0;
        //            foreach ($customerlists as $key => $customer) {
        //                $splitName = explode(" ", $customer["name"]);
        //                for ($i = 0; $i < count($splitName); $i++) {
        //                    if ($searchName === $splitName[$i]) {
        //                        echo "<tr>";
        //                        echo "<td>" . $key . "</td>";
        //                        echo "<td>" . $customer['name'] . "</td>";
        //                        echo "<td>" . $customer['birthday'] . "</td>";
        //                        echo "<td>" . $customer['address'] . "</td>";
        //                        echo "<td><div class='thumbnail'><image src = '" . $customer['picture'] . "'/></div></td>";
        //                        echo "</tr>";
        //                        $flag = 1;
        //                    }
        //                }
        //            }
        //            if ($flag == 0) {
        //                echo "Không tìm thấy khách hàng";
        //            }
        //        }
        //        ?>
    </tr>

</table>
</body>
</html>