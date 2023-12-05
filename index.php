<?php
session_start();

if(!isset( $_SESSION['username']))
{
  echo"Logged out sucessfully!";
  header('location:login.php');
}
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
<?php include 'menu.php';?>



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

<div class="text_center">
  <h1>Welcome <?php echo    $_SESSION['username'];?></h1>
      </div>   



<!-- The slideshow -->
  
      <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="pictures/womentalking.jpeg" alt="women">
      </div>
<div class="carousel-item">
      <img src="pictures/hands.jpg" alt="hands" >
    </div>
    <div class="carousel-item">
      <img src="pictures/womentalking.jpeg" alt="brighter" >
    </div>
  </div>


  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>


<section class="my-5">
    <div class="py-5"> <!--paddingfrom top and bottom-->
    <h2 class="text-center">  About Us </h2>
    <div>

<div class="container-fluid"> <!--to remove horizontal scroll bar-->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12"> <!--screen size-->
            <img src="pictures/karans.jpeg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12"> <!--screen size-->
        <h1 class="display-4">"NO LIFE SHOULD<br>
                BE LOST DUE TO <br>
               MENTAL ILLNESS"</h1>
               <p class="py-3"> Karan Shrees,Founder <p>
                <a  href="mystory.html" class="btn btn-success">Read His Story</a> 
        </div>
    </div>
</div>



<div class="container-fluid py-5"> <!--to remove horizontal scroll bar-->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12"> <!--screen size-->
        <h1 class="display-6">"Mental State Mood Foundation<br>
                EXPANDS RULAR <br>
               MENTAL HEALTH <br>
               PROGRAM TO <br>
               NEPAL"</h1>
               <p class="py-3"> Foundation, Support<p>
                <a href="about.php" class="btn btn-success">Learn more</a>
        </div>
        <div class="col-lg-6 col-md-6 col-12"> <!--screen size-->
            <img src="pictures/womentalking.jpeg" class="img-fluid aboutimg">
        </div>
    </div>
</div>
</section>


<section class="my-5">
    <div class="py-5"> <!--paddingfrom top and bottom-->
    <h2 class="text-center"> LIVE LOVE LAUGH </h2>
    <div>

<div class="container-fluid">
    <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" ><!--grid-->
                    <img class="card-img-top" src="pictures/hope.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Hope</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                 </div> 
             </div>


             <div class="col-lg-4 col-md-4 col-12">
                <div class="card" ><!--grid-->
                    <img class="card-img-top" src="pictures/vermore than er.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Journey</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                 </div> 
             </div>


             <div class="col-lg-4 col-md-4 col-12">
                <div class="card" ><!--grid-->
                    <img class="card-img-top" src="pictures/breathe.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Breathe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                 </div> 
             </div>
     </div>
</div>
</section>


<section class="my-5">
    <div class="py-8"> <!--paddingfrom top and bottom-->
    <h2 class="text-center"> INITIATIVE ORGANIZATIONS </h2>
    <div>
    <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12"><!--grid-->
                <img src="pictures/WHO.jpg" class="img-fluid pb-4"><!--padding bottom:pb-->
                </div>

                <div class="col-lg-4 col-md-4 col-12"><!--grid-->
                <img src="pictures/charinepal.jpg" class="img-fluid pb-8"><!--padding bottom:pb-->
                </div>
                <div class="col-lg-4 col-md-4 col-12"><!--grid-->
                <img src="pictures/CMC.png" class="img-fluid pb-4"><!--padding bottom:pb-->
                </div>
                <div class="col-lg-4 col-md-4 col-12"><!--grid-->
                <img src="pictures/khosih.png" class="img-fluid pb-4"><!--padding bottom:pb-->
                </div>

                <div class="col-lg-4 col-md-4 col-12"><!--grid-->
                <img src="pictures/youthmental.png" class="img-fluid pb-4"><!--padding bottom:pb-->
                </div>
                <div class="col-lg-4 col-md-4 col-12"><!--grid-->
                <img src="pictures/nepal heath.jpg" class="img-fluid pb-4"><!--padding bottom:pb-->
                </div>
            </div>
    </div>
</section>


<?php
     //database connection or selection


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
            <input type="text" name="user" class="form-control" autocomplete="off">
        </div>

          <div class="form-group">
            <label>Email Id</label>
            <input type="text" name="email" class="form-control" autocomplete="off">
        </div>

          <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" class="form-control" autocomplete="off">
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control" autocomplete="off">
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





  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>