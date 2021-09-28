<?php include"conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<div class="m-menu">
        
  <ul id=menu>
  <div class="s-li">
      <li><a class="current" href="index.php" class="">Home</a></li>
      <li><a href="additems.php" class="">additems</a></li>
      <li><a href="orders.php" class="">Orders</a></li>
    
  </div>

</ul>
</div>
<br>
<button id="menubutton" class="toggler" onclick = "toggler()">=<br>=</button>

<div id ="dropdownDiv">
  
  <div class="m-menu">
  
      <ul id=maindropmenu>
      <div class="maindrop-li">
          <li><a class="current" href="index.php" class="">Home</a></li>
          <hr>
          <li><a href="additems.php" class="">additems</a></li>
          <hr>
          <li><a href="orders.php" class="">Orders</a></li>
          <hr>
          

      </div>
  
  </ul>
  </div>
  
</div>
<br>

<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/continues.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/info.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/onG.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

<div class="container">
    <?php
    $stmt = $conn->query('SELECT * FROM stock');
    $stmt->execute();
    while($row = $stmt->fetch()){

    ?>
    <form action = action.php method="POST">
    
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/<?php echo $row['pic']; ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['item']; ?></h5>
          <p class="card-text"><?php echo $row['description']; ?></p>
          
          <p class="card-text"><?php echo $row['price']; ?> sh</p>

          <input type="number" name="quantity" placeholder = "quantity"required>
          <input type="hidden" name="item" value="<?php echo $row['item']; ?>"> 
          <input type="hidden" name="item_id" value="<?php echo $row['id']; ?>"> 
          <input type="hidden" name="price" value="<?php echo $row['price']; ?>"> 

          <button type="submit" name="submit" value="buy" class="btn btn-primary">Add to my cart</button>
        </div>
        </div><br></form><br>
<?php } ?>

</div>
</body>
<script src="index.js"></script>
</html>
