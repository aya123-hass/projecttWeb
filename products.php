<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Best Products</title>
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">  <style>
    body {
      background-color: #fff9e6;
      font-family: 'Segoe UI', sans-serif;
    }
    header h1 {
      text-align: center;
      padding: 20px 0;
      color: #e6b800;
      font-weight: bold;
      font-size: 2.5rem;
    }
    .hidden {
      display: none !important;
    }
    .product {
      background: #fff3cd;
      margin: 15px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      text-align: center;
    }
    .product img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
    }
    .order-controls {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 10px;
    }
    .quantity-input {
      width: 60px;
      margin: 10px auto 0;
    }
    .pagination .btn {
      width: 40px;
      height: 40px;
      border-radius: 10px;
      font-weight: bold;
      background-color: #e6b800;
      color: white;
      border: none;
    }
  </style>
</head>
<body>
  <div id="homePage">
    <header>
      <h1>Best Products</h1>
    </header>
    <div class="container py-4">
      <!-- Page 1 -->
      <div id="page1" class="row">
        <div class="col-md-4">
          <div class="product">
            <img src="image10.webp" alt="Pamela's">
            <h4>Pamela's</h4>
            <p class="text-success fw-bold">$70</p>
            <form action="order.php" method="POST">
              <input type="hidden" name="productName" value="Pamela's">
              <input type="hidden" name="productPrice" value="70">
              <input type="number" name="quantity" class="form-control quantity-input" placeholder="0" required>
              <div class="order-controls">
                <button type="submit" class="btn btn-success">Send Order</button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product">
            <img src="image8.jpg" alt="Shampoing">
            <h4>Shampoing</h4>
            <p class="text-success fw-bold">$40</p>
            <form action="order.php" method="POST">
              <input type="hidden" name="productName" value="Shampoing">
              <input type="hidden" name="productPrice" value="40">
              <input type="number" name="quantity" class="form-control quantity-input" placeholder="0" required>
              <div class="order-controls">
                <button type="submit" class="btn btn-success">Send Order</button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product">
            <img src="image5.jpg" alt="Honey">
            <h4>Honey</h4>
            <p class="text-success fw-bold">$30</p>
            <form action="order.php" method="POST">
              <input type="hidden" name="productName" value="Honey">
              <input type="hidden" name="productPrice" value="30">
              <input type="number" name="quantity" class="form-control quantity-input" placeholder="0" required>
              <div class="order-controls">
                <button type="submit" class="btn btn-success">Send Order</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Page 2 -->
      <div id="page2" class="row hidden">
        <div class="col-md-4">
          <div class="product">
            <img src="image9.jpg" alt="Cream Pure">
            <h4>Cream Pure</h4>
            <p class="text-success fw-bold">$89</p>
            <form action="order.php" method="POST">
              <input type="hidden" name="productName" value="Cream Pure">
              <input type="hidden" name="productPrice" value="89">
              <input type="number" name="quantity" class="form-control quantity-input" placeholder="0" required>
              <div class="order-controls">
                <button type="submit" class="btn btn-success">Send Order</button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product">
            <img src="image17.jpg" alt="Clover Honey">
            <h4>Clover Honey</h4>
            <p class="text-success fw-bold">$50</p>
            <form action="order.php" method="POST">
              <input type="hidden" name="productName" value="Clover Honey">
              <input type="hidden" name="productPrice" value="50">
              <input type="number" name="quantity" class="form-control quantity-input" placeholder="0" required>
              <div class="order-controls">
                <button type="submit" class="btn btn-success">Send Order</button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product">
            <img src="WhatsApp Image 2025-05-25 at 11.10.41 PM.jpeg" alt="Pollen Grains">
            <h4>Pollen Grains</h4>
            <p class="text-success fw-bold">$50</p>
            <form action="order.php" method="POST">
              <input type="hidden" name="productName" value="Pollen Grains">
              <input type="hidden" name="productPrice" value="50">
              <input type="number" name="quantity" class="form-control quantity-input" placeholder="0" required>
              <div class="order-controls">
                <button type="submit" class="btn btn-success">Send Order</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Page 3 -->
      <div id="page3" class="row hidden">
        <div class="col-md-4">
          <div class="product">
            <img src="image6.webp" alt="Sunflower">
            <h4>Sunflower</h4>
            <p class="text-success fw-bold">$19</p>
            <form action="order.php" method="POST">
              <input type="hidden" name="productName" value="Sunflower">
              <input type="hidden" name="productPrice" value="19">
              <input type="number" name="quantity" class="form-control quantity-input" placeholder="0" required>
              <div class="order-controls">
                <button type="submit" class="btn btn-success">Send Order</button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product">
            <img src="image3.jpg" alt="Mankine">
            <h4>Mankine</h4>
            <p class="text-success fw-bold">$35</p>
            <form action="order.php" method="POST">
              <input type="hidden" name="productName" value="Mankine">
              <input type="hidden" name="productPrice" value="35">
              <input type="number" name="quantity" class="form-control quantity-input" placeholder="0" required>
              <div class="order-controls">
                <button type="submit" class="btn btn-success">Send Order</button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product">
            <img src="image7.png" alt="Fage">
            <h4>Fage</h4>
            <p class="text-success fw-bold">$89</p>
            <form action="order.php" method="POST">
              <input type="hidden" name="productName" value="Fage">
              <input type="hidden" name="productPrice" value="89">
              <input type="number" name="quantity" class="form-control quantity-input" placeholder="0" required>
              <div class="order-controls">
                <button type="submit" class="btn btn-success">Send Order</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Pagination -->
      <div class="pagination d-flex justify-content-center mt-4">
        <button class="btn mx-2" onclick="showPage(1)">1</button>
        <button class="btn mx-2" onclick="showPage(2)">2</button>
        <button class="btn mx-2" onclick="showPage(3)">3</button>
      </div>
    </div>
  </div>

  <script>
    function showPage(page) {
      const pages = ['page1', 'page2', 'page3'];
      pages.forEach(p => document.getElementById(p).classList.add('hidden'));
      document.getElementById('page' + page).classList.remove('hidden');
    }
  </script>
</body>
</html>
