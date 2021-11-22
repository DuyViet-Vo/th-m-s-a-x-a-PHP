<?php 
require_once"connect.php";
?>
<?php 
if(isset($_POST["them"])){
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
    <h1>Thêm </h1>
  <form method="POST" action="">
    <div class="mb-3 mt-3">
      <label for="username">UserName:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter password" name="address">
    </div>
    <button type="submit" class="btn btn-primary" name="them">Submit</button>
  </form>
</div>

</body>
</html>
