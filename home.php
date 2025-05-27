<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Our Team</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  <style>
    body {
      background-color: #fffdf6;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      scroll-behavior: smooth;
    }

    .slider-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 40px 20px;
    }

    .slide {
      position: relative;
      width: 300px;
      height: 280px;
      object-fit: cover;
      border-radius: 15px;
      box-shadow: 0 6px 12px rgba(0,0,0,0.1);
      transition: transform 0.4s ease;
    }

    .slide:hover {
      transform: scale(1.05);
    }

    .image-caption {
      text-align: center;
      margin-top: 10px;
      font-weight: 500;
      color: #555;
    }

    .description {
      text-align: center;
      padding: 40px 20px 20px;
      color: #333;
      animation: fadeIn 1.5s ease forwards;
      opacity: 0;
    }

    .description h2 {
      font-size: 2.5rem;
      color: #e6b800;
      margin-bottom: 10px;
    }

    .description p {
      font-size: 1.1rem;
      max-width: 800px;
      margin: auto;
    }

    .testimonials {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 30px;
    }

    .testimonial-card {
      background-color: #fff8e1;
      border-radius: 10px;
      padding: 20px;
      width: 250px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: center;
      transform: translateY(50px);
      opacity: 0;
      transition: all 0.6s ease;
    }

    .testimonial-card h5 {
      margin-bottom: 10px;
      color: #e6b800;
    }

    .testimonial-card p {
      font-size: 0.95rem;
      color: #555;
    }

    .testimonial-card:hover {
      transform: translateY(-5px) scale(1.02);
      box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    }

    @keyframes fadeIn {
      to { opacity: 1; }
    }

    .visible {
      opacity: 1 !important;
      transform: translateY(0) !important;
    }
  </style>
</head>
<body>

  <!-- Description -->
  <div class="description" id="desc">
    <h2>Meet Our Team</h2>
    <p>We are a passionate team of five individuals who came together with one vision — to create something meaningful and impactful. Each member brings unique skills and endless energy to the table.</p>
  </div>

  <!-- Image Layout -->
  <div class="slider-container">
    <div>
      <img src="image21.avif" class="slide" alt="Team Image">
      <div class="image-caption">Sara - Marketing</div>
    </div>
    <div>
      <img src="image22.png" class="slide" alt="Team Image">
      <div class="image-caption">Jad - Developer</div>
    </div>
    <div>
      <img src="image24.jpg" class="slide" alt="Team Image">
      <div class="image-caption">Lina - Designer</div>
    </div>
    <div>
      <img src="image20.webp" class="slide" alt="Team Image">
      <div class="image-caption">Omar - Operations</div>
    </div>
    <div>
      <img src="image23.jpg" class="slide" alt="Team Image">
      <div class="image-caption">Maya - Strategy</div>
    </div>
  </div>

  <!-- Testimonials -->
  <div class="testimonials" id="testimonial-section">
    <div class="testimonial-card"> <h5>Sara</h5> <p>"I handle marketing and communication. I believe in telling our story the right way."</p> </div>
    <div class="testimonial-card"> <h5>Jad</h5> <p>"As the developer, I love turning ideas into digital realities with clean, smart code."</p> </div>
    <div class="testimonial-card"> <h5>Lina</h5> <p>"I'm in charge of design. My goal is to make every detail look beautiful and functional."</p> </div>
    <div class="testimonial-card"> <h5>Omar</h5> <p>"Operations are my field. I make sure our work runs smoothly and efficiently."</p> </div>
    <div class="testimonial-card"> <h5>Maya</h5> <p>"I bring ideas and strategy to life through planning, vision, and a bit of magic."</p> </div>
  </div>

  <script>
    // Scroll reveal for testimonials
    window.addEventListener("scroll", () => {
      const cards = document.querySelectorAll('.testimonial-card');
      cards.forEach(card => {
        const rect = card.getBoundingClientRect();
        if (rect.top < window.innerHeight - 50) {
          card.classList.add("visible");
        }
      });
    });
  </script>

</body>
</html>

