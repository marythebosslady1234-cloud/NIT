<?php
$phoneData = explode("|", $_POST['phone']);
$phone_name = $phoneData[0];
$price = $phoneData[1];
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>

<h2>Fill Your Details</h2>

<form action="payment_method.php" method="POST">
    <input type="hidden" name="phone_name" value="<?php echo $phone_name; ?>">
    <input type="hidden" name="price" value="<?php echo $price; ?>">

    Full Name: <br>
    <input type="text" name="fullname" required><br><br>

    Phone Number: <br>
    <input type="text" name="phone_number" required><br><br>

    <button type="submit">Proceed to Payment</button>
</form>

</body>
</html>