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
    <h2>Contact Us</h2>
    <p><strong> leave us a message:</strong></p>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/222.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="connect2.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your full name..">
        <label for="name">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Nepal</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </div>
       </div>
</body>
</html>
