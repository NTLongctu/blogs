<?php
   require_once ("autoload/autoload.php");
   //$user = $db->fetchID("users",$_SESSION['name_id']);
   //$sql ="SELECT *,category.name AS catename FROM blog,category WHERE category.id = blog.tag_id AND user_id =".$_SESSION['name_id']." ORDER BY ID DESC";
   $sql = "SELECT blog.id AS blogid, 
            blog.title AS blogtitle, 
            blog.subdescription AS blogsub, 
            blog.date_create AS blogdate_create, 
            blog.image AS blogimg, 
            category.name AS catename, 
            COUNT(comments.id) AS CommentCount 
         FROM blog LEFT JOIN comments ON blog.id = comments.blog_id 
         LEFT JOIN category ON category.id = blog.tag_id 
         WHERE blog.user_id = ".$_SESSION['name_id']."
         GROUP BY blogid, blogtitle, blogsub, blogdate_create, blogimg, catename ORDER BY blog.id DESC";
   $myblog =$db->fetchsql($sql);
?>
<?php require_once("layouts/header.php"); ?>
                     <div class="col-xl-8 py-5 px-md-5">
                        <div class="row pt-md-4">
                           <?php $stt = 1; foreach ($myblog as $item) : ?>
                              <div class="col-md-12">
                                 <div class="blog-entry ftco-animate d-md-flex">
                                    <a href="viewdetail.php?id=<?php echo$item['blogid'];?>" class="img img-2" style="background-image: url(img/<?php echo $item['blogimg'];?>);"></a>
                                    <div class="text text-2 pl-md-4">
                                       <h3 class="mb-2"><a href="viewdetail.php?id=<?php echo$item['blogid'];?>"><?php echo $item['blogtitle']; ?></a></h3>
                                       <div class="meta-wrap">
                                          <p class="meta">
                                             <span><i class="icon-calendar mr-2"></i><?php echo convertDate($item['blogdate_create']);?></span>
                                             <span><a href="viewblogbycate.php?id=<?php echo $item['catename'] ?>"><i class="icon-folder-o mr-2"></i></a>
                                             <?php echo $item['catename']; ?></span>
                                             <span><i class="icon-comment2 mr-2"></i><?php echo $item['CommentCount'];?> Comment</span>
                                          </p>
                                       </div>
                                       <p class="mb-4"><?php echo $item['blogsub']; ?></p>
                                       <p><a href="editmyblog.php?id=<?php echo$item['blogid'];?>" class="btn-custom">Edit your blog <span class="ion-ios-arrow-forward"></span></a></p>
                                    </div>
                                 </div>
                              </div>
                           <?php $stt++;  endforeach; ?>
                        </div>
                        <!-- END-->
                        <div class="row">
                           <div class="col">
                              <div class="block-27">
                                 <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
<?php require_once("layouts/footer.php"); ?>