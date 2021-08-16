<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My project</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <!--nav bar start-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link" href="#contact">Contact</a>
        </li>
         <li class="nav-item" >
            <a class="nav-link" href="#services">Services</a>
        </li>
         <li class="nav-item" >
            <a class="nav-link" href="#gallery">Gallery</a>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--carousal slide start-->

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bird.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/love.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/hello.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!--About section start-->

<section class="my-5" id="about">
      <div class="py-5">
          <h2 class="text-center">About Us</h2>
      </div>
      <div class="container">
      <div class="row">
          <div class="col-lg-60 col-md-6 col-12 
       hello ">
            <img src="images/chsmagirl.jpg" alt=".." height="100%" width="100%">              
          </div>
           <div class="col-lg-60 col-md-6 col-12">
            <h2 class="display-4">I am a webdesigner</h2> 
            <p class="py-5">Navbars are responsive by default, but you can easily modify them to change that. Responsive behavior depends on our Collapse JavaScript plugin.Navbars are responsive by default, but you can easily modify them to change that. Responsive behavior depends on our Collapse JavaScript plugin.</p> 
            <a href="about.php" class="btn btn-success">Check more</a>            
          </div>
      </div>
  </div>
  </section>

  <!--services start-->

  <section class="my-5" id="services">
      <div class="py-5">
          <h2 class="text-center">Our Services</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class=" card col-lg-3 col-md-3 col-6" style="width:400px">
              <img class="card-img-top" src="images/n.jpg" alt="Card image">
               <div class="card-body">
                 <h4 class="card-title">Nature</h4>
                  <p class="card-text">Some example text.</p>
                 <a href="#" class="btn btn-primary">See more</a>
              </div>
          </div>
         <div class="card col-lg-3 col-md-3 col-6" style="width:400px">
            <img class="card-img-top" src="images/n.jpg" alt="Card image">
              <div class="card-body">
               <h4 class="card-title">Nature</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary">See more</a>
              </div>
         </div>
         <div class="card col-lg-3 col-md-3 col-6" style="width:400px">
            <img class="card-img-top" src="images/n.jpg" alt="Card image">
              <div class="card-body">
               <h4 class="card-title">Nature</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary">See more</a>
              </div>
         </div>
         <div class="card col-lg-3 col-md-3 col-6" style="width:400px">
            <img class="card-img-top" src="images/n.jpg" alt="Card image">
              <div class="card-body">
               <h4 class="card-title">Nature</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary">See more</a>
              </div>
         </div>
        </div>
      </div>
</section>

<!--Gallery section start-->
<section class="my-5" id="gallery">
      <div class="py-5">
          <h2 class="text-center">Gallery</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
        
          <?php
include('connection.php');
$count=1;
$sql="SELECT * FROM gallery";

// execution of query
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){?>
          <div class="col-lg-4 col-md-4 col-6">
             <?php  echo'<img src="images/'.$row["images"].'" height="300px" width="100%" alt="try again" class="img-fluid py-3">'?>
          </div>
           <?php

    }
}
    ?>
        </div>
      </div>
</section> 

<!--contact section start-->

<section class="my-5" id="contact">
      <div class="py-4">
          <h2 class="text-center">Contact us</h2>
          <p class="text-center">Please fill the form for contact us!</p>
      </div>
      <div class="container bg-info">
      <div class="w-50 m-auto py-5">
          <form method="post" action="index.php">
            <label>Name:</label>
            <input type="text" name="name"class="form-control">

            <label>Address:</label>
            <input type="text" name="address"class="form-control">

            <label>Contact:</label>
            <input type="text" name="contact"class="form-control">

            <label>Comment:</label>
            <textarea class="form-control" name="comment"></textarea>

            <input type="submit" name="submit" value="submit" class="btn btn-success my-3">
          </form>
        </div>
      </div>
</section>
<!--footer start-->
<footer>
  <p class="bg-dark text-center py-4 text-white">
  Shikhabhandari@gmail.com</p>
</footer>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include('contact.php');
?>