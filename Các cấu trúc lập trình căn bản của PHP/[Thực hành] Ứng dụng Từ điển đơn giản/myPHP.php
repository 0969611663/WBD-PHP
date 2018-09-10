<?php
$dictionary = [
    "hello" => "Xin chào",
    "how" => "Thế nào",
    "book" => "Quyển vở",
    "pen" => "Cái bút",
    "phone" => "Điện thoại",
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $discription) {
        if ($word == $searchword) {
            echo "Từ: " . $word . ".<br> Dịch ra có nghĩa là: " . $discription.".";
            echo "<br>";
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo "Không tìm thấy từ cần tra.";
    }
}
?>