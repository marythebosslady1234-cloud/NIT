<?php
include "db.php";

$phone_name = $_POST['phone_name'];
$price = $_POST['price'];
$fullname = $_POST['fullname'];
$phone_number = $_POST['phone_number'];
$payment_method = $_POST['payment_method'];
$amount = $_POST['amount'];

$sql = "INSERT INTO orders 
(phone_name, price, fullname, phone_number, payment_method, amount)
VALUES 
('$phone_name', '$price', '$fullname', '$phone_number', '$payment_method', '$amount')";

mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
</head>
<body>

<h2>Payment Successful ✅</h2>

<p>Thank you <b><?php echo $fullname; ?></b></p>
<p>Phone: <?php echo $phone_name; ?></p>
<p>Payment Method: <?php echo $payment_method; ?></p>

<br>
<a href="index.php">Make Another Order</a>

</body>
</html>