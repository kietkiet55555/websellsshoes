<?php
$chuoi = "Đây là chuỗi mẫ để tìm kiếm.";
$timKiem = "mẫu";

// Tìm chuỗi con trong chuỗi
$timThay = strstr($chuoi, $timKiem);

// Kiểm tra nếu chuỗi con được tìm thấy
if ($timThay !== false) {
    echo "Chuỗi con được tìm thấy: $timThay";
} else {
    echo "Chuỗi con không được tìm thấy trong chuỗi.";
}
?>
