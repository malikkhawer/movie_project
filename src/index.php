<?php
include('includes/header.php');
?>

<!-- Modal1 -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">

	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>Login</h4>
				<div class="login-form">
					<form action="#" method="post">
						<input type="email" name="email" placeholder="E-mail" required="">
						<input type="password" name="password" placeholder="Password" required="">
						<div class="tp">
							<input type="submit" value="LOGIN NOW">
						</div>
						<div class="forgot-grid">
							<div class="log-check">
								<label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
							</div>
							<div class="forgot">
								<a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
							</div>
							<div class="clearfix"></div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Modal1 -->
<!-- Modal1 -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog">

	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>Register</h4>
				<div class="login-form">
					<form action="#" method="post">
						<input type="text" name="name" placeholder="Name" required="">
						<input type="email" name="email" placeholder="E-mail" required="">
						<input type="password" name="password" placeholder="Password" required="">
						<input type="password" name="conform password" placeholder="Confirm Password" required="">
						<div class="signin-rit">
							<span class="agree-checkbox">
								<label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a
										class="w3layouts-t" href="#" target="_blank">Terms of Use</a> and <a
										class="w3layouts-t" href="#" target="_blank">Privacy Policy</a></label>
							</span>
						</div>
						<div class="tp">
							<input type="submit" value="REGISTER NOW">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Modal1 -->
