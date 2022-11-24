<?php
session_start();

if(!isset($_SESSION['cart'])){
  $_SESSION['cart'] = array();
}

unset($_SESSION['qty_array']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>I Said Coffee</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <style>
  .product_image{
    width: 90%;
    margin-top: 1rem; 
    padding-left: 5rem;
    height: 30rem;
  }
  .product_name{
    height:80px; 
    padding-left:20px; 
    padding-right:20px;
  }
  .product_footer{
    padding-left:20px; 
    padding-right:20px;
  }
</style>
</head>
<body>
  <section class="header">
   <a href="home.php" class="logo"><img src="images/Logo.png" width="50" height="50"></a>
   <ul>
   <nav class="navbar">
      <li><a href="home.php">About</a></li>
      <li><a href="cart.php">Menu</a></li>
      <li><a href="cart.php">Testimoni</a></li>
      <li><a href="cart.php">Contact</a></li>
      <li><a href="logout.php">Logout</a></li>
   </nav>
</ul>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

  <br/>
  <div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">I Said Coffee</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">I Said Coffee</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="view_cart.php"><span class="badge"><?php echo count($_SESSION['cart']); ?></span> Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <p/>
    <?php

    if(isset($_SESSION['message'])){
      ?>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-6">
          <div class="alert alert-info text-center">
            <?php echo $_SESSION['message']; ?>
          </div>
        </div>
      </div>
      <?php
      unset($_SESSION['message']);
    }

    $conn = new mysqli('localhost', 'root', '', 'coffee');

    $sql = "SELECT * FROM products";
    $query = $conn->query($sql);
    $inc = 4;
    while($row = $query->fetch_assoc()){
      $inc = ($inc == 4) ? 1 : $inc + 2; 
      if($inc == 1) echo "<div class='row text-center'>";  
      ?>
      <div class="col-sm-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row product_image">
              <img src="<?php echo $row['photo'] ?>" width="85%" height="85%">
            </div>
            <div class="row product_name">
              <h4><?php echo $row['name']; ?></h4>
            </div>
            <div class="row product_footer">
              <p class="pull-left"><b><?php echo $row['price']; ?></b></p>
              <span class="pull-right"><a href="add_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Cart</a></span>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    if($inc == 1) echo "<div></div><div></div><div></div></div>"; 
    if($inc == 2) echo "<div></div><div></div></div>"; 
    if($inc == 3) echo "<div></div></div>";
    
    //end product row 
    ?>

  </div>

      <div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form action="save_query.php" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-body">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <div class="form-group">
                <label>Product Name</label>
                <input class="form-control" type="text" name="name">
              </div>
              <div class="form-group">
                <label>Product Price</label>
                <input class="form-control" type="number" name="price">
              </div>
              <div class="form-group">
                <label>Product Photo</label>
                <input class="form-control" type="file" name="photo">
              </div>
            </div>
          </div>
          <div style="clear:both;"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
            <button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="cart.php"> <i class="fas fa-angle-right"></i> Menu</a>
         <a href="logout.php"> <i class="fas fa-angle-right"></i> logout</a>
      </div>


      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 (Admin 1) </a>
         <a href="#"> <i class="fas fa-phone"></i> +321-654-0987 (Admin 2) </a>
         <a href="#"> <i class="fas fa-envelope"></i> ISaidCoffee@gmail.com </a>
      </div>

      <div class="box">
         <h3>social media</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> I Said Coffee </a>
         <a href="#"> <i class="fab fa-twitter"></i> I Said Coffee </a>
         <a href="#"> <i class="fab fa-instagram"></i> I Said Coffee </a>
         <a href="#"> <i class="fab fa-linkedin"></i> I Said Coffee </a>
      </div>

   </div>

</section>

<script src="js/script.js"></script>


</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>

</html>