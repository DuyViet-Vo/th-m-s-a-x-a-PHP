<?php 
    $server ="localhost";
    $user ="root";
    $pass= "";
    $db="canhan";
    $con=mysqli_connect($server,$user,$pass,$db);
    if($con){
    mysqli_query($con,"set name 'utf8'");
   }
    else{
        echo"ban ket noi that bai".mysqli_connect_error();}
?>