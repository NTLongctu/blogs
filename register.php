<?php

    $open = "users";
    require_once ("autoload/autoload.php");
    if(isset($_SESSION['name_id']))
    {
      echo "<script>alert('Bạn đã đăng nhập rồi!');location.href='index.php' </script>";
    }
    $users = $db->fetchALL("users");
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $error = [];
        
        if(postInput('firstname')=='')
        {
            $error['firstname'] = "Hãy nhập họ đệm!";
        }
        
        if(postInput('lastname')=='')
        {
            $error['lastname'] = "Hãy nhập tên!";
        }

        if(postInput('address')=='')
        {
            $error['address'] = "Hãy nhập địa chỉ!";
        }
        if(postInput('Email')=='')
        {
            $error['Email'] = "Hãy nhập email!";
        }
        if(postInput('phone')=='')
        {
            $error['phone'] = "Hãy nhập số điện thoại!";
        }

        if(postInput('username')=='')
        {
            $error['username'] = "Hãy nhập username!";
        }
        else
        {
            $is_check = $db->fetchOne("users", "username = '".postInput('username')."'");
            if($is_check != NULL)
                 $error['username'] = "username đã được sử dụng!";
        }
        if(postInput('password')=='')
        {
            $error['password'] = "Hãy nhập password!";
        }
        if(postInput('repeatpassword')=='')
        {
            $error['repeatpassword'] = "Hãy nhập Repeat password!";
        }
        if(postInput('password')!=postInput('repeatpassword'))
        {
          $error['repeatpassword'] = "Hãy nhập lại mât khẩu không đúng!";
        }
        $pass = md5(postInput('password'));
        $username = (postInput('firstname')." ".(postInput('lastname')));
        
        if(empty($error))
        {

            $data =
            [
                "username" => postInput('username'),
                "password" => $pass,
                "name" => $username,
                "email" => postInput('Email'),
                "phone"=>postInput('phone'),
                "address" =>postInput('address')
            ];
            $id_insert = $db->insert("users",$data);
            _debug($id_insert);
            if($id_insert)
            {
                $_SESSION['success']= "Tạo tài khoản thành công thành công!";
            }
            else
            {
                $_SESSION['error'] = "Thêm mới thất bại! ";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <link href="/blogs/public/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">-->
  <link href="/blogs/public/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="/blogs/public/admin/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="/blogs/public/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">


    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Tạo tài khoản</h1>
                 <?php if(isset($_SESSION['success'])) : ?>
                      <div class="alert alert-success alert-dismissable"> 
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                  <a href="login.php" class="alert-link">Đăng nhập</a> 
                      </div>
                  <?php endif; ?>
                  <?php if(isset($_SESSION['error'])) : ?>
                      <div class="alert alert-danger alert-dismissable"> 
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <?php echo $_SESSION['error']; unset($_SESSION['error']); ?> 
                      </div>
                   <?php endif; ?>
              </div>
              <form action="" class="needs-validation" method="POST" >
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="nhập họ" name='firstname'>
                      <?php if(isset($error['firstname'])) : ?>
                        <div class="alert alert-danger alert-dismissable"> 
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $error['firstname']; unset($error['firstname']); ?> 
                        </div>
                      <?php endif; ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Nhập tên" name='lastname'>
                      <?php if(isset($error['lastname'])) : ?>
                        <div class="alert alert-danger alert-dismissable"> 
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $error['lastname']; unset($error['lastname']); ?> 
                        </div>
                      <?php endif; ?>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập địa chỉ" name="address">
                    <?php if(isset($error['address'])) : ?>
                      <div class="alert alert-danger alert-dismissable"> 
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <?php echo $error['address']; unset($error['address']); ?> 
                      </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập địa chỉ email" name='Email'>
                    <?php if(isset($error['Email'])) : ?>
                      <div class="alert alert-danger alert-dismissable"> 
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <?php echo $error['Email']; unset($error['Email']); ?> 
                      </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập số điện thoại" name='phone'>
                    <?php if(isset($error['phone'])) : ?>
                      <div class="alert alert-danger alert-dismissable"> 
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <?php echo $error['phone']; unset($error['phone']); ?> 
                      </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập username" name='username'>
                    <?php if(isset($error['username'])) : ?>
                      <div class="alert alert-danger alert-dismissable"> 
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <?php echo $error['username']; unset($error['username']); ?> 
                      </div>
                    <?php endif; ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Nhập password" name='password'>
                      <?php if(isset($error['password'])) : ?>
                        <div class="alert alert-danger alert-dismissable"> 
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $error['password']; unset($error['password']); ?> 
                        </div>
                      <?php endif; ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat password" name="repeatpassword">
                      <?php if(isset($error['repeatpassword'])) : ?>
                          <div class="alert alert-danger alert-dismissable"> 
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                              <?php echo $error['repeatpassword']; unset($error['repeatpassword']); ?> 
                          </div>
                      <?php endif; ?>
                  </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-user btn-block">Đăng ký tài khoản</button>
              </form>
              <hr>
              <a href="login.php" class="btn btn-primary btn-user btn-block">
                <i class="fab fa-primary-f fa-fw"></i>Đăng nhập
              </a>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/blogs/public/admin/vendor/jquery/jquery.min.js"></script>
  <script src="/blogs/public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/blogs/public/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/blogs/public/admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/blogs/public/admin/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/blogs/public/admin/js/demo/chart-area-demo.js"></script>
  <script src="/blogs/public/admin/js/demo/chart-pie-demo.js"></script>


</body>

</html>
