<?php

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "survey";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert data into database
$name = $_POST['name'];
$email = $_POST['email'];
$user_password = $_POST['password'];
$sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$user_password')";
if ($conn->query($sql) === TRUE) {
  echo "Information submitted successfully";
  // Retrieve data from database
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

// Display data in table
if ($result->num_rows > 0) {
  echo "<table><tr><th>Name</th><th>Email</th><th>Message</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td></tr>";
  }
  echo "</table>";
  
} else {
  echo "No information submitted yet";
}
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



