<?php
session_start();

include './include/header.php';

include('include/config.php');

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
//   echo "<script>" . "window.location.href='../login.php';" . "</script>";
//   exit;
// }

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login.php');
    exit;
}

include "include/config.php";
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
  

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/user-billing.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:01 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="4Bchat AI">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>User Billing - 4Bchat AI</title>


<script>
	if (!localStorage.frenify_skin) {
		localStorage.frenify_skin = 'dark';
	}
	if (!localStorage.frenify_panel) {
		localStorage.frenify_panel = '';
	}
	document.documentElement.setAttribute("data-techwave-skin", localStorage.frenify_skin);
	if(localStorage.frenify_panel !== ''){
		document.documentElement.classList.add(localStorage.frenify_panel);
	}
  	
</script>

<!-- Google Fonts -->
<link rel="preconnect" href="../../../../../../../fonts.googleapis.com/index.php">
<link rel="preconnect" href="../../../../../../../fonts.gstatic.com/index.php" crossorigin>
<link href="../../../../../../../fonts.googleapis.com/css25188.css?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<!-- !Google Fonts -->

<!-- Styles -->
<link type="text/css" rel="stylesheet" href="css/plugins8a54.css?ver=1.0.0" />
<link type="text/css" rel="stylesheet" href="css/style8a54.css?ver=1.0.0" />
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
<!-- !Styles -->

</head>

<body>


<!-- Moving Submenu -->
<div class="techwave_fn_fixedsub">
	<ul></ul>
</div>
<!-- !Moving Submenu -->

<!-- Preloader -->
<div class="techwave_fn_preloader">
	<svg>
		<circle class="first_circle" cx="50%" cy="50%" r="110"></circle>
		<circle class="second_circle" cx="50%" cy="50%" r="110"></circle>
	</svg>
</div>
<!-- !Preloader -->


<!-- MAIN WRAPPER -->
<div class="techwave_fn_wrapper">
	<div class="techwave_fn_wrap">
	
	
		<!-- Searchbar -->
		<div class="techwave_fn_searchbar">
			<div class="search__bar">
				<input class="search__input" type="text" placeholder="Search here...">
				<img src="svg/search.svg" alt="" class="fn__svg search__icon">
				<a class="search__closer" href="#"><img src="svg/close.svg" alt="" class="fn__svg"></a>
			</div>
			<div class="search__results">
				<!-- Results will come here (via ajax after the integration you made after purchase as it doesn't work in HTML) -->
				<div class="results__title">Results</div>
				<div class="results__list">
					<ul>
						<li><a href="#">Artificial Intelligence</a></li>
						<li><a href="#">Learn about the impact of AI on the financial industry</a></li>
						<li><a href="#">Delve into the realm of AI-driven manufacturing</a></li>
						<li><a href="#">Understand the ethical implications surrounding AI</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- !Searchbar -->
		
		<!-- CONTENT -->
		<div class="techwave_fn_content">
		
			<!-- PAGE (all pages go inside this div) -->
			<div class="techwave_fn_page">
				
				<!-- User Billing Page -->
				<div class="techwave_fn_user_billing_page">
					<!-- Page Title -->
					<div class="techwave_fn_pagetitle">
						<h2 class="title">User Billing</h2>
					</div>
					<!-- !Page Title -->
				
					<div class="container small">
						<div class="techwave_fn_user_billing">
							
							<div class="billing__plan">
								<div class="plan"><span>Your Plan</span></div>
								<h2 class="title">Personal Plan — $15.00 Per Month</h2>
								<p class="desc">You will given 8000 tokens every month</p>
							</div>
							
							<div class="billing__activation">
								
								<div class="activation_status">
									<div class="status_left">
										<h2 class="title">Active until Dec 09, 2025</h2>
										<p class="desc">We will send you a notification upon Subscription expiration</p>
									</div>
									<div class="status_right">
										<span class="info">657 Days Left</span>
										<span class="progress" data-percentage="66.66%"></span>
									</div>
								</div>
								
								<div class="activation_actions">
									<a href="pricing.php" class="techwave_fn_button"><span>Upgrade Plan</span></a>
									<a href="pricing.php" class="disabled techwave_fn_button"><span>Cancel Subscription</span></a>
								</div>
								
							</div>
							
							<div class="payment__methods">
								<h2 class="title">Payment Methods</h2>
								<div class="payment_list">
									<ul class="payment__list">
										<li class="payment__list_item ready">
											<div class="item">
												<div class="item_header">
													<h2 class="title">Mastercard **** 4658</h2>
													<p class="subtitle">Card expires at 03/25</p>
												</div>
												<div class="action">
													<div class="edit_wrapper">
														<a href="#" class="options"><span class="dots"></span></a>
														<div class="edit__popup">
															<ul>
																<li><a href="#" class="edit">Edit</a></li>
																<li><a href="#" class="delete">Delete</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="payment__list_item ready">
											<div class="item">
												<div class="item_header">
													<h2 class="title">Visa **** 3623</h2>
													<p class="subtitle">Card expires at 07/27</p>
												</div>
												<div class="action">
													<div class="edit_wrapper">
														<a href="#" class="options"><span class="dots"></span></a>
														<div class="edit__popup">
															<ul>
																<li><a href="#" class="edit">Edit</a></li>
																<li><a href="#" class="delete">Delete</a></li>
															</ul>
														</div>
													</div>
													<div class="primary">
														<span>Primary</span>
													</div>
												</div>
											</div>
										</li>
										<li class="payment__list_item new">
											<div class="item">
												<a href="#" class="fn__full_link"></a>
												<span class="add"></span>
												<span class="text">Add new</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
				<!-- !User Billing Page -->
				
			</div>
			<!-- !PAGE (all pages go inside this div) -->
			
			
			<!-- FOOTER (inside the content) -->
			<?php 
			 include 'include/footer.php'
			?>
			<!-- !FOOTER (inside the content) -->
			
		</div>
		<!-- !CONTENT -->
		
		
	</div>
</div>
<!-- !MAIN WRAPPER -->



<!-- Scripts -->
<script type="text/javascript" src="js/jquery8a54.js?ver=1.0.0"></script>
<script type="text/javascript" src="js/plugins8a54.js?ver=1.0.0"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
<script type="text/javascript" src="js/init8a54.js?ver=1.0.0"></script>
<!-- !Scripts -->

</body>

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/user-billing.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:01 GMT -->
</html>