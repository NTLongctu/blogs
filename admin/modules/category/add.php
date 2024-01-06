<?php
    $open = "category";
    require_once ("../../autoload/autoload.php");
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $data =
        [
            "name" => postInput('name')
        ];
        $error = [];
        if(postInput('name')=='')
        {
            $error['name'] = "mời bạn nhập đầy đủ tên danh mục!";
        }
        //error trống có nghia là k có lỗi
        if(empty($error))
        {
            $isset = $db -> fetchOne("category","name = '".$data['name']."'");
            
            if($isset>0)
            {
                $_SESSION['error'] = "Thêm thất bại tên danh mục đã tồn tại!";
            }
            else
            {
                $id_insert = $db->insert("category", $data);
                
               
                if($id_insert > 0)
                {
                    $_SESSION['success'] = "Thêm mới thành công ";
                    redirectAdmin("category");
                }
                else
                {
                    //thất bại
                    $_SESSION['error'] = "Thêm thất bại ";
                }
            }
        }
    }
?>

<!--header-->
<?php require_once ("../../layouts/header.php"); ?>
<div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
        <div class="col-lg-8">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Thêm danh mục</h1>
                </div>
                <div class="row">
                    <?php if(isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger alert-dismissable"> 
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?> 
                        </div>
                     <?php endif; ?>

                </div>
                <form class="user" action="" method="POST" >
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Nhập tên danh mục......" name="name">
                        <?php if(isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger alert-dismissable"> 
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?> 
                        </div>

                        <?php endif; ?>
                        <?php if(isset($error['name'])) : ?>
                        <div class="alert alert-danger alert-dismissable"> 
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $error['name']; unset($error['name']); ?> 
                        </div>
                        <?php endif; ?>
                        
                    </div>
                    
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-user"> Thêm danh mục </button> 
                      
                    
                    
                    <hr>
                    </div>
                    
                    
                </form>
                
                
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php require_once ("../../layouts/footer.php"); ?>
