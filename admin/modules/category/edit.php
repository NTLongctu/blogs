<?php
    $open = "category";
    require_once ("../../autoload/autoload.php");
    $id = intval(getInput('id'));
    $Editcategory = $db->fetchID("category",$id);
    if(empty(($Editcategory)))
    {
        $_SESSION['error'] = " Dữ liệu không tồn tại !";
        redirectAdmin("category");
    }
    if($_SERVER["REQUEST_METHOD"]=="POST")
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
        if( $Editcategory['name'] != $data['name'])
        {
            $isset = $db -> fetchOne("category","name = '".$data['name']."'");
            if(count($isset)>0)
            {
                $_SESSION['error'] = "Cập nhật thất bại tên danh mục đã tồn tại!  ";
            }
            else
            {
                $id_update = $db->update("category", $data ,array('id' => $id));
                if($id_update > 0)
                {
                    $_SESSION['success'] = "Câp nhật thành công ";
                    redirectAdmin("category");
                }
                else
                {
                    //thất bại
                    $_SESSION['error'] = "Câp nhật thất bại !";
                    redirectAdmin("category");
                }
            }
        }
        else
        {
            $id_update = $db->update("category", $data ,array('id' => $id));
            if($id_update > 0)
            {
                $_SESSION['success'] = "Câp nhật thành công ";
                redirectAdmin("category");
            }
            else
            {
                //thất bại
                $_SESSION['error'] = "Câp nhật thất bại ";
                redirectAdmin("category");
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
                    <h1 class="h4 text-gray-900 mb-4">Sửa danh mục</h1>
                    <div class="clearfix">
                        <?php if(isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger" role="alert"> 
                            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?> 
                        </div>
                     <?php endif; ?>  
                    </div>
                </div>
                <form class="user" action="" method="POST" >
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Nhập tên danh mục......" name="name" value="<?php echo $Editcategory['name'] ?>">
                    </div>
                    
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-user"> Sửa danh mục </button> 
                    <hr>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php require_once ("../../layouts/footer.php"); ?>
