<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  <title>Honey Store</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Georgia', serif;
      color: white;
      background-color:rgb(16, 14, 8);
    }

    /* Navbar */
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 10;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 25px;
      margin-left: auto;
    }

    nav a {
      text-decoration: none;
      color: #fff;
      font-weight: bold;
      font-size: 16px;
    }

    /* Slider */
    .slider-container {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
    }

    .slide {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .slide.active {
      opacity: 1;
    }

    .slider-text {
      position: absolute;
      top: 55%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 30px;
      border-radius: 15px;
      z-index: 2;
    }

    .slider-text h1 {
      font-size: 3rem;
      margin-bottom: 15px;
      color: #ffeb3b;
    }

    .slider-text p {
      font-size: 1.2rem;
      margin-bottom: 20px;
    }

    .slider-text button {
      padding: 12px 28px;
      background: #ffeb3b;
      border: none;
      color: #333;
      font-size: 1rem;
      cursor: pointer;
      border-radius: 8px;
      font-weight: bold;
    }

    /* Modal (Register Form) */
    .modal {
      display: none;
      position: fixed;
      z-index: 100;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.7);
    }

    .modal-content {
      background-color: #fff3cd;
      margin: 10% auto;
      padding: 30px;
      border: 1px solid #888;
      width: 80%;
      max-width: 500px;
      border-radius: 10px;
      color: #333;
    }

    .modal-content h2 {
      text-align: center;
      margin-bottom: 40px;
      color: #6b3e00;
    }

    .modal-content input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    .modal-content button {
      width: 100%;
      padding: 12px;
      background-color: #ffca28;
      border: none;
      color: #000;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
    }

    .close {
      color: #000;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover {
      color: red;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav>
    <div><strong style="color:rgb(224, 226, 76);">Natural Honey Company</strong></div>
    <ul class="nav-links">
     <li><a href="about.php">About</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="home.php">Home</a></li>
     <li><a href="personal.php">Personal</a></li>
 <li><a href="contact.php">Contact</a></li>

    </ul>
  </nav>

  <!-- Modal Register Form -->
  <div id="registerModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <h2>Register Now</h2>
      <form action="personal.php" method="POST">
  <input type="text" name="name" placeholder="Your Name" required>
  <input type="email" name="email" placeholder="Your Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <input type="password" name="confirm_password" placeholder="Confirm Password" required>
  <button type="submit">Submit</button>
</form>

    </div>
  </div>

<!-- Slider -->
<div class="slider-container">
  <img src="image5.jpg" class="slide active" alt="Slide 1">
  <img src="image25 - Copy.jpg" class="slide" alt="Slide 2">
  <img src="image14.jpg" class="slide" alt="Slide 3">
  <img src="image29.jpg" class="slide" alt="Slide 4">

  <div class="slider-text">
    <p>Here is your destination to get the best HONEY products of all kinds.</p>
    <h1>Welcome to Natural Honey Company</h1>
    <button onclick="openModal()">Register Now</button>
  </div>
</div>

  <!-- JavaScript -->
  <script>
    // Slider
    let slides = document.querySelectorAll('.slide');
    let index = 0;
    setInterval(() => {
      slides[index].classList.remove('active');
      index = (index + 1) % slides.length;
      slides[index].classList.add('active');
    }, 4000);

    // Modal
    function openModal() {
      document.getElementById('registerModal').style.display = 'block';
    }
    function closeModal() {
      document.getElementById('registerModal').style.display = 'none';
    }
    window.onclick = function(event) {
      const modal = document.getElementById('registerModal');
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    // Handle form submission
document.querySelector("#registerModal form").addEventListener("submit", function(e) {
  e.preventDefault(); // Prevent actual submission

  closeModal(); // Close modal

  const message = document.getElementById("successMessage");
  message.style.display = "block";

  // Hide message after 4 seconds
  setTimeout(() => {
    message.style.display = "none";
  }, 4000);
});

  </script>
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="main.js"></script>
</body>
</html>   