<?php

function displayProducts($currentPage, $kqkt, $row, $startIndex)
{
    $itemsPerPage =8;
    if($currentPage == 0) {
        $m=1;
        while ($row = mysqli_fetch_array($kqkt)) {
        $imgshoes  = $row['anhgiay'];
        $nameshoes = $row['tensp'];
        $priceshoes = $row['giaban'];
        $folder = $row['thuonghieu'];
        echo '<a href="test.php" class="frameshoes"><img src="./img/'. $folder.'/' . (isset($imgshoes) ? $imgshoes : '') . '" alt="anh giay">
        <p>' . (isset($nameshoes) ? $nameshoes : '') . ' </p><p id="price"> ' . (isset($priceshoes) ? $priceshoes : '') . ' </p></a> ';
    
        if ($m % 4 == 0) {
            echo "<br>";
        }
        if($m == $itemsPerPage) break;

        $m++;
        }
    } else if($currentPage == 1){
        $m=1;
        while ($row = mysqli_fetch_array($kqkt)) {
        $imgshoes  = $row['anhgiay'];
        $nameshoes = $row['tensp'];
        $priceshoes = $row['giaban'];
        $folder = $row['thuonghieu'];
        echo '<a href="test.php" class="frameshoes"><img src="./img/'. $folder.'/' . (isset($imgshoes) ? $imgshoes : '') . '" alt="anh giay">
        <p>' . (isset($nameshoes) ? $nameshoes : '') . ' </p><p id="price"> ' . (isset($priceshoes) ? $priceshoes : '') . ' </p></a> ';
    
        if ($m % 4 == 0) {
            echo "<br>";
        }
        if($m == $itemsPerPage) break;

        $m++;
        }

    } else if($currentPage != 1){
        $m=1;
        mysqli_data_seek($kqkt,  $startIndex);
        while ($row = mysqli_fetch_array($kqkt)) {

                $imgshoes  = $row['anhgiay'];
                $nameshoes = $row['tensp'];
                $priceshoes = $row['giaban'];
                $folder = $row['thuonghieu'];
                echo '<a href="test.php" class="frameshoes"><img src="./img/'. $folder.'/' . (isset($imgshoes) ? $imgshoes : '') . '" alt="anh giay">
                <p>' . (isset($nameshoes) ? $nameshoes : '') . ' </p><p id="price"> ' . (isset($priceshoes) ? $priceshoes : '') . ' </p></a> ';
                if ($m % 4 == 0) {
                    echo "<br>";
                }       

                if($m == $row_count) break;
                $m++;
            }

    } 
}







?>
  