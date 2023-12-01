<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Image Slider</title>
<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['checkbox_values'])){
        // Lặp qua mảng các checkbox được chọn
        foreach($_POST['checkbox_values'] as $selected){
            echo $selected . " được chọn.<br>";
            // Thực hiện xử lý với giá trị của checkbox đã chọn ở đây
        }
    } else {
        echo "Không có checkbox nào được chọn.";
    }
}


?>
</head>
<body>

<form action="aa.php" method="post">
    <input type="checkbox" name="checkbox_values[]" value="option1"> Option 1
    <input type="checkbox" name="checkbox_values[]" value="option1"> Option 1
    <input type="checkbox" name="checkbox_values[]" value="option2"> Option 2
    <input type="checkbox" name="checkbox_values[]" value="option3"> Option 3
    <input type="submit" name="submit" value="Submit">
</form>


<script src="script.js"></script>
</body>
</html>
