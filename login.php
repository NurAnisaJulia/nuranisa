<?php include ('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD dengan</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
  
</head>
<body>
<?php
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$login = mysql_query("select * from login where username='$username' and password='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";
  header("location:index.php");
}else{
  header("location:index.php"); 
}
 
?>
<form>
      <div class="container">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

