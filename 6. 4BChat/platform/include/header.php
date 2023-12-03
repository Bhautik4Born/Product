<?php
include "config.php";

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login.php');
    exit;
}

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $google_id = $_SESSION['google_id'];
    $showUsername = true;

    // Check if google_id exists
    if (!empty($google_id)) {
        $query = "SELECT name, email, profile_image, license_key FROM AI_login_google WHERE google_id = ?";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "s", $google_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (!$result) {
            die("Query failed: " . mysqli_error($con));
        }

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $user_name1 = $row['name'];
            $license_key = $row['license_key'];
            $email1 = $row['email'];
            $profile_image1 = $row['profile_image'];
        }
    } else {
        // Fetch data based on the normal user id
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
            $user_name1 = $row['username'];
            $number1 = $row['mobile_number'];
            $email1 = $row['email'];
            $profile_image2 = $row['profile_image'];
            $profile_image1 = $based . $profile_image2;
        }
    }
    $userData = mysqli_fetch_assoc($result);
}
?>

		
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="4Bchat AI">
    <meta name="keywords" content="4Bchat AI">
    <meta name="author" content="4Bchat AI">
    <link rel="icon" href="../../assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../.../../assets/images/favicon.png" type="image/x-icon" />
    <title>4B chat AI - 4Born Solutions</title>
    
    <link type="text/css" rel="stylesheet" href="../css/plugins8a54.css?ver=1.0.0" />
    <link type="text/css" rel="stylesheet" href="../css/style8a54.css?ver=1.0.0" />

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
<style>
    select#voiceSelect {
    margin-top: 30px;
}

</style>
</head>
		<!-- Moving Submenu -->
<div class="techwave_fn_fixedsub">
	<ul></ul>
</div>
<!-- !Moving Submenu -->

<!-- Preloader -->
<div class="techwave_fn_preloader enabled">
	<svg>
		<circle class="first_circle" cx="50%" cy="50%" r="110"></circle>
		<circle class="second_circle" cx="50%" cy="50%" r="110"></circle>
	</svg>
