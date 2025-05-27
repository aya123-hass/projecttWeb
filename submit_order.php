<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $product = $_POST['productName'];
  $qty = $_POST['quantity'];
  $total = $_POST['totalPrice'];
  $city = $_POST['city'];

  echo "<h2 style='text-align:center; margin-top:50px;'>Thank you! Your order for <b>$product</b> has been received.<br>Total: $$total - Shipping to: $city</h2>";
}
?>
