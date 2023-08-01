<?php
$servername="localhost";
$username="root";
$password ="root";
$db_name ="database1";
$conn =newmysqli($servsername,$username,$password,$db_name,#0);
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
echo"";
?>
























