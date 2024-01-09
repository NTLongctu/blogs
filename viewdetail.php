<?php
    require_once ("autoload/autoload.php");
    $id = intval(getInput('id'));
    $blog = $db->fetchID("blog",$id);
    $getnamecate = $db->fetchID("category",$blog['tag_id']);
?>
<?php require_once("layouts/header.php"); ?>
				<div class="col-lg-8 px-md-5 py-5">
					<div class="row pt-md-4">
						<h1 class="mb-3"><?php echo $blog['title']; ?></h1>
						<div class="container-fluid">
						<?php echo $blog['content']; ?>
						</div>
						<p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
						<p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
						<p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p>
						<p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>
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
								<img src="img/<?php echo$_SESSION['avatar']?>" alt="Image placeholder" class="img-fluid mb-4">
							</div>
							<div class="desc">
								<h3><?php echo$_SESSION['name_user']?></h3>
								<p><?php echo $blog['subdescription'];?></p>
							</div>
						</div>
						<div class="pt-5 mt-5">
							<h3 class="mb-5 font-weight-bold">6 Comments</h3>
							<ul class="comment-list">
								<li class="comment">
								<div class="vcard bio">
									<img src="images/person_1.jpg" alt="Image placeholder">
								</div>
								<div class="comment-body">
									<h3>John Doe</h3>
									<div class="meta">October 03, 2018 at 2:21pm</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
									<p><a href="#" class="reply">Reply</a></p>
								</div>
								</li>
								<li class="comment">
								<div class="vcard bio">
									<img src="images/person_1.jpg" alt="Image placeholder">
								</div>
								<div class="comment-body">
									<h3>John Doe</h3>
									<div class="meta">October 03, 2018 at 2:21pm</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
									<p><a href="#" class="reply">Reply</a></p>
								</div>
								<ul class="children">
									<li class="comment">
										<div class="vcard bio">
											<img src="images/person_1.jpg" alt="Image placeholder">
										</div>
										<div class="comment-body">
											<h3>John Doe</h3>
											<div class="meta">October 03, 2018 at 2:21pm</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
											<p><a href="#" class="reply">Reply</a></p>
										</div>
										<ul class="children">
											<li class="comment">
											<div class="vcard bio">
												<img src="images/person_1.jpg" alt="Image placeholder">
											</div>
											<div class="comment-body">
												<h3>John Doe</h3>
												<div class="meta">October 03, 2018 at 2:21pm</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
												<p><a href="#" class="reply">Reply</a></p>
											</div>
											<ul class="children">
												<li class="comment">
													<div class="vcard bio">
														<img src="images/person_1.jpg" alt="Image placeholder">
													</div>
													<div class="comment-body">
														<h3>John Doe</h3>
														<div class="meta">October 03, 2018 at 2:21pm</div>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
														<p><a href="#" class="reply">Reply</a></p>
													</div>
												</li>
											</ul>
											</li>
										</ul>
									</li>
								</ul>
								</li>
								<li class="comment">
								<div class="vcard bio">
									<img src="images/person_1.jpg" alt="Image placeholder">
								</div>
								<div class="comment-body">
									<h3>John Doe</h3>
									<div class="meta">October 03, 2018 at 2:21pm</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
									<p><a href="#" class="reply">Reply</a></p>
								</div>
								</li>
							</ul>
							<!-- END comment-list -->
							<div class="comment-form-wrap pt-5">
								<h3 class="mb-5">Leave a comment</h3>
								<form action="#" class="p-3 p-md-5 bg-light">
								<div class="form-group">
									<label for="name">Name *</label>
									<input type="text" class="form-control" id="name">
								</div>
								<div class="form-group">
									<label for="email">Email *</label>
									<input type="email" class="form-control" id="email">
								</div>
								<div class="form-group">
									<label for="website">Website</label>
									<input type="url" class="form-control" id="website">
								</div>
								<div class="form-group">
									<label for="message">Message</label>
									<textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
								</div>
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