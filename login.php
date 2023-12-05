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

<?php
include 'userinfo.php';

if (isset($_POST['submit'])){
   $email= $_POST['email'];
   $password= $_POST['password'];

   $email_search="select * from userinfodata where email='$email' ";
   $query= mysqli_query($con,$email_search);

   $email_count=mysqli_num_rows($query);

   if($email_count){
    $email_pass= mysqli_fetch_assoc($query);

    $db_pass= $email_pass['password'];

    $_SESSION['username']= $email_pass['user'];

    $pass_decode = password_verify($password ,$db_pass);

    if($pass_decode)
    {
       echo"You are successfully logged in ";
       ?>
          <script>
     location.replace("index.php"); //redirect js
    </script>
    
    <?php
    }else{
      echo"Password Incorret!";
    }
  }
    else{
      echo"Invalid Email!";
    }
   
  }
?>

<div class="jumbotron">
  <h1>Contact Us</h1>
  <p>info@thementalstatemoodfoundation.org</p>
  <p>Follow Us</p>
</div>

<section class="my-5">
    <div class="py-8"> <!--paddingfrom top and bottom-->
    <h2 class="text-center"> LOG IN<br>AN ACCOUNT </h2>
    <div class="w-50 m-auto">
      <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

          <div class="form-group">
            <label>Email Id</label>
            <input type="text" name="email" class="form-control" autocomplete="off" required>
        </div>

        
          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control" autocomplete="off" >
          </div>

     

          <button type="submit" name="submit" class="btn btn-success">Log In</button>

          <div class="form-group">
            <p class="text-center"> Not  have an account? <a href="contact.php">SignUp Here </p>
          </div>

     </form>
    <div>
    </section>

    <footer>
        <p class="p-3 bg-dark text-white  text-center">@2023 All rights reserved.The Mental State Mood Foundation</p>
   </footer>

</body>
</html>