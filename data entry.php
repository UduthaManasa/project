<?php
$mysqli=mysqli_connect('localhost','root','','db');
if($mysqli===false){
    die("ERROR:could not connect."
    .mysqli_connect_error());
}
$Name=$_REQUEST['Name'];
$Email=$_REQUEST['Email'];


$sql="INSERT INTO manasa VALUES('$Name','$Email')";
if(mysqli_query($mysqli,$sql))
{
    echo"<h3>Registration completed</h3>";
    //echo n12br("\n \n $email"
    //.$phoneno \n $address");

}
else{
    echo"ERROR:Hosh! sorry $sql."
    .mysqli_error($mysqli);

}
$mysqli->close();
?>
