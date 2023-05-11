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
    <strong><h2>Add New Blog</h2></strong>
  
  </div>

     
       
    <li class="nav-item"><a href="add blog.php" class="nav-link" "Add New Blog"> <h1 class="text-center">Add New Blog</h1></a></li>
      </form>
      <div class="card">
          <div class="class-body">
           
                     
                 
                    
              <?php
              $connection= mysqli_connect("localhost","root","");
              $db = mysqli_select_db($connection,'travel');
              $query = "SELECT * FROM addblog";
              $query_run = mysqli_query($connection, $query);
              ?>
          <table class="table table-dark">
  <thead>
    <tr>
    
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
     
    </tr>
  </thead>
  <?php
              if($query_run)
              {
                  foreach($query_run as $row)
                  {
                      ?>
  <tbody>
    <tr>
      <td> <?php echo $row['title'];?></td>
      <td> <?php echo $row['description'];?></td>
    
      <td>
     
      <button class="btn btn-info btn-block editbtn " type="submit">Edit</button>
      </td>
      <td>
      <form action="delete.php" method="POST">
      <button class="btn btn-danger btn-block deletebtn " type="submit">Delete</button>
      </td>
    </tr>; 
    
    </tr>
  </tbody>
  <?php
                  }
              }
              else{
                  echo "No record found";
              }
              ?>
</table> 
          </div>
      </div>
    
    

<style>
    #row_style {
        margin-top: 30px;
    }

    #submit {
        display: block;
        margin: auto;
    }
</style>

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script>
    $(function () {
        $("#editor").shieldEditor({
            height: 260
        });
    })
</script>

<br>
<br>
<!--###########################################################################-->
   <div class="modal fade" id="deletemodal " tabindex="-1" role="dialog" aria-labelledby="examplemodallabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class= "modal-content">
               <div class= "modal-header"> 
<h5 class="modal-title" id="examplemodallabel"> Delete data</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="close"> 
    <span aria-hidden="true">&times;</span>
</button>
               </div>
               <form action="delete.php" method="POST">
                   <div class="modal-body">
                       <h4> Doy You Want To Delete This Data ??</h4>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                       <button type="submit" name="deletedata" class="btn btn-primary"> yes !! Delete it.</button>
                   </div>
               </form>
           </div>
       </div>
       <!--###########################################################################################-->
                

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    $(document).ready(function()
    {
        $('.deletebtn').on('click',function(){
            $('#deletemodal').modal('show');

            $tr= $(this).closet('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();

            }).get();
            console.log(data);
          
        });
    
    });
        
           
        
    </script>
    
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

 
</body>
</html>
