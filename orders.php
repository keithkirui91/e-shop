<?php include "conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<div class="m-menu">
        
  <ul id=menu>
  <div class="s-li">
      <li><a  href="index.php" class="">Home</a></li>
      <li><a href="additems.php" class="">additems</a></li>
      <li><a class="current"href="orders.php" class="">Orders</a></li>
    
  </div>

</ul>
</div>
<br>

<button id="menubutton" class="toggler" onclick = "toggler()">=<br>=</button>
<br>
<div id ="dropdownDiv">
  
  <div class="m-menu">
  
      <ul id=maindropmenu>
      <div class="maindrop-li">
          <li><a  href="index.php" class="">Home</a></li>
          <hr>
          <li><a href="additems.php" class="">additems</a></li>
          <hr>
          <li><a class="current"href="orders.php" class="">Orders</a></li>
          <hr>
          

      </div>
  
  </ul>
  </div>
  
</div>
<body>
<h1>Orders</h1>
    <table class="table">
        <thead>
          <tr>
            <th>Productname</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
        <?php
    $stmt = $conn->query('SELECT * FROM sales');
    $stmt->execute();
    while($row = $stmt->fetch()){

    ?>
          <tr>
            <td><?php echo $row['item']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['price']; ?></td>
          </tr>      
          <?php } ?>
    
</body>
<script src ="index.js" ></script>
</html>