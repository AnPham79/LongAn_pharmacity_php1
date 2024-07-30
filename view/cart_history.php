<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'project1');
mysqli_set_charset($connect, 'utf8');

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    $sql = "SELECT * FROM bill WHERE email = '$email'";
    $result = mysqli_query($connect, $sql);
}
?>

<style>

.purchase-history {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.purchase-item {
    background-color: #f9f9f9;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
}
</style>

<a href="index.php">Quay về trang chủ</a>
<h1>Lịch sử mua hàng</h1>

<div class="purchase-history">
    <?php while ($each = mysqli_fetch_assoc($result)) : ?>
        <div class="purchase-item">
            <p><strong>Name:</strong> <?php echo $each['name'] ?></p>
            <p><strong>Phone Number:</strong> <?php echo $each['phonenumber'] ?></p>
            <p><strong>Address:</strong> <?php echo $each['address'] ?></p>
            <p><strong>Tên sản phẩm:</strong>Sản phẩm thuốc</p>
            <p><strong>Quantity:</strong> <?php echo $each['quantity'] ?></p>
            <p><strong>Sum:</strong> <?php echo $each['sum'] ?> VND</p>
            <p><strong>Email:</strong> <?php echo $each['email'] ?></p>
            <?php if ($each['status'] == 1)  {
                echo '<b style="color:red;">đơn hàng của bạn chưa được xác nhận</b>';
            } elseif ($each['status'] == 2) {
                echo '<b style="color:green;">đơn hàng của bạn đã được xác nhận</b>';
            } ?>
        </div>
    <?php endwhile; ?>
</div>