</div>
<!-- !Preloader -->
		<!-- HEADER -->
		
		<header class="techwave_fn_header">
		
			<!-- Header left: token information -->
			<div class="header__left">
				<div class="fn__token_info">
					<!-- <span class="token_summary">
						<span class="count">120</span>
						<span class="text">Tokens<br>Remain</span>
					</span> -->
					<a href="pricing.php" class="token_upgrade techwave_fn_button"><span>API Buy Now</span></a>
					<!-- <div class="token__popup">
						Resets in <span>19 hours.</span><br>
						Daily limit is <span>200 tokens</span>
					</div> -->
				</div>
			</div>
			<!-- /Header left: token information -->
			
			
			<!-- Header right: navigation bar -->
			<div class="header__right">
				<div class="fn__nav_bar">
					
					<!-- Search (bar item) -->
					<div class="bar__item bar__item_search">
						<a href="#" class="item_opener fn__tooltip" title="Search">
							<img src="svg/search.svg" alt="" class="fn__svg">
						</a>
						<div class="item_popup" data-position="right">
							<input type="text" placeholder="Search">
						</div>
					</div>
					<!-- !Search (bar item) -->
					
					<!-- Notification (bar item) -->
					<div class="bar__item bar__item_notification has_notification">
						<a href="#" class="item_opener fn__tooltip" title="Notifications">
							<img src="svg/bell.svg" alt="" class="fn__svg">
						</a>
						<div class="item_popup" data-position="right">
							<div class="ntfc_header">
								<h2 class="ntfc_title">Notifications</h2>
								<a href="notifications.php">View All</a>
							</div>
							<div class="ntfc_list">
							<?php
                                $sql = "SELECT * FROM AI_notifications ORDER BY id DESC LIMIT 5";
                                
                                // Execute the query
                                $result = mysqli_query($con, $sql);
                                
                                // Check if there are rows in the result
                                if (mysqli_num_rows($result) > 0) {
                                    echo '<ul>';
                                    // Loop through the results and display each notification
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<li>';
                                        echo '<p><a href="#">' . $row["tital"] . '</a></p>';
                                        echo '<span>' . $row["date"] . '</span>';
                                        echo '</li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    echo 'No notifications found.';
                                }
                            ?>

							</div>
						</div>
					</div>
					<!-- !Notification (bar item) -->
					
					<!-- Full Screen (bar item) -->
					<div class="bar__item bar__item_fullscreen">
						<a href="#" class="item_opener fn__tooltip" title="Full Screen">
							<img src="svg/fullscreen.svg" alt="" class="fn__svg f_screen">
							<img src="svg/smallscreen.svg" alt="" class="fn__svg s_screen">
						</a>
					</div>
				
					<!-- !Full Screen (bar item) -->
					
					<!-- Language (bar item) -->
					<!--<div class="bar__item bar__item_language">-->
					<!--	<a href="#" class="item_opener fn__tooltip" title="Language">-->
					<!--		<img src="svg/language.svg" alt="" class="fn__svg">-->
					<!--	</a>-->
					<!--	<div class="item_popup" data-position="right">-->
					<!--		<ul>-->
					<!--			<li>-->
					<!--				<span class="active">English</span>-->
					<!--			</li>-->
					<!--			<li>-->
					<!--				<a href="#">Spanish</a>-->
					<!--			</li>-->
					<!--			<li>-->
					<!--				<a href="#">French</a>-->
					<!--			</li>-->
					<!--		</ul>-->
					<!--	</div>-->
					<!--</div>-->
					<!-- !Language (bar item) -->
						<select id="voiceSelect"></select>
					<!-- Site Skin (bar item) -->
					<!--<div class="bar__item bar__item_skin">-->
					<!--	<a href="#" class="item_opener fn__tooltip" title="Dark/Light">-->
					<!--		<img src="svg/sun.svg" alt="" class="fn__svg light_mode">-->
					<!--		<img src="svg/moon.svg" alt="" class="fn__svg dark_mode">-->
					<!--	</a>-->
					<!--</div>-->
					<!-- !Site Skin (bar item) -->
					
					<!-- User (bar item) -->
					<div class="bar__item bar__item_user">
						<a href="#" class="user_opener fn__tooltip" title="User Profile">
							<img src="<?php echo $profile_image1;?>" alt="">
						</a>
						<div class="item_popup" data-position="right">
							<div class="user_profile">
								<div class="user_img">
									<img src="<?php echo $profile_image1;?>" alt="">
								</div>
								<div class="user_info">
									<h2 class="user_name"><?php echo $user_name1;?></h2>
									<p><a href="mailto:<?php echo $email1;?>" class="user_email"><?php echo $email1;?></a></p>
								</div>
							</div>
							<div class="user_nav">
								<ul>
									<li>
										<a href="user-profile.php">
											<span class="icon"><img src="svg/person.svg" alt="" class="fn__svg"></span>
											<span class="text">Profile</span>
										</a>
									</li>
									<!--<li>-->
									<!--	<a href="user-settings.php">-->
									<!--		<span class="icon"><img src="svg/setting.svg" alt="" class="fn__svg"></span>-->
									<!--		<span class="text">Settings</span>-->
									<!--	</a>-->
									<!--</li>-->
									<!--<li>-->
									<!--	<a href="user-billing.php">-->
									<!--		<span class="icon"><img src="svg/billing.svg" alt="" class="fn__svg"></span>-->
									<!--		<span class="text">Billing</span>-->
									<!--	</a>-->
									<!--</li>-->
									<li>
										<a href="sign-out.php">
											<span class="icon"><img src="svg/logout.svg" alt="" class="fn__svg"></span>
											<span class="text">Log Out</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- !User (bar item) -->
					
					
				</div>
			</div>
			<!-- !Header right: navigation bar -->
			
		</header>
		<!-- !HEADER -->
		
		
		<!-- LEFT PANEL -->
		<div class="techwave_fn_leftpanel">
			
			<div class="mobile_extra_closer"></div>
			
			<!-- logo (left panel) -->
			<div class="leftpanel_logo">
				<a href="index.php" class="fn_logo">
					<span class="full_logo">
						 <img src="img/logo-desktop-full.png" alt="" class="desktop_logo">
						<img src="img/logo-retina-full.png" alt="" class="retina_logo">
						<!--<h3 class="born-color"> 4Bchat AI</h3>-->
						<!-- <h2 class="born-color" class="retina_logo"> 4Bchat AI</h2> -->
					</span>
					 <span class="short_logo">
						<img src="img/logo-desktop-mini.png" alt="" class="desktop_logo">
						<img src="img/logo-retina-mini.png" alt="" class="retina_logo">
					</span>
				</a>
				<a href="#" class="fn__closer fn__icon_button desktop_closer">
					<img src="svg/arrow.svg" alt="" class="fn__svg">
				</a>
				<a href="#" class="fn__closer fn__icon_button mobile_closer">
					<img src="svg/arrow.svg" alt="" class="fn__svg">
				</a>
			</div>
			<!-- !logo (left panel) -->
			
			<!-- content (left panel) -->
			<div class="leftpanel_content">
			
				<!-- #1 navigation group -->
				<div class="nav_group">
					<h2 class="group__title">Start Here</h2>
					<ul class="group__list">
						<li>
							<a href="index.php" class="fn__tooltip active menu__item" data-position="right" title="Home">
								<span class="icon"><img src="svg/home.svg" alt="" class="fn__svg"></span>
								<span class="text">Home</span>
							</a>
						</li>
						<!-- <li>
							<a href="community-feed.php" class="fn__tooltip menu__item" data-position="right" title="Community Feed">
								<span class="icon"><img src="svg/community.svg" alt="" class="fn__svg"></span>
								<span class="text">Community Feed</span>
							</a>
						</li>
						<li>
							<a href="personal-feed.php" class="fn__tooltip menu__item" data-position="right" title="Personal Feed">
								<span class="icon"><img src="svg/person.svg" alt="" class="fn__svg"></span>
								<span class="text">Personal Feed<span class="count">48</span></span>
							</a>
						</li> -->
						<li>
							<a href="models.php" class="fn__tooltip menu__item" data-position="right" title="Finetuned Models">
								<span class="icon"><img src="svg/cube.svg" alt="" class="fn__svg"></span>
								<span class="text">Finetuned Models</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- !#1 navigation group -->
			
				<!-- #2 navigation group -->
				<div class="nav_group">
					<h2 class="group__title">User Tools</h2>
					<ul class="group__list">
						<!--<li>-->
						<!--	<a href="4bchat-bot.php" class="fn__tooltip menu__item" data-position="right" title="AI Chat Bot">-->
						<!--		<span class="icon"><img src="svg/chat.svg" alt="" class="fn__svg"></span>-->
						<!--		<span class="text">4B AI Chat</span>-->
						<!--	</a>-->
						<!--</li>-->
						<li>
							<a href="ai-chat-bot.php" class="fn__tooltip menu__item" data-position="right" title="AI Chat Bot">
								<span class="icon"><img src="svg/chat.svg" alt="" class="fn__svg"></span>
								<span class="text">Text summariz</span>
							</a>
						</li>
						<li>
							<a href="image-generation.php" class="fn__tooltip menu__item" data-position="right" title="Image Generation">
								<span class="icon"><img src="svg/image.svg" alt="" class="fn__svg"></span>
								<span class="text">Image Generation</span>
							</a>
						</li>
						<!--<li>-->
						<!--	<a href="speech-text.php" class="fn__tooltip menu__item" data-position="right" title="Text To Speech">-->
						<!--		<span class="icon"><img src="svg/image.svg" alt="" class="fn__svg"></span>-->
						<!--		<span class="text">Speech To Text</span>-->
						<!--	</a>-->
						<!--</li>-->
						<!--<li>-->
						<!--	<a href="text-speech.php" class="fn__tooltip menu__item" data-position="right" title="Speech TO Text">-->
						<!--		<span class="icon"><img src="svg/image.svg" alt="" class="fn__svg"></span>-->
						<!--		<span class="text">text to Speech</span>-->
						<!--	</a>-->
						<!--</li>-->
					</ul>
				</div>
				<!-- !#2 navigation group -->
			
				<!-- #3 navigation group -->
				<div class="nav_group">
					<h2 class="group__title">Support</h2>
					<ul class="group__list">
						<li>
							<a href="pricing.php" class="fn__tooltip menu__item" data-position="right" title="Pricing">
								<span class="icon"><img src="svg/dollar.svg" alt="" class="fn__svg"></span>
								<span class="text">Pricing</span>
							</a>
						</li>
						<li class="menu-item-has-children">
							<a href="video-generation.php" class="fn__tooltip menu__item" title="FAQ &amp; Help" data-position="right">
								<span class="icon"><img src="svg/question.svg" alt="" class="fn__svg"></span>
								<span class="text">FAQ &amp; Help</span>
								<span class="trigger"><img src="svg/arrow.svg" alt="" class="fn__svg"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="documentation.php"><span class="text">Documentation</span></a>
								</li>
								<li>
									<a href="faq.php"><span class="text">FAQ</span></a>
								</li>
								<!-- <li>
									<a href="changelog.php"><span class="text">Changelog<span class="fn__sup">(4.1.2)</span></span></a>
								</li> -->
								<li>
									<a href="contact.php"><span class="text">Contact Us</span></a>
								</li>
								<!-- <li>
									<a href="index-2.php"><span class="text">Home #2</span></a>
								</li> -->
							</ul>
						</li>
						<li>
							<a href="sign-out.php" class="fn__tooltip menu__item" data-position="right" title="Log Out">
								<span class="icon"><img src="svg/logout.svg" alt="" class="fn__svg"></span>
								<span class="text">Log Out</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- !#3 navigation group -->
				
				
			</div>
			<!-- !content (left panel) -->
			
		</div>
		<!-- !LEFT PANEL -->
		
		
