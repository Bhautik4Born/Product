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
        $number1 = $row['mobile_number'];
        $email1 = $row['email'];
        $password1 = $row['password'];
        
        // $based = 'https://seamarineservice.in/4born%20Market/';
        $profile_image2 = $row['profile_image'];
        $profile_image1 = $based . '/' .$profile_image2;
    }

    $userData = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt);

    if (isset($_POST['update_profile'])) {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $profile_image = $_POST['profile_image'];

        // Check if any field is left blank, username is empty, or password length is less than 8 characters
        if ( empty($user_name) || empty($number) || empty($email) || empty($password)) {
            echo "<script>alert('All fields are required, and username must be provided, and password must be at least 8 characters.');window.location.href = 'profile.php';</script>";
        } elseif (!ctype_alnum(str_replace(array("@", "-", "_"), "", $user_name))) {
            $username_err = "Username can only contain letters, numbers and symbols like '@', '_', or '-'. Not used Blank Space";
        } elseif (strlen($password) < 8) {
            echo "<script>alert('Password must contain at least 8 or more characters.');window.location.href = 'profile.php';</script>";
        } else {
            $emailCheckQuery = "SELECT id FROM AI_register WHERE email = ? AND id != ?";
            $stmt2 = mysqli_prepare($con, $emailCheckQuery);
            mysqli_stmt_bind_param($stmt2, "si", $email, $userId1);
            mysqli_stmt_execute($stmt2);
            $emailResult = mysqli_stmt_get_result($stmt2);

            $numberCheckQuery = "SELECT id FROM AI_register WHERE mobile_number = ? AND id != ?";
            $stmt3 = mysqli_prepare($con, $numberCheckQuery);
            mysqli_stmt_bind_param($stmt3, "si", $number, $userId1);
            mysqli_stmt_execute($stmt3);
            $numberResult = mysqli_stmt_get_result($stmt3);

            if (mysqli_num_rows($emailResult) > 0 || mysqli_num_rows($numberResult) > 0) {
                echo "<script>alert('Email or mobile number already exists.');window.location.href = 'profile.php';</script>";
            } else {
                // Handle profile image upload
                if ($_FILES['profile_image']['error'] === 0) {
                    $targetDir = "include/image/";
                    $profileImage = $targetDir . basename($_FILES['profile_image']['name']);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($profileImage, PATHINFO_EXTENSION));

                    // Check if the uploaded file is an image
                    $check = getimagesize($_FILES['profile_image']['tmp_name']);
                    if ($check === false) {
                        echo "<script>alert('File is not an image.');window.location.href = 'profile.php';</script>";
                        $uploadOk = 0;
                    }

                    // Check file size (adjust this as needed)
                    if ($_FILES['profile_image']['size'] > 500000) {
                        echo "<script>alert('Sorry, your file is too large.');window.location.href = 'profile.php';</script>";
                        $uploadOk = 0;
                    }

                    // Allow certain file formats (you can add more formats as needed)
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');window.location.href = 'profile.php';</script>";
                        $uploadOk = 0;
                    }

                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "<script>alert('Sorry, your file was not uploaded.');window.location.href = 'profile.php';</script>";
                    } else {
                        // If everything is ok, move the uploaded file to the target directory
                        if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $profileImage)) {
                            // Update the profile image path in the database
                            $query1 = "UPDATE AI_register SET username = ?, password = ?, mobile_number = ?, email = ?, profile_image = ? WHERE id = ?";
                            $stmt1 = mysqli_prepare($con, $query1);
                            mysqli_stmt_bind_param($stmt1, "ssssi", $user_name, $password, $number, $email, $profileImage, $userId1);

                            if (mysqli_stmt_execute($stmt1)) {
                                echo "<script>alert('Profile updated successfully.');window.location.href = 'profile.php';</script>";
                            } else {
                                echo "Error updating profile: " . mysqli_error($con);
                            }
                            mysqli_stmt_close($stmt1);
                        } else {
                            echo "<script>alert('Sorry, there was an error uploading your file.');window.location.href = 'profile.php';</script>";
                        }
                    }
                } else {
                    // No profile image was uploaded, update the user's information without changing the image path
                    $query1 = "UPDATE AI_register SET username = ?, password = ?, mobile_number = ?, email = ? WHERE id = ?";
                    $stmt1 = mysqli_prepare($con, $query1);
                    mysqli_stmt_bind_param($stmt1, "ssssi", $user_name, $password, $number, $email, $userId1);

                    if (mysqli_stmt_execute($stmt1)) {
                        echo "<script>alert('Profile updated successfully.');window.location.href = 'profile.php';</script>";
                    } else {
                        echo "Error updating profile: " . mysqli_error($con);
                    }
                    mysqli_stmt_close($stmt1);
                }
            }
            mysqli_stmt_close($stmt2);
            mysqli_stmt_close($stmt3);
        }
    }
} else {
    $showUsername = false;
}
mysqli_close($con);
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
  

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/user-settings.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:44:59 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="4Bchat AI">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>User Settings - 4Bchat AI</title>


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
				
				<!-- User Settings Page -->
				<div class="techwave_fn_user_settings_page">
					<!-- Page Title -->
					<div class="techwave_fn_pagetitle">
						<h2 class="title">Settings</h2>
					</div>
					<!-- !Page Title -->
				
					<div class="container small">
						<div class="techwave_fn_user_settings">
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="user__settings">
									<div class="settings_left">
									
										<!-- Upload Shortcode -->
										<label class="fn__upload">
											<span class="upload_content">
												<img src="svg/upload.svg" alt="" class="fn__svg">
												<span class="title">Drag & Drop a Image</span>
												<span class="fn__lined_text">
													<span class="line"></span>
													<span class="text">Or</span>
													<span class="line"></span>
												</span>
												<span class="title">Browse</span>
												<span class="desc">Supports JPG, JPEG, and PNG</span>
											</span>
											<span class="upload_preview">
												<a href="#" class="fn__closer fn__icon_button">
													<img src="svg/close.svg" alt="" class="fn__svg">
												</a>
												<img src="#" alt="" class="preview_img" name="profile_image" value="<?php echo $profile_image1; ?>">
											</span>
											
											<input type="file" accept="image/*">
										</label>
										<!-- !Upload Shortcode -->
									
									</div>

									<div class="settings_right">
										<div class="item">
											<label class="input_label" for="username">Username</label>
											<div class="input_item">
												<span class="email">@</span>
												<input class="input" type="text" id="username" value="<?php echo $user_name1; ?>" name="user_name">
											</div>
										</div>
										<div class="item">
											<label class="input_label" for="email">Email Address</label>
											<div class="input_item">
												<input class="input" type="text" id="email" value="<?php echo $email1; ?>" name="email">
											</div>
										</div>
										<div class="item">
											<label class="input_label" for="password">Password</label>
											<div class="input_item">
												<input class="input" type="password" id="password" value="<?php echo $password1; ?>" placeholder="Password" name="password">
											</div>
										</div>
										<div class="item">
											<label class="fn__checkbox">
												<input type="checkbox">I approve all changes
												<span class="checkmark"></span>
												<img src="svg/check.svg" alt="" class="fn__svg">
											</label>
										</div>
										<div class="item">
											<label class="fn__submit">
												<input type="submit" value="Save Changes">
											</label>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
				<!-- !User Settings Page -->
				
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

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/user-settings.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:01 GMT -->
</html>