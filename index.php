<?php
   require_once ("autoload/autoload.php");
   //$sql ="SELECT *,category.name AS catename FROM blog,category WHERE category.id = blog.tag_id AND user_id =".$_SESSION['name_id']." ORDER BY ID DESC";
   $sql = "SELECT blog.id AS blogid, 
                  blog.title AS blogtitle, 
                  blog.subdescription AS blogsub, 
                  blog.date_create AS blogdate_create, 
                  blog.image AS blogimg, 
                  users.name AS usersname,
                  category.name AS catename, 
                  COUNT(comments.id) AS CommentCount 
         FROM blog LEFT JOIN comments ON blog.id = comments.blog_id 
         LEFT JOIN users ON users.id = blog.user_id
         LEFT JOIN category ON category.id = blog.tag_id 
         GROUP BY blogid, usersname, blogtitle, blogsub, blogdate_create, blogimg, catename ORDER BY blog.id DESC";
   $myblog =$db->fetchsql($sql);
   //pagination - start
   //find RECORDS
   $total_records = count($myblog);
   //find LIMIT and CURRENT_PAGE
   $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
   $limit = 5;
   // Calculate  TOTAL_PAGE and START
   // TOTAL_PAGE
   $total_page = ceil($total_records / $limit);

   // Giới hạn current_page trong khoảng 1 đến total_page
   if ($current_page > $total_page){
      $current_page = $total_page;
   }
   else if ($current_page < 1){
      $current_page = 1;
   }
   // Tìm Start
   $start = ($current_page - 1) * $limit;
   $sql = "SELECT blog.id AS blogid, 
                  blog.title AS blogtitle, 
                  blog.subdescription AS blogsub, 
                  blog.date_create AS blogdate_create, 
                  blog.image AS blogimg, 
                  users.name AS usersname,
                  category.name AS catename, 
                  COUNT(comments.id) AS CommentCount 
         FROM blog LEFT JOIN comments ON blog.id = comments.blog_id 
         LEFT JOIN users ON users.id = blog.user_id
         LEFT JOIN category ON category.id = blog.tag_id 
         GROUP BY blogid, usersname, blogtitle, blogsub, blogdate_create, blogimg, catename ORDER BY blog.id DESC LIMIT $start, $limit";
   $myblog =$db->fetchsql($sql);
   //pagination - end





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
                                             <span><i class="icon-comment2 mr-2"></i><?php echo $item['CommentCount']; ?> Comment</span>
                                             <span><i class="icon-person mr-2"></i><?php echo $item['usersname'];?></span>
                                          </p>
                                       </div>
                                       <p class="mb-4"><?php echo $item['blogsub']; ?></p>
                                       <p><a href="viewdetail.php?id=<?php echo$item['blogid'];?>" class="btn-custom">View detail blog <span class="ion-ios-arrow-forward"></span></a></p>
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
                                    
                                    <?php if ($current_page > 1 && $total_page > 1) {
                                             echo '<li><a href="index.php?page='.($current_page-1).'">&lt;</a></li>';
                                          }
                                          for ($i = 1; $i <= $total_page; $i++){
                                             // Nếu là trang hiện tại thì hiển thị thẻ span
                                             // ngược lại hiển thị thẻ a
                                             if ($i == $current_page){
                                                 echo '<li class="active"><span>'.$i.'</span></li>';
                                             }
                                             else{
                                                echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';
                                             }
                                         }
                                         // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                                         if ($current_page < $total_page && $total_page > 1){
                                             echo '<li><a href="index.php?page='.($current_page+1).'">&gt;</a></li>';
                                             
                                         }
                                    ?>
                                  
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
<?php require_once("layouts/footer.php"); ?>