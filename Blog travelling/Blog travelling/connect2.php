<?php
$name = $_POST['name'];
$email = $_POST['email'];
$country = $_POST['country'];
$subject = $_POST['subject'];

$conn = new mysqli('localhost','root','','travel');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into contact(name,email,country,subject)
    values(?, ?, ?, ?)");
    $stmt->bind_param("ssss" ,$name, $email, $country, $subject);
    $stmt->execute();
    echo "registration successfully...";
    echo"$query";

mysqli_query($con, $query);
header('location:blog.php');


} 

?>