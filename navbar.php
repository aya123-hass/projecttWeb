<!-- navbar.php -->
 <li class="nav-item">
  <a class="nav-link" href="#" onclick="showProducts()">Products</a>
</li>
<?php
$servername = "localhost";
$username = "root"; // baddil ha l username iza andak wa7ed tani
$password = "";     // baddil ha l password iza fe
$dbname = "your_database_name"; // 7ot isem l database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query
$sql = "SELECT * FROM your_table_name"; // baddil isem l table
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data from Database</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      padding: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #0077b5;
      color: white;
    }
  </style>
</head>
<body>
  <h1>Data Table</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <!-- zid ay column tani hseb l table dyalk -->
    </tr>
    <?php
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        // zid ay column tani hseb l structure
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='3'>No data found</td></tr>";
    }
    $conn->close();
    ?>
  </table>
</body>
</html>
