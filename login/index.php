<?php
  session_start();
  require_once ("../libraries/Database.php");
  require_once ("../libraries/Function.php");
  $db = new Database ;

  if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $error = [];
        if(postInput('username')=='')
        {
            $error['username'] = "Hãy nhập username!";
        }
        if(postInput('password')=='')
        {
            $error['password'] = "Hãy nhập password!";
        }
        $pass = md5(postInput('password'));
        
        
        if(empty($error))
        {

            $data =
            [
                "username" => postInput('username'),
                "password" => $pass,
            ];
            $is_check = $db->fetchOne("admin","username = '".$data['username']."' AND password='". md5(postInput('password')) ."' ");
            if($is_check != NULL)
            {
              $_SESSION['admin_name']= $is_check['name'];
              $_SESSION['admin_id'] = $is_check['id']; 
              $_SESSION['admin_avatar'] = $is_check['avatar'];
              $_SESSION['admin_level'] = $is_check['level'];
              echo "<script>alert('Đăng nhập thành công!');location.href='/WebBanSach/admin/' </script>";
            }
            else
            {
              $_SESSION['error'] = "Sai tên tài khoản hoặc mật khẩu! ";img
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

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="/blogs/public/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">-->

  <!-- Custom styles for this template-->
 <link href="/WebBanSach/public/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login admin!</h1>
                  </div>
                  <form class="user" action="" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username..." name="username">
                      <?php if(isset($error['username'])) : ?>
                        <div class="alert alert-danger alert-dismissable"> 
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $error['username']; unset($error['username']); ?> 
                        </div>
                      <?php endif; ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                      <?php if(isset($error['password'])) : ?>
                        <div class="alert alert-danger alert-dismissable"> 
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $error['password']; unset($error['password']); ?> 
                        </div>
                      <?php endif; ?>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                    
                    <hr>
                    
                  </form>
                 
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                </div>
              </div>
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

</body>

</html>
