<?php
include("connection.php");
if(issset($_post ['submit'])){
$username =$_post['user'];
$password=$_post['pass'];
$sql ="select * from login where username='$username' and password ='$password'";
$result = mysqli_query($conn.$sql);
$row =mysqli_fetch_array($result,MYSQLI_ASSOC);
$count =mysqli_num_rows($result);
if($count==1){
    header("Location:welcome.php");

}
else{
    echo '<script>
    window.location.href = "text.php";
    alert("login failes .Invalid username or password")
    </script>';
    
}
}
?>