<?php
    require_once ("autoload/autoload.php");
    $id = intval(getInput('id'));
    $blog = $db->fetchID("blog",$id);
	$userblog = $db->fetchID("blog",$blog['user_id']);
    $getnamecate = $db->fetchID("category",$blog['tag_id']);

	if($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$data =
        [
            "name" => postInput('name')
        ];
		$error = [];
        if(postInput('name')=='')
        {
            $_SESSION['error'] = "mời bạn nhập đầy đủ tên danh mục!";
        }
		if(empty($error))
        {
			$data =
            [
                "comment" => postInput('comment'),
                "user_id" => $_SESSION['name_id'],
				"blog_id" => $id,
                "date_comment" => $currentDate
            ];
			$id_insert = $db->insert("comments", $data);
			if($id_insert > 0)
                {
                    //$_SESSION['success'] = "Thêm mới thành công ";
                    echo "<script>alert('your comment is posted!');</script>";
                }
                else
                {
                    //thất bại
                    echo "<script>alert('comment fail!');</script>";
                }
		}
	}
	$sql = "SELECT comments.comment AS cm, date_comment, users.name AS username, users.avatar as img 
	FROM comments
	LEFT JOIN users ON users.id = comments.user_id
	WHERE comments.blog_id = $id";
	$comments =$db->fetchsql($sql);	$numberOfComment = count($comments);

?>
<?php require_once("layouts/header.php"); ?>
				<div class="col-lg-8 px-md-5 py-5">
					<div class="row pt-md-4">
						<h1 class="mb-3"><?php echo $blog['title']; ?></h1>
						<div class="container">
						<?php echo $blog['content']; ?>
						</div>
						<div class="tag-widget post-tag-container mb-5 mt-5">
							<div class="tagcloud">
								<a href="#" class="tag-cloud-link"><?php echo$getnamecate['name']; ?></a>
								<a href="#" class="tag-cloud-link">Life</a>
								<a href="#" class="tag-cloud-link">Sport</a>
								<a href="#" class="tag-cloud-link">Tech</a>
							</div>
						</div>
						<div class="about-author d-flex p-4 bg-light">
							<div class="bio mr-5">
								<img src="img/<?php echo $userblog['avatar']?>" alt="Image placeholder" >
							</div>
							<div class="desc">
								<h3><?php echo$userblog['name']?></h3>
								<p><?php echo $blog['subdescription'];?></p>
							</div>
						</div>
						<div class="pt-5 mt-5">
							<h3 class="mb-5 font-weight-bold"> <?php echo $numberOfComment ?> Comments</h3>
							<ul class="comment-list">
							<?php foreach ($comments as $item) : ?>
									<li class="comment">
										<div class="vcard bio">
											<img src="img/<?php echo $item['img'];?>" alt="Image placeholder">
										</div>
										<div class="comment-body">
											<h3><?php echo $item['username'];?></h3>
											<div class="meta"><?php echo $item['date_comment'];?></div>
											<p><?php echo $item['cm'];?></p>
											<p><a href="#" class="reply">Reply</a></p>
										</div>
									</li>
								<?php endforeach; ?>	
							</ul>
							<!-- END comment-list -->
							<div class="comment-form-wrap pt-5 boder border border-primary">
								<h3 class="mb-5">Leave a comment</h3>
								<form action="#" class="p-3 p-md-5 bg-light" method="POST">
									<div class="form-group">
										<label for="message">Message</label>
										<textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
									</div>
									<?php if(isset($_SESSION['error'])) : ?>
										<div class="alert alert-danger alert-dismissable"> 
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											<?php echo $_SESSION['error']; unset($_SESSION['error']); ?> 
									</div>
									<?php endif; ?>
									<div class="form-group">
										<input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
									</div>
								</form>
							</div>
						</div>
					</div>
				<!-- END-->
				</div>
<?php require_once("layouts/footer.php"); ?>