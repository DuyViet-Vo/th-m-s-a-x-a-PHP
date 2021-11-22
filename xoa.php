<?php 
    require_once "connect.php";
    if(isset($_GET["id"])){
        $i=$_GET["id"];
    }

    $sql= "delete from thongtincanhan where id =$i";
    $result = $con->query($sql);
    header("location: index.php");
?>
