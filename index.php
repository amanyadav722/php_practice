<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>websiteBackended</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<section class="my-5">
<div class="py-5">
    <h2 class="text-center">About Us</h2>
</div>

<div class="container-fluid">
<div class="row">
      <div class="col-lg-6 col-md-6 col-12">
      <img src="images/img2.jpeg" class="img-fluid aboutimg">
      <h2>Hi, there this is your dost and the hot for today.</h2>
      </div>
</div>
</div>
</section>

<section class="my-5">
<div class="py-5">
    <h2 class="text-center">Contact Us</h2>
</div>

<div class="container-fluid">
<div class="row">
      <div class="col-lg-6 col-md-6 col-12 pb-4">
      <img src="images/img3.jpeg" class="img-fluid aboutimg">
      <h2>Hi, there this is your dost and the hot for today.</h2>
      </div>
      <div class="col-lg-6 col-md-6 col-12 pb-4">
      <img src="images/img4.jpeg" class="img-fluid aboutimg">
      <h2>Hi, there this is your dost and the hot for today.</h2>
      </div>
 
</div>
</div>
</section>



<section class="my-5">
<div class="py-5">
    <h2 class="text-center">Our Gallery</h2>
</div>


<div class="w-50 m-auto">
     <form action="userinfo.php" method="post">
        <div class="form-group">
             <label>Username</label>
             <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
             <label>Email Id</label>
             <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
             <label>Mobile</label>
             <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
             <label>Comments</label>
             <textarea class="form-control" name="comment"></textarea>
        </div>
        <input type="checkbox" id="check1" name="check1" value="data">
        <label for="check1">Tick this!</label><br>
        <button id="btnsubmit" type="Submit" class="btn btn-prmary">Submit</button>
     </form>
</div>
</section>

<footer>
    <h3 class="p-3 bg-dark"> @abcdefghijklmnopqrstuvwxyzProduction</h3>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>