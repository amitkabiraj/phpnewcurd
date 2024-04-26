<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM curd WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE curd SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if($result) {
        // echo "Updated successfully";
        header('location:display.php');
    } else {
        echo "Error: " . mysqli_error($con);
    }
}    
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>curd operation</title>
  </head>
  <body>
    <div class="container my-5">
<form method="post">
<!-- <div class="form-group">
    <label>ID</label>
    <input type="text" class="form-control" name="id" aria-describedby="emailHelp">
</div> -->
<div class="form-group" >
    <label>Ename</label>
    <input type="text" class="form-control" id="exampleInputEmail1" 
    value=<?php echo $name ?> name="name" aria-describedby="emailHelp">
</div>
<div class="form-group" >
    <label>Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"
    value=<?php echo $email ?>
    name="email" aria-describedby="emailHelp">
</div>
<div class="form-group" >
    <label>Moblie</label>
    <input type="text" class="form-control" id="exampleInputEmail1"
    value=<?php echo $mobile ?>
    name="mobile" aria-describedby="emailHelp">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1"
    value=<?php echo $password ?>
    >
</div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
  
  </body>
</html>