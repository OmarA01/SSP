<?php
// Database configuration
$hn = "localhost";
$un = "id20345981_foodstore";
$pw = "Food@123";
$db = "id20345981_food_items";

// Create a MySQL connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query items from the table
$sql = "SELECT * FROM foodItems";
$result = $conn->query($sql);

// Display items in table rows
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['item_name']."</td>";
    echo "<td>".$row['price']."</td>";
    echo "<td><a href='delete_item.php?id=".$row['id']."' class='btn btn-danger btn-sm'>Delete</a></td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='4'>No items found.</td></tr>";
}

// Close the MySQL connection
$conn->close();
?>
