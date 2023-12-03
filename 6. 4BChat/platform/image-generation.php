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
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]--> 
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
  

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/image-generation.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:50 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="4Bchat AI">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Image Generation - 4Bchat AI</title>


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
<div class="techwave_fn_wrapper fn__has_sidebar">
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
				
				<!-- Image Generation Page -->
				<div class="techwave_fn_image_generation_page">
					
					<div class="generation__page">
						
						<!-- Generation Header -->
						<div class="generation_header">
							<div class="header_top">
								<h1 class="title">Image Generation</h1>
								<div class="setup">
									<!--<p class="info">This wil use <span class="count">4</span> tokens</p>-->
									<a href="#" class="sidebar__trigger">
										<img src="svg/option.svg" alt="" class="fn__svg">
									</a>
								</div>
							</div>
                            <!--<div class="header_bottom">-->
                            <!--    <div class="include_area">-->
                            <!--        <textarea id="fn__include_textarea" rows="3" placeholder="Enter your prompt"></textarea>-->
                            <!--        <textarea class="fn__hidden_textarea" rows="3" tabindex="-1"></textarea>-->
                            <!--    </div>-->
                            <!--    <div class="generate_section">-->
                            <!--        <button id="generate_it" class="techwave_fn_button"><span>Generate</span></button>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            <div id="response" class="d-flex">
                                <!-- Response will be displayed here -->
                            </div>
                            
                            <div id="loading" style="display: none;">
                                Loading...
                            </div>
                            
                            <div class="header_bottom">
                                <div class="include_area">
                                    <textarea id="fn__include_textarea" rows="3" placeholder="Enter your prompt"></textarea>
                                    <textarea class="fn__hidden_textarea" rows="3" tabindex="-1"></textarea>
                                </div>
                                <div class="generate_section">
                                    <button id="generate_it" class="techwave_fn_button"><span>Generate</span></button>
                                </div>
                            </div>
                            
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <!--<script>-->
                            <!--    $(document).ready(function () {-->
                            <!--        $("#generate_it").on("click", function (e) {-->
                            <!--            e.preventDefault();-->
                            <!--            var prompt = $("#fn__include_textarea").val();-->
                                        
                            <!--            var responseDiv = $("#response");-->
                            <!--            var loadingDiv = $("#loading");-->
                                        
                            <!--            responseDiv.hide();-->
                            <!--            loadingDiv.show();-->
                            
                            <!--            $.ajax({-->
                            <!--                url: "https://4bchat.4born.info/platform/API/ImageGenerations.php",-->
                            <!--                type: "POST",-->
                            <!--                data: { prompt: prompt },-->
                            <!--                dataType: "json",-->
                            <!--                success: function (response) {-->
                            <!--                    loadingDiv.hide();-->
                            <!--                    responseDiv.show();-->
                            
                            <!--                    if (response && response.data) {-->
                            <!--                        responseDiv.empty();-->
                            <!--                        $.each(response.data, function (index, item) {-->
                            <!--                            responseDiv.append('<img class="img-w" src="' + item.url + '" alt="Generated Image ' + (index + 1) + '">');-->
                            <!--                        });-->
                            <!--                    } else {-->
                            <!--                        alert("Error: Invalid API response");-->
                            <!--                    }-->
                            <!--                },-->
                            <!--                error: function () {-->
                            <!--                    loadingDiv.hide();-->
                            <!--                    responseDiv.show();-->
                            <!--                    alert("Error: Failed to fetch data from the API");-->
                            <!--                }-->
                            <!--            });-->
                            <!--        });-->
                            <!--    });-->
                            <!--</script>-->
                            
                              <script>
                              $(document).ready(function () {
                                $("#generate_it").on("click", function (e) {
                                    e.preventDefault();
                                    var prompt = $("#fn__include_textarea").val();
                                    
                                    var responseDiv = $("#response");
                                    var loadingDiv = $("#loading");
                            
                                    // Show the loading indicator
                                    loadingDiv.show();
                            
                                    $.ajax({
                                        url: "https://4bchat.4born.info/platform/API/ImageGenerations.php",
                                        type: "POST",
                                        data: { prompt: prompt },
                                        dataType: "json",
                                        success: function (response) {
                                            // Hide the loading indicator
                                            loadingDiv.hide();
                            
                                            // Handle the API response here
                                            if (response && response.data) {
                                                $.each(response.data, function (index, item) {
                                                    responseDiv.append('<img class="img-w" src="' + item.url + '" alt="Generated Image ' + (index + 1) + '">');
                                                });
                                            } else {
                                                alert("Limit Cross: Please Try Again Some Time Or Refresh The Page and Try Again");
                                            }
                                        },
                                        error: function () {
                                            // Hide the loading indicator and show an error message
                                            loadingDiv.hide();
                                            alert("Error: Failed to fetch data from the API");
                                        }
                                    });
                                });
                            });
                            </script>
						</div>
					
					
				</div>
				<!-- !Image Generation Page -->
				
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

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/image-generation.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:53 GMT -->
</html>