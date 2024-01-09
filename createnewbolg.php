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
        if(postInput('subdescription')=='')
        {
            $error['subdescription'] = "Enter a valid subdescription!";
        }
        if(postInput('content')=='')
        {
            $error['content'] = "Enter a valid content!";
        }
        if(!isset($_FILES['file_input']))
        {
            $error['file_input'] = "Bạn chưa chọn hình!";
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
            if(empty($is_chk_tg))
            {
                $insert = $db->insert("category",$tg);
            }
            $is_chk_tg = $db -> fetchOne("category","name = '".postInput('tag')."'");
            $id_tag = getid($is_chk_tg);
            
            // $fileInputName = 'file_input';
            // $newFileName = moveFileToImageDirectory($fileInputName,"img");

            $data =
            [
                "title" => postInput('title'),
                "subdescription" => postInput('subdescription'),
                "content" => postInput('content'),
                "tag_id" => $id_tag,
                "user_id" => $_SESSION['name_id'],
                //"image" => $fileInputName,
                "date_create" => $currentDate
            ];

            if (isset($_FILES['file_input'])) {
                $files = $_FILES['file_input'];
                $targetDirectory = 'img/';
            
                $uploadResults = moveMultipleFilesToDirectory($files, $targetDirectory);
                $data['image'] = $uploadResults[0];
                // Print upload results
                foreach ($uploadResults as $result) {
                    echo $result . '<br>';
                    //$data['thunbar'] = $uploadResults;
                }
            }

            $id_insert = $db->insert("blog",$data);
            if($id_insert)
            {
                //move_uploaded_file($file_tmp, $part.$file_name);
                $_SESSION['success'] = "Thêm mới thành công! ";
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
                                    <div class="form-group mt-4">
                                        <label for="exampleFormControlTextarea1">sub description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="type the subdescription here"  name='subdescription'></textarea>
                                        <?php if(isset($error['subdescription'])) : ?>
                                        <div class="alert alert-danger alert-dismissable"> 
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $error['subdescription']; unset($error['subdescription']); ?> 
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Content</label>
                                        <textarea class="form-control" id="myTextarea" rows="20" placeholder="type the content here"  name='content'></textarea>
                                        <?php if(isset($error['content'])) : ?>
                                        <div class="alert alert-danger alert-dismissable"> 
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $error['content']; unset($error['content']); ?> 
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label >Select image</label>
                                        <input type="file" class="form-control" name="file_input[]" id="file_input" multiple>
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