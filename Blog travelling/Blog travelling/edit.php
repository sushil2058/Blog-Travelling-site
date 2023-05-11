<?php

error_reporting(0);
echo $_GET['tn'];
$_GET['de'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>MY BLOG</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link href='style.css' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>





</head>
<body>




       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <a href="#" class="navbar-brand">
        <img src="hiking.jpg" width="95" height="65">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h1>My Life's A Travel Movie</h1></a>
          <div class="collapse navbar-collapse" id="navbarExample">

         <ul class="navbar-nav ml-auto ">
           <li class="nav-item"><a href="home.php " class="nav-link ">Home</a></li>
           <li class="nav-item"><a href="topblogs.php" class="nav-link ">Top Blogs</a></li>

           <li class="nav-item"><a href="photos.php" class="nav-link ">Photos</a></li>
           <li class="nav-item"><a href="about.php" class="nav-link ">About Us</a></li>
           <li class="nav-item"><a href="contact.php" class="nav-link ">Contact Us</a></li>

           <form class="form-inline">

<input class="form" type="search" placeholder="search">
<button class="btn btn-outline-warning " type="submit">Search</button>
</form>

         </ul>
       </nav>
       <div class="container">
  <div style="text-align:center">
    <h2>Edit Post</h2>
  
  </div>
  <div class="row">
    <div class="column">
      <img src="images/222.jpg" style="width:100%">
    </div>
    <div class="column">
      <form  method="post">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" placeholder="Your title...">
        <label for="description">Description</label>
        <textarea id="description" name="description" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
      
    
    


<br>
<br>

    <P> </P>

<style>
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: black;
      color: white;
      text-align: center;
    }
    </style>

    <div class="footer">
      <p>Copyright &copy; My Life's A Travel Movie 2017</p>
    </div>


  

  </div>
       </div>
</body>
</html>
