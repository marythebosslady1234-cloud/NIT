<!DOCTYPE html>
<html>
<head>
    <title>Confirm Payment</title>
</head>
<body>

<h2>Payment Confirmation</h2>

<form action="success.php" method="POST">
    <input type="hidden" name="phone_name" value="<?php echo $_POST['phone_name']; ?>">
    <input type="hidden" name="price" value="<?php echo $_POST['price']; ?>">
    <input type="hidden" name="fullname" value="<?php echo $_POST['fullname']; ?>">
    <input type="hidden" name="phone_number" value="<?php echo $_POST['phone_number']; ?>">
    <input type="hidden" name="payment_method" value="<?php echo $_POST['payment_method']; ?>">

    Amount: <br>
    <input type="number" name="amount" value="<?php echo $_POST['price']; ?>" required><br><br>

    Password / PIN: <br>
    <input type="password" required><br><br>

    <button type="submit">Confirm Payment</button>
</form>

</body>
</html>