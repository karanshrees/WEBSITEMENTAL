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
<?php include 'menu.php'; ?>

<div class="jumbotron">
  <h1>MentalStatemood Foundation</h1>
  <p>LIVE LOVE LAUGH</p>
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
                <a href="mystory.html" class="btn btn-success">Read His Story</a> 
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
               <p class="py-3"> Foundation, Support <p>
                <a href="about.php" class="btn btn-success">Learn more</a>
        </div>
        <div class="col-lg-6 col-md-6 col-12"> <!--screen size-->
            <img src="pictures/womentalking.jpeg" class="img-fluid aboutimg">
        </div>
    </div>
</div>
</section>


<footer>
        <p class="p-3 bg-dark text-white  text-center">@2023 All rights reserved.The Mental State Mood Foundation</p>
   </footer>
</body>
</html>