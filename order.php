<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['productName'];
  $price = floatval($_POST['productPrice']);
  $qty = intval($_POST['quantity']);
  $total = $price * $qty;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Summary</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  <style>
    body {
      background-color: #fffbea;
      font-family: 'Segoe UI', sans-serif;
      padding: 50px;
    }
    .order-box {
      max-width: 500px;
      margin: auto;
      background: #fff3cd;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.15);
    }
    h2 {
      color: #8b5e00;
      margin-bottom: 20px;
    }
    .btn-submit {
      background-color: #e6b800;
      color: white;
      font-weight: bold;
      border: none;
    }
  </style>
</head>
<body>
  <div class="order-box">
    <h2>Order Summary</h2>
    <p><strong>Product:</strong> <?= htmlspecialchars($name) ?></p>
    <p><strong>Unit Price:</strong> $<?= number_format($price, 2) ?></p>
    <p><strong>Quantity:</strong> <?= $qty ?></p>
    <p><strong>Total Price:</strong> $<?= number_format($total, 2) ?></p>

    <form action="submit_order.php" method="POST">
      <input type="hidden" name="productName" value="<?= htmlspecialchars($name) ?>">
      <input type="hidden" name="productPrice" value="<?= $price ?>">
      <input type="hidden" name="quantity" value="<?= $qty ?>">
      <input type="hidden" name="totalPrice" value="<?= $total ?>">

      <div class="mb-3">
        <label for="city" class="form-label">Select your city:</label>
        <select class="form-select" name="city" id="city" required>
          <option value="">Choose...</option>
          <option value="Beirut">Beirut</option>
          <option value="Tripoli">Tripoli</option>
          <option value="Sidon">Sidon</option>
          <option value="Tyre">Tyre</option>
          <option value="Zahle">Zahle</option>
        </select>
      </div>

      <button type="submit" class="btn btn-submit w-100">Submit Order</button>
    </form>
  </div>
</body>
</html>
