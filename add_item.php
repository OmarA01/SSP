<?php
if (isset($_POST['item_name']) && isset($_POST['price']) && isset($_POST['send'])){
    $hn = "localhost";
    $un = "id20345981_foodstore";
    $pw = "Food@123";
    $db = "id20345981_food_items";

      
    $conn = new mysqli($hn, $un, $pw, $db);
    if($_POST['send'] == 'add'){
    
      
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    
      
      $item_name = $_POST['item_name'];
      $price = $_POST['price'];
    
      
      $sql = "INSERT INTO foodItems (item_name, price) VALUES ('$item_name', $price)";
      if ($conn->query($sql)) {
        header("Location: main.php");
        exit();
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
      
      $conn->close();
  }
  else{
      $itemName = $_POST['item_name'];
      $newPrice = $_POST['price'];

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      
      $sql = "UPDATE foodItems SET price='$newPrice' WHERE item_name='$itemName'";

      if ($conn->query($sql)) {
        header("Location: main.php");
        exit();
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

        $conn->close();
  }
  
}
?>