<script>
    // A simple IIFE function. 
    (function () {
        "use strict"; // For the sake of practice.

        if (typeof speechSynthesis === 'undefined')
            return;

        // Some config stuffs... 
        var voiceSelect = document.getElementById("voiceSelect");
        var myPhrase = ' ';
        var voices = [];

        // This is essentially similar to jQuery's $.ready.
        var ready = function (callback) {
            var d = document, s = d.readyState;

            // DOMContentLoaded was fired
            if (s == "complete" || s == "loaded" || s == "interactive") {
                callback();
            } else {
                if (d.addEventListener) {
                    d.addEventListener("DOMContentLoaded", callback, false);
                } else {
                    d.attachEvent("onDOMContentLoaded", callback);
                }
            }
        };

        // This is a function to display all possible voice options. 
        function populateVoiceList() {
            voices = speechSynthesis.getVoices();

            for (var i = 0; i < voices.length; i++) {
                var option = document.createElement('option');
                option.textContent = voices[i].name + ' (' + voices[i].lang + ')';
                option.textContent += voices[i].default ? ' -- DEFAULT' : '';
                option.setAttribute('data-lang', voices[i].lang);
                option.setAttribute('data-name', voices[i].name);
                document.getElementById("voiceSelect").appendChild(option);
            }
        }

        // This is the handler for when the select tag is changed. 
        function handler() {
            var utterThis = new SpeechSynthesisUtterance(myPhrase);
            var selectedOption = voiceSelect.selectedOptions[0].getAttribute('data-name');

            for (var i = 0; i < voices.length; i++) {
                if (voices[i].name === selectedOption) {
                    utterThis.voice = voices[i];
                }
            }

            speechSynthesis.speak(utterThis);
        };

        // This is your code to get the selected text.
        function getSelectionText() {
            var text = "";
            if (window.getSelection) {
                text = window.getSelection().toString();
                // for Internet Explorer 8 and below. For Blogger, you should use &amp;&amp; instead of &&.
            } else if (document.selection && document.selection.type != "Control") {
                text = document.selection.createRange().text;
            }
            return text;
        }

        // This is the on mouse up event, no need for jQuery to do this. 
        document.onmouseup = function (e) {
            setTimeout(function () {
                speechSynthesis.cancel();
                myPhrase = getSelectionText();
                handler();
            }, 1);
        };

        // Some place for the application to start. 
        function start() {
            populateVoiceList();
            if (speechSynthesis.onvoiceschanged !== undefined)
                speechSynthesis.onvoiceschanged = populateVoiceList;

            voiceSelect.onchange = handler;
            setTimeout(handler, 75);
        }

        // Run the start function. 
        ready(start);
    })();
</script>
		
		<?php
    // }
		
		?>