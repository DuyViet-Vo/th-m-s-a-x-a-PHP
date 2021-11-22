<?php 
require_once"connect.php";
?>
<?php 
if(isset($_GET["id"])){
    $i= $_GET["id"];
}
?>
<?php 
   $sql ="select * from thongtincanhan where id=$i" ;
   $result = $con->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc())  {
?>
<?php 
if(isset($_POST["sua"])){
    // $id=$_POST["id"];
    $Usename=$_POST["username"];
    $Email =$_POST["email"];
    $Address=$_POST["address"];
    if($Usename !=""&&$Email!=""&&$Address!=""){
        $sql= "INSERT INTO thongtincanhan
        (UserName,Email,Address)
    VALUES
        ( '$Usename', '$Email', '$Address')";
        $result = $con->query($sql);
        header("location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h1>Sửa </h1>
  <form method="POST" action="">
    <div class="mb-3 mt-3">
      <label for="username">UserName:</label>
      <input type="text" class="form-control" id="username" value="<?php echo $row["UserName"] ?>" name="username">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" value="<?php echo $row["Email"] ?>" name="email">
    </div>
    <div class="mb-3">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" value="<?php echo $row["Address"] ?>" name="address">
    </div>
    <?php 
       } 
    } else {
        echo "0 results";   
        } ?>
    <button type="submit" class="btn btn-primary" name="sua">Submit</button>
  </form>
</div>

</body>
</html>
