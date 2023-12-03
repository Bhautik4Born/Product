<?php
session_start();

include './include/header.php';

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
//   echo "<script>" . "window.location.href='../login.php';" . "</script>";
//   exit;
// }

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login.php');
    exit;
}

include "include/config.php";


  
    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $showUsername = true;

    $query = "SELECT * FROM AI_register WHERE id = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $userId1 = $row['id'];
        $user_name1 = $row['username'];
        $license_key = $row['license_key'];
        $number1 = $row['mobile_number'];
        $email1 = $row['email'];
        
        // $based = 'https://seamarineservice.in/4born%20Market/';
        $profile_image2 = $row['profile_image'];
        $profile_image1 = $based . $profile_image2;
    }

    $userData = mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
  

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/user-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:44:59 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="4Bchat AI">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>User Profile - 4Bchat AI</title>


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
<style>
    .user__plan {
    margin-left: auto;
}
</style>

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
				
				<!-- User Profile Page -->
				<div class="techwave_fn_user_profile_page">
					<!-- Page Title -->
					<div class="techwave_fn_pagetitle">
						<h2 class="title">User Profile</h2>
					</div>
					<!-- !Page Title -->
				
					<div class="container small">
						<div class="techwave_fn_user_profile">

							<div class="user__profile">
								<div class="user_avatar">
									<img src="<?php echo $profile_image1;?>" alt="">
								</div>
								<div class="user_details">
									<ul>
										
										<li>
											<div class="item">
												<h4 class="subtitle">Username</h4>
												<h3 class="title"><?php echo $user_name1;?></h3>
											</div>
										</li>
										<li>
											<div class="item">
												<h4 class="subtitle">Your License key</h4>
												<h3 class="title"><?php echo $license_key;?></h3>
											</div>
										</li>
										
										<li>
											<div class="item">
												<h4 class="subtitle">Email Address</h4>
												<h3 class="title"><?php echo $email1;?></h3>
											</div>
										</li>
										<li>
											<div class="item">
												<h4 class="subtitle"></h4>
												<div class="plan_right">
                                                    <a href="#copy-txt" ping="https://4bchat.4born.info/platform/api/api_chat.php" class="token_upgrade techwave_fn_button copy-txt" onclick="copyLink()"><span>copy</span></a>
                                                </div>


												<h3 class="title"></h3>
											</div>
										</li>
									</ul>
								</div>
								<!--<a href="user-settings.php" class="user_edit fn__icon_button">-->
								<!--	<img src="svg/setting.svg" alt="" class="fn__svg">-->
								<!--</a>-->
							</div>
							
							<div style="display:flex;">

    							<div class="user__plan">
    								<div class="plan_left">
    									<h4 class="subtitle">Your API Plan Expire On </h4>
    									<p class="info"><span>After</span> - 15 Days</p>
    								</div>
    							</div>
    							
    							<div class="user__plan">
    								<div class="plan_left">
    									<h4 class="subtitle">Your Plan</h4>
    									<p class="info"><span>Trailer</span> - 15 Days Free Trailer</p>
    								</div>
    								<div class="plan_right">
    									<a href="pricing.php" class="token_upgrade techwave_fn_button"><span>Upgrade API</span></a>
    								</div>
    							</div>
							</div>

							<!--<div class="user__interests">-->
							<!--	<h4 class="title">What are your interests?</h4>-->
							<!--	<div class="fn__options_list">-->
							<!--		<ul>-->
							<!--			<li>-->
							<!--				<a href="#" class="techwave_fn_button small__border enabled">-->
							<!--					<span>Advertising</span>-->
							<!--				</a>-->
							<!--			</li>-->
							<!--			<li>-->
							<!--				<a href="#" class="techwave_fn_button small__border disabled">-->
							<!--					<span>Architecture</span>-->
							<!--				</a>-->
							<!--			</li>-->
							<!--			<li>-->
							<!--				<a href="#" class="techwave_fn_button small__border disabled">-->
							<!--					<span>Art</span>-->
							<!--				</a>-->
							<!--			</li>-->
							<!--			<li>-->
							<!--				<a href="#" class="techwave_fn_button small__border disabled">-->
							<!--					<span>Education</span>-->
							<!--				</a>-->
							<!--			</li>-->
							<!--			<li>-->
							<!--				<a href="#" class="techwave_fn_button small__border disabled">-->
							<!--					<span>Fashion</span>-->
							<!--				</a>-->
							<!--			</li>-->
							<!--			<li>-->
							<!--				<a href="#" class="techwave_fn_button small__border disabled">-->
							<!--					<span>Film TV</span>-->
							<!--				</a>-->
							<!--			</li>-->
							<!--			<li>-->
							<!--				<a href="#" class="techwave_fn_button small__border disabled">-->
							<!--					<span>Interior</span>-->
							<!--				</a>-->
							<!--			</li>-->
							<!--			<li>-->
							<!--				<a href="#" class="techwave_fn_button small__border enabled">-->
							<!--					<span>Marketing</span>-->
							<!--				</a>-->
							<!--			</li>-->
							<!--			<li>-->
							<!--				<a href="#" class="techwave_fn_button small__border disabled">-->
							<!--					<span>Graphics</span>-->
							<!--				</a>-->
							<!--			</li>-->
							<!--			<li>-->
							<!--				<a href="#" class="techwave_fn_button small__border disabled">-->
							<!--					<span>Games</span>-->
							<!--				</a>-->
							<!--			</li>-->
							<!--			<li>-->
							<!--				<a href="#" class="techwave_fn_button small__border disabled">-->
							<!--					<span>Stock Images</span>-->
							<!--				</a>-->
							<!--			</li>-->
							<!--			<li>-->
							<!--				<a href="#" class="techwave_fn_button small__border disabled">-->
							<!--					<span>Other</span>-->
							<!--				</a>-->
							<!--			</li>-->
							<!--		</ul>-->
							<!--	</div>-->
							<!--</div>-->

						</div>
					</div>
					
				</div>
				<!-- !User Profile Page -->
				
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
<script>
    function copyLink() {
    // Get the href attribute of the link
    var link = document.querySelector('.copy-txt').getAttribute('ping');

    // Create a temporary textarea element
    var textarea = document.createElement('textarea');
    textarea.value = link;

    // Append the textarea to the document
    document.body.appendChild(textarea);

    // Select the text in the textarea
    textarea.select();
    document.execCommand('copy');

    // Remove the temporary textarea
    document.body.removeChild(textarea);

    // Change the button text to 'copied'
    document.querySelector('.copy-txt span').innerText = 'copied';

    // Reset the button text after 2 seconds
    setTimeout(function() {
        document.querySelector('.copy-txt span').innerText = 'copy';
    }, 1000);
}

</script>

</body>

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/user-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:44:59 GMT -->
</html>

<?php
}
?>