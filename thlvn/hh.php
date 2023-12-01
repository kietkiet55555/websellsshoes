

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Test</title>
    <style>
        /* Thêm CSS cho bảng đơn hàng */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

    <div id="head">
        <!-- Đặt header ở đây -->
    </div>

    <div class="tab">
        <!-- Đặt tab và liên kết xem đơn hàng ở đây -->
        <ul id="tabfilter">
            <li><a href="test.php">Xem đơn hàng</a></li>
            <li><a href="#">Xem doanh số đã bán</a></li>
            <li><a href="#">Xem tất cả giày(có thể xóa, sửa)</a></li> 
            <li><a href="#">Thêm giày</a></li>
            <li><a href="xemdonhang.php">Xem Đơn Hàng</a></li> <!-- Liên kết đến trang xemdonhang.php -->
        </ul>
    </div>

    <div class="areashowshoes">
        <!-- Hiển thị sản phẩm giày ở đây -->
    </div>

    <div class="seprapage">
        <!-- Hiển thị phân trang ở đây -->
        <?php
        // Tạo liên kết phân trang
        for ($page = 1; $page <=  $_SESSION['totalPages']; $page++) {
            echo '<a href="?page=' . $page . '">' . $page . '</a> ';
        }
        ?>
    </div>

    <div id="unprocessedOrders">
        <h2>Đơn hàng chưa xử lý</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Đơn Hàng</th>
                    <th>Tên Khách Hàng</th>
                    <th>Sản Phẩm</th>
                    <th>Giá</th>
                    <!-- Thêm các cột khác nếu cần -->
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resultUnprocessed)) : ?>
                    <tr>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['customer_name']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo number_format($row['price']) . 'đ'; ?></td>
                        <!-- Thêm các cột khác nếu cần -->
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <div id="processedOrders">
        <h2>Đơn hàng đã xử lý</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Đơn Hàng</th>
                    <th>Tên Khách Hàng</th>
                    <th>Sản Phẩm</th>
                    <th>Giá</th>
                    <!-- Thêm các cột khác nếu cần -->
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resultProcessed)) : ?>
                    <tr>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['customer_name']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo number_format($row['price']) . 'đ'; ?></td>
                        <!-- Thêm các cột khác nếu cần -->
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <!-- Đặt footer ở đây -->
    </div>

</body>
</html>