<!--/content-inner-section-->
<div class="w3_content_agilleinfo_inner">
	<div class="agile_featured_movies">
		<!--/agileinfo_tabs-->
		<div class="agileinfo_tabs">
			<!---728x90--->

			<!--/tab-section-->
			<div id="horizontalTab">
				<!-- <ul class="resp-tabs-list">
					<li>Recent</li>
					<li>Popularity</li>
					<li>Top Rating </li>

				</ul> -->
				<div class="resp-tabs-container">
					<div class="tab1">
						<div class="tab_movies_agileinfo">

						</div>
						<div class="tab2">
							<div class="tab_movies_agileinfo">

							</div>
							<div class="tab3">
								<div class="tab_movies_agileinfo">

									<div class="cleafix"></div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!--//tab-section-->

				<!--//movies-->
				<!---728x90--->
				<h3 class="agile_w3_title">Hollywood <span>Movies</span> </h3>
				<!--/requested-movies-->
				<div class="wthree_agile-requested-movies">
				<?php include('../adminpanel/connect.php') ?>
					<?php

					$query = "SELECT *  
							FROM movies where category_id = '1'";

					$connect_query = mysqli_query($connection, $query);

					if (mysqli_num_rows($connect_query) > 0) {
						while ($row = mysqli_fetch_assoc($connect_query)) {

							?>
					<div class="col-md-2 w3l-movie-gride-agile requested-movies">
						
						<img src="../adminpanel/uploads/<?php echo $row ['image'] ?> " title="Movies Pro"
								class="img-responsive"style="height:250px; width:250px;" alt=" ">

							<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i>
							</div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<b<h6><?php echo $row ['title'] ?></h6></b>
							</div>
							<div class="mid-2 agile_mid_2_home">
								<p>2024</p>
								<div class="block-stars">
									<ul class="w3l-ratings">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<br>
								<br>
								<div class="form-group">
                                      <a href="../adminpanel/uploads/<?php echo $row['trailer'] ?>"  class="btn btn-primary" style="width:150px; border-radius:5px">Watch Trailer</a>
                                    
                                    </div>
					
							</div>

						</div>
						<!-- <div class="ribben one">
							<p>NEW</p>
						</div> -->
					</div>

					<?php
						}
					}

					?>
					


				<!--//top-movies-->
			</div>
		</div>
		<div class="agileinfo_tabs">
			<!---728x90--->

			<!--/tab-section-->
			<div id="horizontalTab">
				<!-- <ul class="resp-tabs-list">
					<li>Recent</li>
					<li>Popularity</li>
					<li>Top Rating </li>

				</ul> -->
				<div class="resp-tabs-container">
					<div class="tab1">
						<div class="tab_movies_agileinfo">

						</div>
						<div class="tab2">
							<div class="tab_movies_agileinfo">

							</div>
							<div class="tab3">
								<div class="tab_movies_agileinfo">

									<div class="cleafix"></div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!--//Bollywood-movie-section-->

				<h3 class="agile_w3_title">Bollywood <span>Movies</span> </h3>
				<!--/requested-movies-->
				<div class="wthree_agile-requested-movies">
				  <!-- bd - connection -->
				  <?php include('../adminpanel/connect.php') ?>

				<!-- query - start -->
					<?php

					$query = "SELECT *  
							FROM movies where category_id = '2'";

					$connect_query = mysqli_query($connection, $query);

					if (mysqli_num_rows($connect_query) > 0) {
						while ($row = mysqli_fetch_assoc($connect_query)) {

							?>
					<div class="col-md-2 w3l-movie-gride-agile requested-movies">
						<img src="../adminpanel/uploads/<?php echo $row ['image'] ?>" title="Movies Pro"
								class="img-responsive"style="height:250px; width:250px;" alt=" ">
						
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<b<h6><?php echo $row ['title'] ?></h6></b>
							</div>
							<div class="mid-2 agile_mid_2_home">
								<p>2024</p>
								<div class="block-stars">
									<ul class="w3l-ratings">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<br>
								<br>
								<div class="form-group">
                                      <a href="../adminpanel/uploads/<?php echo $row['trailer'] ?>"  class="btn btn-primary" style="width:150px; border-radius:5px">Watch Trailer</a>
                                    
                                    </div>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- <div class="ribben one">
							<p>NEW</p>
						</div> -->
					</div>

					<?php
						}
					}

					?>




					<div class="clearfix"></div>
				</div>


				<!--//Bollywood-movie-section- end-->
			</div>
		</div>
		<div class="agileinfo_tabs">
			<!---728x90--->

			<!--/tab-section-->
			<div id="horizontalTab">
				<!-- <ul class="resp-tabs-list">
					<li>Recent</li>
					<li>Popularity</li>
					<li>Top Rating </li>

				</ul> -->
				<div class="resp-tabs-container">
					<div class="tab1">
						<div class="tab_movies_agileinfo">

						</div>
						<div class="tab2">
							<div class="tab_movies_agileinfo">

							</div>
							<div class="tab3">
								<div class="tab_movies_agileinfo">

									<div class="cleafix"></div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!--//tab-section-->

				<!--//movies-->
				<!---728x90--->
				<h3 class="agile_w3_title">Lollywood <span>Movies</span> </h3>
				<!--/requested-movies-->
				<div class="wthree_agile-requested-movies">
					<!-- query - start -->
					<?php

					$query = "SELECT *  
							FROM movies where category_id = '3'";

					$connect_query = mysqli_query($connection, $query);

					if (mysqli_num_rows($connect_query) > 0) {
						while ($row = mysqli_fetch_assoc($connect_query)) {

							?>
					<div class="col-md-2 w3l-movie-gride-agile requested-movies">
						<img src="../adminpanel/uploads/<?php echo $row ['image'] ?>" title="Movies Pro"
								class="img-responsive"style="height:250px; width:250px;" alt=" ">
								

							<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i>
							</div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<b<h6><?php echo $row ['title'] ?></h6></b>
							</div>
							<div class="mid-2 agile_mid_2_home">
								<p>2024</p>
								<div class="block-stars">
									<ul class="w3l-ratings">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<br>
								<br>
								<div class="form-group">
                                      <a href="../adminpanel/uploads/<?php echo $row['trailer'] ?>"  class="btn btn-primary" style="width:150px; border-radius:5px">Watch Trailer</a>
                                    
                                    </div>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- <div class="ribben one">
							<p>NEW</p>
						</div> -->
					</div>

					<?php
						}
					}

					?>
					<div class="clearfix"></div>
				</div>


				<!--//top-movies-->
			</div>
		</div>
		<!--//content-inner-section-->

		<?php
		include('includes/footer.php');
		?>