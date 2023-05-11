<?php
$title= $_POST['title'];
$description= $_POST['description'];

$conn = new mysqli('localhost','root','','travel');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into addblog(title,description)
    values(?, ?)");
    $stmt->bind_param("ss" ,$title, $description);
    $stmt->execute();
   

} 