<?php



require 'db.php';

if( isset($_SESSION['user_id']) ){
    $results = NULL;
	$records = $conn->prepare('SELECT count(*),user_id,fname,email,password FROM user_details WHERE user_id = :user_id');
	$records->bindParam(':user_id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);
   

}



?>
<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Need Help</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Call</li>
						<li class="number-phone mt-3">+91 7218450969</li>
					</ul>
				</div>
				<div class="col-md-6 logo-HEX text-center">
					<h1 class="logo-HEX">
						<a class="navbar-brand" href="index.php">
							HEX STORES </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<?php if( !empty($_SESSION['fname'])): ?>
							<br />Welcome <?= $_SESSION['fname']; ?> 
							<a href="logout.php">Logout?</a>
							<?php else: ?>
						<a class="btn-open" href="login.php">
							<span class="fa fa-user" aria-hidden="true"></span>
						</a>
						<?php endif; ?>
						
						
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									Cart
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form>
						</li>
					</ul>
					<!---->

				</div>
			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form action="#" method="" class="d-flex">
						<input class="form-control" type="search" placeholder="Search here..." required="">
						<button type="submit" class="btn btn-primary submit">
							<i class="fas fa-search"></i>
						</button>
					</form>

				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About Us</a>
						</li>
						<!-- Mens -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								MENS
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-HEX-sub"> Hex-Tshirts </h5>
											
											<h5 class="tittle-HEX-sub"> Hex-Sweatshirts </h5>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-HEX-sub">  Premium Hex Tees</h5>
											<div class="media-mini mt-3">
												<a href="single.php?id=38 ?>">
													<img src="images/tshirt/premium_men.gif" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-HEX-sub">Newest Arrivals </h5>
											<div class="media-mini mt-3">
												<a href="single.php?id=3 ?>">
													<img src="images/tshirt/men/3.png" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<!-- Women -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								WOMENS
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-HEX-sub"> Hex-Tshirts </h5>
											<h5 class="tittle-HEX-sub"> Hex-Sweatshirts </h5>
											
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-HEX-sub">  Premium Hex Tees</h5>
											<div class="media-mini mt-3">
												<a href="single.php?id=38 ?>">
													<img src="images/tshirt/premium_men.gif" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-HEX-sub">Newest Arrivals </h5>
											<div class="media-mini mt-3">
												<a href="single.php?id=9 ?>">
													<img src="images/tshirt/women/3.png" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Shop Now
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-HEX-sub"> Other Products </h5>
											<ul>
												<?php
												$sql = "SELECT * FROM category";
												$result = mysqli_query($db, $sql);
												if (mysqli_num_rows($result) > 0) 
												{
													while($row = mysqli_fetch_assoc($result)) 
														{
												?>
												<li class="media-mini mt-3"><a href="shop.php?id=<?php echo $row['id'];?>"><?php echo $row['name'] ?></a></li>
												<?php
												}
											}
											else
											{
												echo "0 result";
											}
											?>
												
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">

											<h5 class="tittle-HEX-sub-nav">PRODUCT OF THE DAY </h5>
											<div class="media-mini mt-3">
												<a href="single.php?id=21 ?>">
													<img src="images/mugs/3.png" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->