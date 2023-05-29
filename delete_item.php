<?php
if (isset($_GET['id'])) {
  
  $hn = "localhost";
  $un = "id20345981_foodstore";
  $pw = "Food@123";
  $db = "id20345981_food_items";

  
  $conn = new mysqli($hn, $un, $pw, $db);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Get item ID from the URL parameter
  $item_id = $_GET['id'];

  // Delete item from the table
  $sql = "DELETE FROM foodItems WHERE id = $item_id";
  if ($conn->query($sql)) {
    header("Location: main.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the MySQL connection
  $conn->close();
}
?>