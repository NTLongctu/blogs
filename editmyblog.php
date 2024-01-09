<?php
    $open = "blog";
    require_once ("autoload/autoload.php");
    $id = intval(getInput('id'));
    $editblog = $db->fetchID("blog",$id);
    $getnamecate = $db->fetchID("category",$editblog['tag_id']);
    _debug($getnamecate);
    if(empty(($editblog)))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại!";
        redirectAdmin("blogs");
    }
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $error = [];
        if(postInput('title')=='')
        {
            $error['title'] = "Enter a valid title!";
        }
        if(postInput('subdescription')=='')
        {
            $error['subdescription'] = "Enter a valid subdescription!";
        }
        if(postInput('content')=='')
        {
            $error['content'] = "Enter a valid content!";
        }
        if(!isset($_FILES['fileInput']))
        {
            $error['fileInput'] = "Bạn chưa chọn hình!";
        }
        if(postInput('tag')=='')
        {
            $error['tag'] = "Enter a valid tag!";
        }
        $tg = ["name" => postInput('tag')];
        if(empty($error))
        {
            $is_chk_tg = $db -> fetchOne("category","name = '".postInput('tag')."'");
            if(empty($is_chk_tg))
            {
                $insert = $db->insert("category",$tg);
            }
            $is_chk_tg = $db -> fetchOne("category","name = '".postInput('tag')."'");
            $id_tag = getid($is_chk_tg);
            $fileInputName = 'fileInput';
            $newFileName = moveFileToImageDirectory($fileInputName,"img");
            var_dump($newFileName);
            $data =
            [
                "title" => postInput('title'),
                "subdescription" => postInput('content'),
                "content" => postInput('content'),
                "tag_id" => $id_tag,
                "user_id" => $_SESSION['name_id'],
                "image" => $newFileName,
                "date_create" => $currentDate
            ];

            $id_update = $db->update("blog",$data, array('id' => $id));
            if($id_update)
            {
                
                $_SESSION['success'] = "Câp nhật thành công ";
                echo "<script>alert('Thêm mới thành công!');location.href='myblogs.php' </script>";
            } 
            else
            {
                $_SESSION['error'] = "Thêm mới thất bại! ";
                //echo "<script>alert('Gửi phản hồi thành công!');location.href='index.php' </script>";
            } 
        }   
    }

?>
<?php require_once("layouts/header.php"); ?>
                     <div class="col-xl-8 py-5 px-md-5">
                        <div class="row pt-md-4">
                        <div class="col-md-12">
                            <form action="" class="needs-validation" method="POST" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <?php if(isset($_SESSION['error'])) : ?>
                                        <div class="alert alert-danger" role="alert"> 
                                            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?> 
                                        </div>
                                    <?php endif; ?>
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
                                        <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="type the title here"  name="title" value="<?php echo $editblog['title'] ?>" >
                                        <?php if(isset($error['title'])) : ?>
                                        <div class="alert alert-danger alert-dismissable"> 
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $error['title']; unset($error['title']); ?> 
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="exampleFormControlTextarea1">sub description</label>
                                        <input class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="type the subdescription here"  name="subdescription" value="<?php echo $editblog['subdescription'] ?>" ></input>
                                        <?php if(isset($error['subdescription'])) : ?>
                                        <div class="alert alert-danger alert-dismissable"> 
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $error['subdescription']; unset($error['subdescription']); ?> 
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Content</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="20" placeholder="type the content here"  name="content" ><?php echo $editblog['content'] ?></textarea>
                                        <?php if(isset($error['content'])) : ?>
                                        <div class="alert alert-danger alert-dismissable"> 
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $error['content']; unset($error['content']); ?> 
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label >Select image</label>
                                        <input type="file" class="form-control" name="fileInput" id="fileInput">

                                        <?php if(isset($error['image'])) : ?>
                                        <div class="alert alert-danger alert-dismissable"> 
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $error['image']; unset($error['image']); ?> 
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <label >tags</label>
                                    <div class="form-group">    
                                        <input class="form-control" type="text" placeholder="Input tag" name='tag' value="<?php echo $getnamecate['name'] ?>" >
                                        <?php if(isset($error['tag'])) : ?>
                                        <div class="alert alert-danger alert-dismissable"> 
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $error['tag']; unset($error['tag']); ?> 
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group"> 
                                        <button type="submit" class="btn btn-primary" >Edit post</button>
                                    </div>
                                </div>
                            </form>
                        </div>    
                        </div>
                     </div>
<?php require_once("layouts/footer.php"); ?>