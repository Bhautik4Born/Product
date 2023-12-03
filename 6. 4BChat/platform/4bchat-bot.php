<?php

session_start();
echo $_SESSION['logged_in'];

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


    $query = "SELECT * FROM AI_Keys";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      $license_key = $row['license_key'];
      $url = $row['url'];
  ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
  

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/ai-chat-bot.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:53 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="4Bchat AI">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>AI Chat Bot - 4Bchat AI</title>


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
  <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--<script src="js/script.js" defer></script>-->

<style>
.hiden-light {
    display: none;
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

<div class="techwave_fn_font">
	<a class="font__closer_link fn__icon_button" href="#"><img src="svg/close.svg" alt="" class="fn__svg"></a>
	<div class="font__closer"></div>
	<div class="font__dialog">
		<h3 class="title">Font Options</h3>
		<label for="font_size">Font Size</label>
		<select id="font_size">
			<option value="10">10 px</option>
			<option value="12">12 px</option>
			<option value="14">14 px</option>
			<option value="16" selected>16 px</option>
			<option value="18">18 px</option>
			<option value="20">20 px</option>
			<option value="22">22 px</option>
			<option value="24">24 px</option>
			<option value="26">26 px</option>
			<option value="28">28 px</option>
		</select>
		<a href="#" class="apply techwave_fn_button"><span>Apply</span></a>
	</div>
</div>


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
				
				<!-- AI Chat Bot Page -->
				<div class="techwave_fn_aichatbot_page fn__chatbot">
					
					<div class="chat__page">
					
						<div class="font__trigger">
							<span></span>
						</div>
						
						<div class="fn__title_holder">
							<div class="container">
								<!-- Active chat title -->
								<h1 class="title">AI Chat by 4Born Solutions</h1>
									
								<!-- !Active chat title -->
							</div>
						</div>
						
						<div class="container">
							<div class="chat__list">

								<div id="chat0" class="chat__item"></div>

								<div class="chat__item active" id="chat1">
								
                                <div id="chat-container">
                                <div class="chat-content">
                                    <div class="chat__box bot__chat pos-relative">
                                        <div class="author"><span>4B Chat</span></div>
                                        <div class="chat chat-details">
                                            <div class="typing-animation">
                                                <div class="loading" id="loading">Hello how Can i Help You <br>:- Loading...</div>
                                                <div id="response"></div>
                                            </div>
                                        </div>
                                        <span onclick="copyResponse(this)" class="material-symbols-rounded abs-copy">content_copy</span>
                                    </div>
                                </div>
                                    <!-- User and bot chat boxes will be added dynamically here -->
                                </div>



								</div>

								<div class="chat__item" id="chat2"></div>

								<div class="chat__item" id="chat3"></div>

								<div class="chat__item" id="chat4"></div>

							</div>
							
						</div>
						<div class="container">
						    <div class="chat-container"></div>
						</div>
						
					
						<div class="chat__comment">
							<div class="container pos-relative">
								<div class="fn__chat_comment">
									<div class="new__chat">
										<p>Ask it questions, engage in discussions, or simply enjoy a friendly chat.</p>
									</div>
									<textarea rows="1" class="fn__hidden_textarea" tabindex="-1"></textarea>
									<textarea rows="1" placeholder="Send a message..." id="userMessage" spellcheck="false"></textarea>
									<button onclick="sendMessage()"><img src="./img/paper-plane.png" alt="" id="send-btn" class="material-symbols-rounded"></button>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- !PAGE (all pages go inside this div) -->
			
			<?php 
			 include 'include/footer.php'
			?>
			
		</div>
		<!-- !CONTENT -->
		
		
	</div>
</div>
<!-- !MAIN WRAPPER -->

<script>
    const apiUrl = "https://4bchat.4born.info/platform/API/ContantCreator.php";

    function showLoading() {
        document.getElementById("loading").style.display = "block";
    }

    function hideLoading() {
        document.getElementById("loading").style.display = "none";
    }

    function clearInputField() {
        document.getElementById("userMessage").value = "";
    }

    function copyResponse(element) {
        const responseText = element.parentNode.querySelector(".bot-response").textContent;
        const textArea = document.createElement("textarea");
        textArea.value = responseText;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand("copy");
        document.body.removeChild(textArea);
    }

    function displayResponse(response) {
        const chatContainer = document.getElementById("chat-container");
        const botChatBox = document.createElement("div");
        botChatBox.className = "chat__box bot__chat pos-relative";
        botChatBox.innerHTML = `
            <div class="author"><span>4B Chat</span></div>
            <div class="chat chat-details">
                ${getResponseContent(response)}
                <span onclick="copyResponse(this)" class="material-symbols-rounded abs-copy">content_copy</span>
            </div>
        `;
                // <span onclick="speakResponse(this)" class="material-symbols-rounded abs-voice">record_voice_over</span>
        chatContainer.appendChild(botChatBox);
    }

    function getResponseContent(response) {
        if (response.message) {
            // Handle different types of content based on the API response
            const messageType = response.message.type;
            switch (messageType) {
                case "text":
                    return `<div class="bot-response">${response.message.content}</div>`;
                case "code":
                    return `<pre class="bot-code">${response.message.content}</pre>`;
                default:
                    return `<div class="bot-response">${response.message.content}</div>`;
            }
        }
        return "";
    }

    function sendMessage() {
        const userMessage = document.getElementById("userMessage").value;
        const chatContainer = document.getElementById("chat-container");

        if (userMessage) {
            const userChatBox = document.createElement("div");
            userChatBox.className = "chat__box your__chat";
            userChatBox.innerHTML = `
                <div class="author"><span>You</span></div>
                <div class="chat">
                    <div class="user-message">${userMessage}</div>
                </div>
            `;
            chatContainer.appendChild(userChatBox);
            clearInputField();
            showLoading();

            const xhr = new XMLHttpRequest();
            const params = "massage=" + encodeURIComponent(userMessage);
            xhr.open("POST", apiUrl, true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    hideLoading();
                    if (xhr.status === 200) {
                        const response = JSON.parse(xhr.responseText);
                        displayResponse(response);
                    } else {
                        console.error("API request failed.");
                    }
                }
            };

            xhr.send(params);
        }
    }

    // Handle sending a message when the Enter key is pressed
    document.getElementById("userMessage").addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            event.preventDefault(); // Prevent the default behavior of the Enter key (e.g., new line in a textarea)
            sendMessage();
        }
    });
</script>



<!-- Scripts -->
<script type="text/javascript" src="js/jquery8a54.js?ver=1.0.0"></script>
<script type="text/javascript" src="js/plugins8a54.js?ver=1.0.0"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
<script type="text/javascript" src="js/init8a54.js?ver=1.0.0"></script>
<!-- !Scripts -->

</body>

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/ai-chat-bot.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:54 GMT -->
</html>

<?php
}
?>