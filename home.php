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

</head>
<body>

<section class="header">
   <a href="home.php" class="logo"><img src="./images/Logo.png" width="50" height="50"></a>
   <ul>
   <nav class="navbar">
      <li><a href="home.php">About</a></li>
      <li><a href="cart.php">Menu</a></li>
      <li><a href="testimonial.html">Testimoni</a></li>
      <li><a href="contactus.html">Contact</a></li>
      <li><a href="logout.php">Logout</a></li>
   </nav>
</ul>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<section class="home" id="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/db1.jpg) no-repeat">
            <div class="content">
               <h3>I Said Coffe</h3>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/db2.png) no-repeat">
            <div class="content">
               <h3>I Said Coffee</h3>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>



<section class="home-about" id="about">

   <div class="image">
      <img src="images/db3.jpg" alt="">
   </div>

   <div class="content">
      <h3>About</h3>
      <p style="text-align: justify;">Web ini  bertujuan untuk menampilkan dan menjual produk - produk bubuk kopi</p>
   </div>

</section>


<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="cart.php"> <i class="fas fa-angle-right"></i> cart</a>
         <a href="logout.php"> <i class="fas fa-angle-right"></i> logout</a>
      </div>


      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> 0882 6305 4965 (Admin 1) </a>
         <a href="#"> <i class="fas fa-phone"></i> 0813 7644 4421 (Admin 2) </a>
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

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

<!--Chatbot-->
    <div id="chatBtn"></div>

    <script>
      $(function() {
         $("#chatBtn").load("Chatbot/Chatbot.php")
      })
    </script>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>