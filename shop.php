<!-- Hackathon Project -->
<!-- TEAM MOHVATRA
1. Anubhav
2. Sridatt
3. Anubhav K
4. Akshay
5. Divya
6. Vedhant
7. Mansi
 -->
 <!-- HEXCODERZ PWA BOOTCAMP -->
<?php include 'db.php';
session_start();
$pid = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>PRODUCTS - HEXSTORES</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	
	<!-- Favicons -->
	<link href="images/icon.png" rel="icon">

	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<?php include 'navbar.php'; ?>
    </div>
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.html">Home</a>
							<i>|</i>
						</li>
						<li>Shop</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-HEX my-lg-4 mt-3">Latest Arrivals </h3>
					<div class="row">
						<!-- product left -->
						<div class="side-bar col-lg-3">
							<!-- price range -->
							<div class="range">
								<h3 class="agileits-sear-head">Price range</h3>
								<ul class="dropdown-menu6">
									<li>
										<div id="slider-range"></div>
										<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
									</li>
								</ul>
							</div>
							<!-- //price range -->
						</div>
						<!-- //product left -->
						<!--/product right-->
						<div class="left-ads-display col-lg-9">
							<div class="wrapper_top_shop filter_data">
								
									<div class="row">
											<!-- /womens -->
											
												<?php
												$sql = "SELECT * FROM products where category_id = '$pid' ";
												$result = mysqli_query($db, $sql);
												if (mysqli_num_rows($result) > 0) 
												{
													while($row = mysqli_fetch_assoc($result)) 
														{
												?>
												<div class="col-md-3 product-men women_two shop-gd">
													<div class="product-googles-info googles" style="margin-bottom: 20px;">
														<div class="men-pro-item">
															<div class="men-thumb-item">
																<img style="height: 170px;" src="<?php echo $row['photo_main'] ?>" class="img-fluid" alt="">
																<div class="men-cart-pro">
																	<div class="inner-men-cart-pro">
																		<a href="single.php?id=<?php echo $row['id']; ?>" class="link-product-add-cart">Quick View</a>
																	</div>
																</div>
																<span class="product-new-top">New</span>
															</div>
															<div class="item-info-product">
																<div class="info-product-price">
																	<div class="grid_meta">
																		<div class="product_price">
																			<h4>
																				<a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['name'] ?></a>
																			</h4>
																			<div class="grid-price mt-2">
																				<span class="money ">₹<?php echo $row['price_new'] ?></span>
																			</div>
																		</div>
																		<ul class="stars">
																			<li>
																				<a href="#">
																					<i class="fa fa-star" aria-hidden="true"></i>
																				</a>
																			</li>
																			<li>
																				<a href="#">
																					<i class="fa fa-star" aria-hidden="true"></i>
																				</a>
																			</li>
																			<li>
																				<a href="#">
																					<i class="fa fa-star" aria-hidden="true"></i>
																				</a>
																			</li>
																			<li>
																				<a href="#">
																					<i class="fa fa-star" aria-hidden="true"></i>
																				</a>
																			</li>
																			<li>
																				<a href="#">
																					<i class="fa fa-star-half-o" aria-hidden="true"></i>
																				</a>
																			</li>
																		</ul>
																	</div>
																	<div class="googles single-item hvr-outline-out">
																		<form action="#" method="post">
																			<input type="hidden" name="cmd" value="_cart">
																			<input type="hidden" name="add" value="1">
																			<input type="hidden" name="googles_item" value="<?php echo $row['name'] ?>">
																			<input type="hidden" name="amount" value="<?php echo $row['price_new'] ?>">
																			<button type="submit" class="googles-cart pgoogles-cart">
																				<i class="fas fa-cart-plus"></i>
																			</button>
																		</form>
			
																	</div>
																</div>
																<div class="clearfix"></div>
															</div>
														</div>
													</div>
												</div>
												<?php
														}
												}
												else
												{
													echo "0 result";
												}
												?>
											
									</div>
							</div>
						</div>
						<!--//product right-->
					</div>
					<!--/slide-->
				<div class="slider-img mid-sec mt-lg-5 mt-2">
						<!--//banner-sec-->
						<h3 class="tittle-HEX text-left my-lg-4 my-3">Featured Products</h3>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">
								
								<?php
								$stmt = "SELECT * FROM products";
								$result = mysqli_query($db, $stmt);
								if(mysqli_num_rows($result)>0) 
								{
						 			while($row = mysqli_fetch_assoc($result))
						 			{
								?>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img style="height: 300px;" src="<?php echo $row['photo_main'] ?>" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.php?id=<?php echo $row['id']; ?>" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['name'] ?></a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">₹<?php echo $row['price_new'] ?></span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="<?php echo $row['name'] ?>">
																	<input type="hidden" name="amount" value="<?php echo $row['price_new'] ?>">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>

															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
						 			}
								}
								else
	                        		{
	                           	 		echo "0 results";
	                        		} 
								?>
							</div>
					</div>
					</div>
					<!--//slider-->
				</div>
			</div>
		</section>
		<?php include 'footer.php'; ?>

		<!--jQuery-->
		<script src="js/jquery-2.2.3.min.js"></script>
		<!-- newsletter modal -->
		<!--search jQuery-->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script src="js/classie-search.js"></script>
		<script src="js/demo1-search.js"></script>
		<!--//search jQuery-->
		<!-- cart-js -->
		<script src="js/minicart.js"></script>
		
		<script>
			googles.render();

			googles.cart.on('googles_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
		</script>
		<!-- //cart-js -->
		<script>
			$(document).ready(function () {
				$(".button-log a").click(function () {
					$(".overlay-login").fadeToggle(200);
					$(this).toggleClass('btn-open').toggleClass('btn-close');
				});
			});
			$('.overlay-close1').on('click', function () {
				$(".overlay-login").fadeToggle(200);
				$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
				open = false;
			});
		</script>
		<!-- carousel -->
		<!-- price range (top products) -->
		<script src="js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

		<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function () {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1,
							nav: true
						},
						600: {
							items: 2,
							nav: false
						},
						900: {
							items: 3,
							nav: false
						},
						1000: {
							items: 4,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>

		<!-- //end-smooth-scrolling -->


		<!-- dropdown nav -->
		<script>
			$(document).ready(function () {
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
		</script>
		<!-- //dropdown nav -->
		<script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

		<script src="js/bootstrap.js"></script>
		<!-- js file -->
</body>

</html>