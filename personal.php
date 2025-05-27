
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>My Personal Account</title>
<style>
  /* Reset */
  * {
    margin: 0; padding: 0; box-sizing: border-box;
  }
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #ffd54f, #ffca28);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
  }
  .container {
    background: white;
    border-radius: 12px;
    padding: 35px 40px;
    box-shadow: 0 12px 25px rgba(0,0,0,0.2);
    max-width: 450px;
    width: 100%;
  }
  h1 {
    color: #6b3e00;
    margin-bottom: 30px;
    font-weight: 700;
    text-align: center;
  }
  .info {
    background: #fff8e1;
    padding: 15px 20px;
    border-radius: 8px;
    margin-bottom: 25px;
    font-weight: 600;
    color: #6b3e00;
    box-shadow: inset 0 0 8px #ffecb3;
  }
  label {
    font-weight: 600;
    color: #5a3a00;
    display: block;
    margin-bottom: 8px;
    margin-top: 18px;
  }
  input[type="text"], input[type="email"], input[type="date"] {
    width: 100%;
    padding: 11px 14px;
    font-size: 1rem;
    border: 1.8px solid #bfa147;
    border-radius: 6px;
    transition: border-color 0.3s ease;
  }
  input[type="text"]:focus, input[type="email"]:focus, input[type="date"]:focus {
    outline: none;
    border-color: #ffca28;
    box-shadow: 0 0 6px #ffca28;
  }
  button {
    margin-top: 30px;
    width: 100%;
    padding: 14px 0;
    background-color: #ffca28;
    border: none;
    border-radius: 8px;
    font-size: 1.15rem;
    font-weight: 700;
    color: #4b3600;
    cursor: pointer;
    box-shadow: 0 6px 12px rgba(255, 202, 40, 0.6);
    transition: background-color 0.3s ease;
  }
  button:hover {
    background-color: #ffc107;
  }
  @media (max-width: 500px) {
    .container {
      padding: 25px 20px;
    }
  }
</style>
</head>
<body>
<!-- Success Message -->
<div id="successMessage" style="display:none; position: fixed; top: 20px; left: 20px; background-color: #d4edda; color: #155724; padding: 12px 20px; border-radius: 5px; z-index: 999; box-shadow: 0 0 10px rgba(0,0,0,0.3); font-weight: bold;">
  ✅ Your profile has been Update!
</div>
<div class="container">
  <h1>Account</h1>

  <div class="info">
<label for="Email">Email:</label>
    <input type="Email" id="Email" name="Email" placeholder="Enter your Email" required>

  <form action="personal.php" method="POST">
    <label for="city">City:</label>
    <input type="text" id="city" name="city" placeholder="Enter your city" required>

    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday" required>

    <button type="submit">Update Info</button>
  </form>
</div>
<script>
  const form = document.querySelector("form");
  const successMessage = document.getElementById("successMessage");

  form.addEventListener("submit", function (e) {
    e.preventDefault(); 
    successMessage.style.display = "block";
    setTimeout(() => {
      successMessage.style.display = "none";
    }, 4000);
  });
</script>
</body>
</html>
