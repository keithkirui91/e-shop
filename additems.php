<?php include "conn.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>add items</title>
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
      <li><a href="index.php" class="">Home</a></li>
      <li><a  class="current"href="additems.php" class="">AddItems</a></li>
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
          <li><a  href="index.php" class="">Home</a></li>
          <hr>
          <li><a class="current" href="additems.php" class="">additems</a></li>
          <hr>
          <li><a href="orders.php" class="">Orders</a></li>
        
      </div>
  
  </ul>
  </div>
  
</div>
<br>
<body>

  <!-- Button trigger modal -->
  <br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Items
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="action.php" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label for="formControlInput">Item Name:</label>
            <input type="text" class="form-control" id="item" name="item" placeholder="item name" required>
          </div>
          <div class="form-group">
            <label for="formControlInput">Category:</label>
            <input type="text" class="form-control" id="category" name="category" placeholder="category"required>
          </div>
          <div class="form-group">
            <label for="formControlInput">Description:</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="description"required>
          </div>
          <div class="form-group">
            <label for="formControlInput">Price:</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="price" required>
            <input type="file" name="pic">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
        <input type="submit"name="submit" class="btn btn-primary" value="additem">
      </div></form>
    </div>
  </div>
</div>
<br>

</body>
<script src="index.js"></script>
</html>
