<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý Đơn hàng</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .order-container {
      display: flex;
      justify-content: space-around;
      margin-top: 20px;
    }

    .order-list {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      width: 45%;
    }

    .order-list h2 {
      text-align: center;
    }

    .order-item {
      margin: 10px 0;
      padding: 10px;
      border: 1px solid #eee;
      border-radius: 5px;
      background-color: #fff;
    }

    .process-button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 8px 12px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 3px;
    }
  </style>
</head>
<body>

  <div class="order-container">
    <div class="order-list" id="unprocessedOrders">
      <h2>Đơn hàng chưa xử lý</h2>
    </div>

    <div class="order-list" id="processedOrders">
      <h2>Đơn hàng đã xử lý</h2>
    </div>
  </div>

  <script>
    // Mô phỏng dữ liệu đơn hàng
    const orders = [
      { id: 1, status: 'unprocessed', content: 'Đơn hàng 1 chưa xử lý' },
      { id: 2, status: 'processed', content: 'Đơn hàng 2 đã xử lý' },
      { id: 3, status: 'unprocessed', content: 'Đơn hàng 3 chưa xử lý' },
      // Thêm dữ liệu đơn hàng khác tại đây
    ];

    // Hiển thị đơn hàng vào danh sách tương ứng
    orders.forEach(order => {
      const orderItem = document.createElement('div');
      orderItem.classList.add('order-item');
      orderItem.textContent = order.content;

      const processButton = document.createElement('button');
      processButton.classList.add('process-button');
      processButton.textContent = 'Đã xử lý';
      processButton.addEventListener('click', () => moveOrder(order.id));

      if (order.status === 'unprocessed') {
        document.getElementById('unprocessedOrders').appendChild(orderItem);
        orderItem.appendChild(processButton);
      } else {
        document.getElementById('processedOrders').appendChild(orderItem);
      }
    });

    // Di chuyển đơn hàng từ chưa xử lý sang đã xử lý
    function moveOrder(orderId) {
      const orderToMove = orders.find(order => order.id === orderId);
      if (orderToMove) {
        orderToMove.status = 'processed';

        // Tìm và di chuyển đơn hàng
        const orderItem = document.querySelector(`#unprocessedOrders .order-item:contains("${orderToMove.content}")`);
        if (orderItem) {
          orderItem.remove();
          document.getElementById('processedOrders').appendChild(orderItem);
        }
      }
    }

    // Thêm hàm contains cho Element
    Element.prototype.contains = function (text) {
      return this.textContent.indexOf(text) !== -1;
    };
  </script>

</body>
</html>
