<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'travel');
if(isset($_POST['deletedata']))
{
$query = "DELETE FROM addblog where  ";
$query_run = mysqli_query($connection, $query);
if($query_run)
{
    echo '<script> alert("Data Deleted");</script>';
    header("location:createnew.php");

}
else
{
    echo '<script> alert("Data Not Deleted"); </script>';
}
}
?>  