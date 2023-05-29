<!DOCTYPE html>
<html>
<head>
  <title>Food Store</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Food Store</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Item ID</th>
          <th>Item Name</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php include 'get_items.php'; ?>
      </tbody>
    </table>

    <h2>Add Item</h2>
    <form action="add_item.php" method="post">
      <div class="form-group">
        <label for="item_name">Item Name</label>
        <input type="text" name="item_name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" class="form-control" required>
      </div>
      <button type="submit" name='send' value='add' class="btn btn-primary">Add Item</button>
      <button type="submit" name='send' value='update' class="btn btn-primary">Update Item</button>
    </form>
  </div>

  <script src="js/bootstrap.min.js"></script>
</body>
</html>
