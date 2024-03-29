<?php
   
   $sql_count ="SELECT blog.tag_id, COUNT(blog.tag_id) AS blogs_count, category.name AS catename FROM blog LEFT JOIN category ON blog.tag_id = category.id GROUP BY blog.tag_id";
   $blogs_count = $db->fetchsql($sql_count);

   $cate =$db-> fetchALL('category');
   $sql = "SELECT blog.id AS blogid, 
                  blog.title AS blogtitle, 
                  blog.subdescription AS blogsub, 
                  blog.date_create AS blogdate_create, 
                  blog.image AS blogimg, 
                  users.name AS usersname,
                  category.name AS catename, 
                  COUNT(comments.id) AS CommentCount 
         FROM blog LEFT JOIN comments ON blog.id = comments.blog_id 
         LEFT JOIN category ON category.id = blog.tag_id
         LEFT JOIN users ON users.id = blog.user_id
         GROUP BY blogid, usersname, blogtitle, blogsub, blogdate_create, blogimg, catename ORDER BY blog.id DESC LIMIT 5";
         $myblog =$db->fetchsql($sql);
?>
<div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
                        <div class="sidebar-box pt-md-4">
                           <form action="viewblogbycate.php" method="POST" class="search-form">
                              <div class="form-group">
                                 <span class="icon icon-search"></span>
                                 <input type="text" name="id" class="form-control" placeholder="Type a keyword and hit enter">
                              </div>
                           </form>
                        </div>
                        <div class="sidebar-box ftco-animate">
                           <h3 class="sidebar-heading">Categories</h3>
                           <ul class="categories">
                              <?php foreach($blogs_count as $item) : ?>
                                 <li><a href="viewblogbycate.php?id=<?php echo $item['catename'] ?>"><?php echo $item['catename'] ?> <span>(<?php echo $item['blogs_count'] ?>)</span></a></li>
                              <?php endforeach; ?>
                           </ul>
                        </div>
                        <div class="sidebar-box ftco-animate">
                           <h3 class="sidebar-heading">Popular Articles</h3>
                           <?php foreach($myblog as $item) : ?>      
                              <div class="block-21 mb-4 d-flex">
                                 <a class="blog-img mr-4" style="background-image: url(img/<?php echo $item['blogimg'];?>);"></a>
                                 <div class="text">
                                    <h3 class="heading"><a href="viewdetail.php?id=<?php echo$item['blogid'];?>"><?php echo $item['blogtitle']; ?></a></h3>
                                    <div class="meta">
                                       <div><a href="#"><span class="icon-calendar"></span> <?php echo convertDate($item['blogdate_create']);?></a></div>
                                       <div><a href="#"><span class="icon-person"></span><?php echo $item['usersname'];?></a></div>
                                       <div><a href="#"><span class="icon-chat"></span><?php echo $item['CommentCount'];?></a></div>
                                    </div>
                                 </div>
                              </div>
                           <?php endforeach; ?>
                        </div>
                        <div class="sidebar-box ftco-animate">
                           <h3 class="sidebar-heading">Tag Cloud</h3>
                           <ul class="tagcloud">
                              <?php foreach($cate as $items) : ?>
                                 <a href="viewblogbycate.php?id=<?php echo $items['name'] ?>" class="tag-cloud-link"><?php echo $items['name'] ?></a>
                              <?php endforeach; ?>
                           </ul>
                        </div>
                        <div class="sidebar-box subs-wrap img py-4" style="background-image: url(img/bg_1.jpg);">
                           <div class="overlay"></div>
                           <h3 class="mb-4 sidebar-heading">Newsletter</h3>
                           <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
                           <form action="#" class="subscribe-form">
                              <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Email Address">
                                 <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
                              </div>
                           </form>
                        </div>
                        <div class="sidebar-box ftco-animate">
                           <h3 class="sidebar-heading">Archives</h3>
                           <ul class="categories">
                              <li><a href="#">Decob14 2018 <span>(10)</span></a></li>
                              <li><a href="#">September 2018 <span>(6)</span></a></li>
                              <li><a href="#">August 2018 <span>(8)</span></a></li>
                              <li><a href="#">July 2018 <span>(2)</span></a></li>
                              <li><a href="#">June 2018 <span>(7)</span></a></li>
                              <li><a href="#">May 2018 <span>(5)</span></a></li>
                           </ul>
                        </div>
                        <div class="sidebar-box ftco-animate">
                           <h3 class="sidebar-heading">Paragraph</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut.</p>
                        </div>
                     </div>
                     <!-- END COL -->
                  </div>
               </div>
            </section>
         </div>
         <!-- END COLORLIB-MAIN -->
      </div>
      <!-- END COLORLIB-PAGE -->
      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen">
         <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
         </svg>
      </div>
      <script src="/blogs/public/js/jquery.min.js"></script>
      <script src="/blogs/public/js/jquery-migrate-3.0.1.min.js"></script>
      <script src="/blogs/public/js/popper.min.js"></script>
      <script src="/blogs/public/js/bootstrap.min.js"></script>
      <script src="/blogs/public/js/jquery.easing.1.3.js"></script>
      <script src="/blogs/public/js/jquery.waypoints.min.js"></script>
      <script src="/blogs/public/js/jquery.stellar.min.js"></script>
      <script src="/blogs/public/js/owl.carousel.min.js"></script>
      <script src="/blogs/public/js/jquery.magnific-popup.min.js"></script>
      <script src="/blogs/public/js/aos.js"></script>
      <script src="/blogs/public/js/jquery.animateNumber.min.js"></script>
      <script src="/blogs/public/js/scrollax.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
      <script src="/blogs/public/js/google-map.js"></script>
      <script src="/blogs/public/js/main.js"></script>
      <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
      <script>
      tinymce.init({
         selector: '#myTextarea',
         plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
         toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
         tinycomments_mode: 'embedded',
         tinycomments_author: 'Author name',
         mergetags_list: [
         { value: 'First.Name', title: 'First Name' },
         { value: 'Email', title: 'Email' },
         ],
         ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
      });
      </script>
   </body>
</html>