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
<?php include  'db.php';
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>INVOICE - HEXSTORES</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />

	<!-- Favicons -->
	<link href="images/icon.png" rel="icon">

	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
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
						<li>Invoice </li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
		<!--// header_top -->
		<!-- INVOICE -->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="row pad-top-botm ">
						<div class="col-lg-6 col-md-6 col-sm-6 ">
							<img class="comp_logo" src="images/icon.png"> 
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			            
			                <strong>HEXSTORES</strong>
			                <br />
			                    <strong>Address :</strong> CIBA, Verna,
			                <br />
			                  Margao
			                <br />
			                  India.
			            </div>
			        </div>
			        <div  class="row text-center contact-info">
			         <div class="col-lg-12 col-md-12 col-sm-12">
			             <hr />
			             <span>
			                 <strong>Email : </strong>  info@mohvatra.in 
			             </span>
			             <span>
			                 <strong>Call : </strong>  +95 - 890- 789- 9087 
			             </span>
			              
			             <hr />
			         </div>
			     	</div>

			     	 
			     	<div  class="row pad-top-botm client-info">
			     		<?php
					     	$sql = "SELECT name, mobile, address, city FROM billing ;";
					     	$result = mysqli_query($db, $sql);
					     	if (mysqli_num_rows($result) > 0) {
					     	// output data of each row
					     		while($row = mysqli_fetch_assoc($result)) 
					     		{ ?>
					     			<div class='col-lg-6 col-md-6 col-sm-6'>
						         	<h4>  <strong>Customer Information</strong></h4>
						           	<strong><?php echo $row['name']?></strong>
						             <br />
						             <b>Address :</b><?php echo $row['address']?>
						             <br />
						             <?php echo $row['city']?>.
						             <br />
						             <b>Call :</b> <?php echo $row['mobile']?>
						             <br />
						             
						         </div>
						         <?php
					     		}
					     	} 
					     	else {
					     		echo "0 results";
					     	}
					     	 
				     	?>
						         
			         <div class="col-lg-6 col-md-6 col-sm-6">
			         	<h4>  <strong>Payment Details </strong></h4>
			         	<b>Bill Amount :  990 INR </b>
			         	<br />
			         	Bill Date :  30th Jan 2019
			         	<br />
               			<b>Payment Status :  Paid </b>
               			<br />
               			Delivery Date :  3rd Feb 2019
              			<br />
               			Purchase Date :  30th Jan 2019
               		 </div>
               		</div>
				     <div class="row">
				         <div class="col-lg-12 col-md-12 col-sm-12">
				           <div class="table-responsive">
				                        <table class="table table-bordered">
				                            <thead>
				                                <tr>
				                                    <th>S. No.</th>
				                                    <th>Particulars</th>
				                                    <th>Quantity.</th>
				                                    
				                                     <th>Sub Total</th>
				                                </tr>
				                            </thead>
				                            <tbody>
				                                <tr>
				                                    <td>1</td>
				                                    <td>SMILE</td>
				                                    <td>1</td>
				                                    
				                                    <td>300 INR</td>
				                                </tr>
				                                
				                            </tbody>
				                        </table>
				               </div>
				             <hr />
				             <div class="ttl-amts">
				               <h5>  Total Amount : 300 INR </h5>
				             </div>
				             <hr />
				              <div class="ttl-amts">
				                  <h5>  Tax : 90 INR ( by 10 % on bill ) </h5>
				             </div>
				             <hr />
				              <div class="ttl-amts">
				                  <h4> <strong>Bill Amount : 990 INR</strong> </h4>
				             </div>
				         </div>
				     </div>
				      
				      <div class="row pad-top-botm">
				         <div class="col-lg-12 col-md-12 col-sm-12">
				             <hr />
				              <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">PLACE YOUR ORDER</a>
				              <a href="checkout.php" class="btn btn-success btn-lg">BACK</a>
				             </div>
				     </div>
				 </div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5 mx-auto mw-100">
					<h6>YOUR ORDER HAS BEEN PLACED</h6>
					<p class="text-center" aria-label="Close" data-dismiss="modal">
							<a href="#">Check Your Email for more details.</a>
					</p>
				</div>

			</div>
		</div>
	</div>
		<!-- /SECTION -->
		<!-- INVOICE ENDS -->
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
		<!-- easy-responsive-tabs -->
		<script src="js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>

		<!-- credit-card -->
		<script type="text/javascript" src="js/creditly.js"></script>
		<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />

		<script type="text/javascript">
			$(function () {
				var creditly = Creditly.initialize(
					'.creditly-wrapper .expiration-month-and-year',
					'.creditly-wrapper .credit-card-number',
					'.creditly-wrapper .security-code',
					'.creditly-wrapper .card-type');

				$(".creditly-card-form .submit").click(function (e) {
					e.preventDefault();
					var output = creditly.validate();
					if (output) {
						// Your validated credit card output
						console.log(output);
					}
				});
			});
		</script>
		<!-- //credit-card -->
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


		<!-- //smooth-scrolling-of-move-up -->
		<script src="js/bootstrap.js"></script>
		<!-- js file -->
</body>

</html>