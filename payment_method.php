<!DOCTYPE html>
<html>
<head>
    <title>Select Payment</title>
</head>
<body>

<h2>Select Payment Method</h2>

<form action="payment_confirm.php" method="POST">
    <input type="hidden" name="phone_name" value="<?php echo $_POST['phone_name']; ?>">
    <input type="hidden" name="price" value="<?php echo $_POST['price']; ?>">
    <input type="hidden" name="fullname" value="<?php echo $_POST['fullname']; ?>">
    <input type="hidden" name="phone_number" value="<?php echo $_POST['phone_number']; ?>">

    <input type="radio" name="payment_method" value="M-Pesa" required> M-Pesa <br><br>
    <input type="radio" name="payment_method" value="Airtel Money"> Airtel Money <br><br>
    <input type="radio" name="payment_method" value="Halo Pesa"> Halo Pesa <br><br>
    <input type="radio" name="payment_method" value="Mix by Yas"> Mix by Yas <br><br>

    <button type="submit">Continue</button>
</form>

</body>
</html>