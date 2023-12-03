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
								<h1 class="title">Chat Bot Definition</h1>
									
								<!-- !Active chat title -->
							</div>
						</div>
						
						<div class="container">
							<div class="chat__list">

								<div id="chat0" class="chat__item"></div>

								<div class="chat__item active" id="chat1">
									<div class="chat__box your__chat">
										<div class="author"><span>You</span></div>
										<div class="chat">
											<p>What is a chat 4B Chat?</p>
										</div>
									</div>
									<div class="chat__box bot__chat">
										<div class="author"><span>4B Chat</span></div>
										<div class="chat">
											<p>At the most basic level, a chatbot is a computer program that simulates and processes human conversation (either written or spoken), allowing humans to interact with digital devices as if they were communicating with a real person. Chatbots can be as simple as rudimentary programs that answer a simple query with a single-line response, or as sophisticated as digital assistants that learn and evolve to deliver increasing levels of personalization as they gather and process information.</p>
										</div>
									</div>
									<div class="chat__box your__chat">
										<div class="author"><span>You</span></div>
										<div class="chat">
											<p>How do chatbots work?</p>
										</div>
									</div>
									<div class="chat__box bot__chat">
										<div class="author"><span>4B Chat</span></div>
										<div class="chat">
											<p>Chatbots boost operational efficiency and bring cost savings to businesses while offering convenience and added services to internal employees and external customers. They allow companies to easily resolve many types of customer queries and issues while reducing the need for human interaction.</p>
										</div>
									</div>
								</div>

								<div class="chat__item" id="chat2"></div>

								<div class="chat__item" id="chat3"></div>

								<div class="chat__item" id="chat4"></div>

							</div>
							
						</div>
						<div class="container">
						    
                            <div class=" chat__box bot__chat pos-relative">
                                <div class="author"><span>4B Chat</span></div>
        						
        					    <div class="chat chat-details">
                                    <div id="result"></div>
                                    <p>Loading...</p>
                                </div>
            				    </div>
        					    
				            </div>
						<!--</div>-->

						<div class="chat__comment">
							<div class="container pos-relative">
								<div class="fn__chat_comment">
									<div class="new__chat">
										<p>Ask it questions, engage in discussions, or simply enjoy a friendly chat.</p>
									</div>
									<textarea rows="1" class="fn__hidden_textarea" tabindex="-1"></textarea>
									<textarea rows="1" placeholder="Send a message..." id="userInput" spellcheck="false"></textarea>
									<button><img src="./img/paper-plane.png" alt="" onclick="sendRequest()" class="material-symbols-rounded"></button>
								</div>
								<div class="typing-controls pos-delete">
                                      <span id="theme-btn" class="material-symbols-rounded hiden-light"></span>
                                      <span id="delete-btn" class="material-symbols-rounded">delete</span>
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
        function sendRequest() {
            const userInput = document.getElementById('userInput').value;
            const data = {
                "User_message": userInput
            };

            fetch('https://zerrins.mechodalgroup.xyz/search', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(responseData => {
                displayResult(responseData);
            })
            .catch(error => {
                console.error('Error:', error);
                displayError();
            });
        }

        function displayResult(responseData) {
            const resultDiv = document.getElementById('result');
            resultDiv.innerHTML = ''; // Clear previous results

            if (responseData.status === 'success') {
                const message = responseData.message;
                const data = responseData.data;

                const messageElement = document.createElement('p');
                messageElement.textContent = message;
                resultDiv.appendChild(messageElement);

                const foundInfoElement = document.createElement('p');
                foundInfoElement.textContent = data['I found some information related to your query:'];
                resultDiv.appendChild(foundInfoElement);

                const topResult = data.topResult;
                const topResultTitle = topResult.title;
                const topResultLink = topResult.link;

                const topResultElement = document.createElement('p');
                topResultElement.innerHTML = `<a href="${topResultLink}" target="_blank">${topResultTitle}</a>`;
                resultDiv.appendChild(topResultElement);

                // Display related topics
                const relatedTopics = data.relatedTopics;
                const relatedTopicsElement = document.createElement('ul');
                relatedTopics.forEach(topic => {
                    const listItem = document.createElement('li');
                    listItem.textContent = `${topic.title}: ${topic.content}`;
                    relatedTopicsElement.appendChild(listItem);
                });
                resultDiv.appendChild(relatedTopicsElement);

                // Display additional URLs
                const additionalURLs = data.additionalURLs;
                const additionalUrlsElement = document.createElement('div');
                additionalUrlsElement.innerHTML = '<p>Additional URLs:</p>';
                additionalURLs.forEach(url => {
                    const link = document.createElement('a');
                    link.href = url;
                    link.textContent = url;
                    link.setAttribute('target', '_blank');
                    additionalUrlsElement.appendChild(link);
                    additionalUrlsElement.appendChild(document.createElement('br'));
                });
                resultDiv.appendChild(additionalUrlsElement);
            } else if (responseData.status === 'Fail') {
                const message = responseData.message;
                const errorElement = document.createElement('p');
                errorElement.textContent = message;
                resultDiv.appendChild(errorElement);
            }
        }

        function displayError() {
            const resultDiv = document.getElementById('result');
            resultDiv.innerHTML = ''; // Clear previous results

            const errorElement = document.createElement('p');
            errorElement.textContent = 'An error occurred. Please try again later.';
            resultDiv.appendChild(errorElement);
        }
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