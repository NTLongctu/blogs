<?php 
    require_once ("autoload/autoload.php");
    //$thich = $db->fetchAll("thich");
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Andrea - Free Bootstrap 4 Template by Colorlib</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="/blogs/public/css/open-iconic-bootstrap.min.css">
      <link rel="stylesheet" href="/blogs/public/css/animate.css">
      <link rel="stylesheet" href="/blogs/public/css/owl.carousel.min.css">
      <link rel="stylesheet" href="/blogs/public/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="/blogs/public/css/magnific-popup.css">
      <link rel="stylesheet" href="/blogs/public/css/aos.css">
      <link rel="stylesheet" href="/blogs/public/css/ionicons.min.css">
      <link rel="stylesheet" href="/blogs/public/css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="/blogs/public/css/jquery.timepicker.css">
      <link rel="stylesheet" href="/blogs/public/css/flaticon.css">
      <link rel="stylesheet" href="/blogs/public/css/icomoon.css">
      <link rel="stylesheet" href="/blogs/public/css/style.css">
      <!-- Place the first <script> tag in your HTML's <head> -->
      <script src="https://cdn.tiny.cloud/1/ac0fwwob5jr0eo96d57sp6p25rjejgt31fgcph8h4p4lpo7c/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

   </head>
   <body>
      <div id="colorlib-page">
         <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
         <aside id="colorlib-aside" role="complementary" class="js-fullheight">
            <nav id="colorlib-main-menu" role="navigation">
               <ul>
                  <?php if(isset($_SESSION['name_user'])) :?>
                     <li><img src="/blogs/img/<?php echo $_SESSION['avatar']; ?>" class="rounded-circle shadow-4"style="width: 100px;" alt="Avatar" />  Welcome back</li>
                     <li class="colorlib-active"><a href="index.php">Home</a></li>
                     <li class="fa fa-unlock"><a href="myblogs.php">My blogs</a></li>
                     <li class="fa fa-unlock"><a href="createnewbolg.php">Create new blog</a></li>
                     <li class="fa fa-unlock"><a href="index.php">Profile</a></li>
                     <li><a href="thoat.php">Logout</a></li>
                  <?php else : ?>
                     <li class="colorlib-active"><a href="index.php">Home</a></li>
                     <li>
                        <a href="login.php"><i class="fa fa-unlock"></i>Login</a>
                     </li>
                     <li>
                        <a href="register.php"><i class="fa fa-unlock"></i>register</a>
                     </li>
                  <?php endif; ?>
               </ul>
            </nav>
            <div class="colorlib-footer">
               <h1 id="colorlib-logo" class="mb-4"><a href="index.php" style="background-image: url(img/bg_1.jpg);">Andrea <span>Moore</span></a></h1>
               
               <p class="pfooter">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
               </p>
            </div>
         </aside>
         <!-- END COLORLIB-ASIDE -->
         <div id="colorlib-main">
            <section class="ftco-section ftco-no-pt ftco-no-pb">
               <div class="container">
                  <div class="row d-flex">