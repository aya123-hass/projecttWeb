<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Honey Store</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <section class="about-section">
    <div class="about-img">
      <img src="image13.avif" alt="Beekeeping process">
    </div>
    <div class="about-text">
      <h2>About Us</h2>
      <p>
        At Honey Store, we are passionate about bringing you the finest selection of pure, organic honey sourced directly from trusted beekeepers around the globe. Our mission is to offer you not just a product, but a natural experience of wellness and taste.
      </p>
      <p>
        Whether you're looking for a sweetener for your tea, a spread for your toast, or a wholesome addition to your skincare routine, Honey Store provides a variety of natural honey options tailored to your needs. Taste nature’s golden gift — taste the difference with Honey Store.
      </p>
    </div>
  </section>

  <div class="image-section">
    <img src="image2.jpg" alt="Beekeeping process">
  </div>
<style>
  body {
  font-family: 'Georgia', serif;
  background-color: #fff8e1;
  margin: 0;
  padding: 0;
  scroll-behavior: smooth;
}

nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 40px;
  background: #5d3a00;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 10;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
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
  transition: color 0.3s ease;
}

nav a:hover {
  color: #ffcc80;
}

.about-section {
  padding: 150px 40px 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 40px;
  max-width: 1200px;
  margin: 0 auto;
}

.about-img {
  flex: 1;
  min-width: 280px;
  display: flex;
  justify-content: center;
  animation: fadeIn 1s ease-in-out;
}

.about-img img {
  width: 80%;
  border-radius: 15px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

.about-text {
  flex: 1;
  min-width: 300px;
  text-align: right;
  color: #5d3a00;
  animation: fadeInUp 1s ease-in-out;
}

.about-text h2 {
  font-size: 2.5rem;
  color: #8b5e00;
  margin-bottom: 20px;
}

.about-text p {
  font-size: 1.2rem;
  line-height: 1.8;
  margin-bottom: 15px;
  text-align: justify;
}

.image-section {
  text-align: center;
  padding: 40px 20px;
}

.image-section img {
  max-width: 90%;
  border-radius: 20px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.25);
  animation: fadeIn 1.2s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}

@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

</style>

  <script>
    function exitToLogin() {
      document.getElementById('homePage').classList.add('hidden');
      document.getElementById('loginPage').classList.remove('hidden');
    }
  </script>

</body>
</html>
