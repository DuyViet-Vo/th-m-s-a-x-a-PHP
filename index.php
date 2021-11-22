<?php 
require_once "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>trang thêm sửa xóa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<button type="button" class="btn btn-info" onclick="window.location.href='them.php'">Thêm</button>
<div class="container mt-3">       
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>UserName</th>
        <th>Email</th>
        <th>Address</th>
        <th>Function</th>
      </tr>
    </thead>
    <tbody>
        <?php 
         $id=1;
            $sql ="select * from thongtincanhan";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc())  {
        ?>
      <tr>
         
        <td><?php echo $row["id"] ?></td>
        <td><?php echo $row["UserName"] ?></td>
        <td><?php echo $row["Email"] ?></td>
        <td><?php echo $row["Address"] ?></td>
        <td>
        <button type="button" class="btn btn-info" onclick="window.location.href='sua.php?id=<?php echo $row['id']; ?>'">UpDate</button>
        <button type="button" class="btn btn-info" onclick="window.location.href='xoa.php?id=<?php echo $row['id']; ?>'">Delete</button>
        </td>
      </tr>
      <?php 
       } 
    } else {
        echo "0 results";
        mysqli_close($result);
        }
       $id++ ?>
    </tbody>
  </table>

</div>

</body>
</html>
