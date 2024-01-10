<?php
    session_start();
    require_once ("../libraries/Database.php");
    require_once ("../libraries/Function.php");
    $db = new Database ;
    if(!isset($_SESSION['admin_id']))
    {
      echo "<script>alert('Bạn chưa đăng nhập!');location.href='/blogs/login/index.php' </script>";
      //header("location: /WebBanSach/login/");
    }
    $category = $db->fetchAll("category");
    var_dump($category);
?>

<?php
    require_once("layouts/header.php");
?>
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
                </div>
<?php
    require_once("layouts/footer.php");
?>