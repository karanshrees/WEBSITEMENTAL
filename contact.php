<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'menu.php'; ?>

<div class="jumbotron">
  <h1>Contact Us</h1>
  <p>info@thementalstatemoodfoundation.org</p>
  <p>Follow Us</p>
</div>




<?php
   include 'userinfo.php';  //database connection or selection


if (isset($_POST['submit'])){
$user =mysqli_real_escape_string ($con, $_POST['user']);
$email =mysqli_real_escape_string ($con, $_POST['email']);
$mobile= mysqli_real_escape_string ($con, $_POST['mobile']);
$password=mysqli_real_escape_string($con, $_POST['password']);
$cpassword=mysqli_real_escape_string($con, $_POST['cpassword']);
$comment=mysqli_real_escape_string ($con, $_POST['comment']);

$pass= password_hash($password, PASSWORD_BCRYPT);
$cpass= password_hash($cpassword, PASSWORD_BCRYPT);


$emailquery=" select * from userinfodata where email='$email' ";
$query1= mysqli_query($con,$emailquery);

$emailcount= mysqli_num_rows($query1);
if($emailcount > 0){
  echo"Email already exist";
}
else{
  if($password === $cpassword){
    
    $query ="insert into userinfodata ( user, email, mobile,password, cpassword,comment) values('$user','$email','$mobile','$pass', '$cpass','$comment') "; 
   
    $iquery= mysqli_query($con, $query);

    if($iquery){
      ?>
      <script>
      alert("Inserted successfull");
      </script>
      <?php
  }
  else{
      ?>
      <script>
      alert("Not inserted successfull");
      </script>
      <?php
  }
  }
  else{

    ?>
    <script>
    alert("Password are not matching");
    </script>
    <?php
    
  }
}



}
?>



<section class="my-5">
    <div class="py-8"> <!--paddingfrom top and bottom-->
    <h2 class="text-center"> CREATE<br>AN ACCOUNT </h2>
    <div class="w-50 m-auto">
      <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" autocomplete="off" required>
        </div>

          <div class="form-group">
            <label>Email Id</label>
            <input type="text" name="email" class="form-control" autocomplete="off" required>
        </div>

          <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" class="form-control" autocomplete="off"  >
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control" autocomplete="off" >
          </div>

          <div class="form-group">
            <label>Confirm Password</label>
            <input type="text" name="cpassword" class="form-control" autocomplete="off">
          </div>

          <div class="form-group">
            <label>Comment</label>
            <textarea class="form-control" name="comment"> </textarea>
          </div>

          <button type="submit" name="submit" class="btn btn-success">Submit</button>

          <div class="form-group">
            <p class="text-center"> Have an account? <a href="login.php">Log In </p>
          </div>

     </form>
    <div>
    </section>

    <footer>
        <p class="p-3 bg-dark text-white  text-center">@2023 All rights reserved.The Mental State Mood Foundation</p>
   </footer>

</body>
</html>