<?php
    $open = "blog";
    require_once ("autoload/autoload.php");
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $error = [];
        if(postInput('title')=='')
        {
            $error['title'] = "Enter a valid title!";
        }
        if(postInput('content')=='')
        {
            $error['content'] = "Enter a valid content!";
        }
        if(!isset($_FILES['image']))
        {
            $error['image'] = "Bạn chưa chọn hình!";
        }
        if(postInput('tag')=='')
        {
            $error['tag'] = "Enter a valid tag!";
        }
        var_dump($error);
        $tg = ["name" => postInput('tag')];
        if(empty($error))
        {
            $is_chk_tg = $db -> fetchOne("category","name = '".postInput('tag')."'");
            var_dump($tg);
            if(empty($is_chk_tg))
            {
                $insert = $db->insert("category",$tg);
            }
            $is_chk_tg = $db -> fetchOne("category","name = '".postInput('tag')."'");
            $id_tag = getid($is_chk_tg);
            $data =
            [
                "title" => postInput('title'),
                "content" => postInput('content'),
                "tag_id" => $id_tag,
                "user_id" => $_SESSION['name_id'],
                "date_create" => date('Y/m/d')
            ];

            if(isset($_FILES['image']))
            {
                $file_name = $_FILES['image']['name'];
                $file_tmp = $_FILES['image']['tmp_name'];
                $file_type = $_FILES['image']['type'];
                $file_erro = $_FILES['image']['error'];
                if($file_erro == 0 )
                {
                    $part = ROOT;
                    $data['image'] = $file_name;
                }
                move_uploaded_file($file_tmp, $part.$file_name);
            }
            
            // $id_insert = $db->insert("blog",$data);
            // var_dump($id_insert);
            // if($id_insert)
            // {
            //     move_uploaded_file($file_tmp, $part.$file_name);
            //     $_SESSION['success'] = "Thêm mới thành công! ";
            //     echo "<script>alert('Thêm mới thành công!');location.href='myblogs.php' </script>";
            // } 
            // else
            // {
            //     $_SESSION['error'] = "Thêm mới thất bại! ";
            //     echo "<script>alert('Gửi phản hồi thành công!');location.href='index.php' </script>";
            // } 
        }   
    }

?>
<?php require_once("layouts/header.php"); ?>
                     <div class="col-xl-8 py-5 px-md-5">
                        <div class="row pt-md-4">
                        <div class="col-md-12">
                            <form action="" class="needs-validation" method="POST" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <?php if(isset($_SESSION['success'])) : ?>
                                        <div class="alert alert-danger alert-dismissable"> 
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $_SESSION['success']; unset($_SESSION['success']); ?> 
                                        </div>
                                    <?php endif; ?>
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-lg">Title</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="type the title here"  name='title'>
                                        <?php if(isset($error['title'])) : ?>
                                        <div class="alert alert-danger alert-dismissable"> 
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $error['title']; unset($error['title']); ?> 
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Content</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="20" placeholder="type the content here"  name='content'></textarea>
                                        <?php if(isset($error['content'])) : ?>
                                        <div class="alert alert-danger alert-dismissable"> 
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $error['content']; unset($error['content']); ?> 
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label >Select image</label>
                                        <input type="file" class="form-control" name="image">

                                        <?php if(isset($error['image'])) : ?>
                                        <div class="alert alert-danger alert-dismissable"> 
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $error['image']; unset($error['image']); ?> 
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <label >tags</label>
                                    <div class="form-group">    
                                        <input class="form-control" type="text" placeholder="Input tag" name='tag'>
                                        <?php if(isset($error['tag'])) : ?>
                                        <div class="alert alert-danger alert-dismissable"> 
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $error['tag']; unset($error['tag']); ?> 
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group"> 
                                        <button type="submit" class="btn btn-primary" >Create post</button>
                                    </div>
                                </div>
                            </form>
                        </div>    
                        </div>
                     </div>
<?php require_once("layouts/footer.php"); ?>