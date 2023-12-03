<?php
session_start();
include "include/config.php";


if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $showUsername = true;

    $query = "SELECT * FROM users WHERE id = ?";
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
        $name1 = $row['name'];
        $surname1 = $row['surname'];
        $user_name1 = $row['username'];
        $number1 = $row['mobile_number'];
        $email1 = $row['email'];
        $password1 = $row['password'];
        $country1 = $row['country'];
        $state1 = $row['state'];
        $license_key1 = $row['license_key'];
        $domain1 = $row['domain'];
        $date1 = $row['date'];
        
        // $based = 'https://seamarineservice.in/4born%20Market/';
        $profile_image2 = $row['profile_image'];
        $profile_image1 = $based . '/' .$profile_image2;
    }

    $userData = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt);

    if (isset($_POST['update_profile'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $profile_image = $_POST['profile_image'];

        // Check if any field is left blank, username is empty, or password length is less than 8 characters
        if (empty($name) || empty($surname) || empty($user_name) || empty($number) || empty($email) || empty($country) || empty($state) || empty($password) || empty($user_name)) {
            echo "<script>alert('All fields are required, and username must be provided, and password must be at least 8 characters.');window.location.href = 'profile.php';</script>";
        } elseif (!ctype_alnum(str_replace(array("@", "-", "_"), "", $user_name))) {
            $username_err = "Username can only contain letters, numbers and symbols like '@', '_', or '-'. Not used Blank Space";
        } elseif (strlen($password) < 8) {
            echo "<script>alert('Password must contain at least 8 or more characters.');window.location.href = 'profile.php';</script>";
        } else {
            $emailCheckQuery = "SELECT id FROM users WHERE email = ? AND id != ?";
            $stmt2 = mysqli_prepare($con, $emailCheckQuery);
            mysqli_stmt_bind_param($stmt2, "si", $email, $userId1);
            mysqli_stmt_execute($stmt2);
            $emailResult = mysqli_stmt_get_result($stmt2);

            $numberCheckQuery = "SELECT id FROM users WHERE mobile_number = ? AND id != ?";
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
                            $query1 = "UPDATE users SET name = ?, surname = ?, username = ?, password = ?, mobile_number = ?, email = ?, country = ?, state = ?, profile_image = ? WHERE id = ?";
                            $stmt1 = mysqli_prepare($con, $query1);
                            mysqli_stmt_bind_param($stmt1, "sssssssssi", $name, $surname, $user_name, $password, $number, $email, $country, $state, $profileImage, $userId1);

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
                    $query1 = "UPDATE users SET name = ?, surname = ?, username = ?, password = ?, mobile_number = ?, email = ?, country = ?, state = ? WHERE id = ?";
                    $stmt1 = mysqli_prepare($con, $query1);
                    mysqli_stmt_bind_param($stmt1, "ssssssssi", $name, $surname, $user_name, $password, $number, $email, $country, $state, $userId1);

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


<head>
<style>
    body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}


.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
.row.back-profile {
    background: #1d1d1d;
}
.text-right {
    color: #fd961a;
}
.form-control[disabled], fieldset[disabled] .form-control {
    background: #222;
    cursor: not-allowed;
}
h3.expire-msg {
    margin-top: 1rem;
    color: gray;
}
.expire-msg-red{
    margin-top: 1rem;
    color:red;
}
button.profile-button{
        background: #fd961a;
    color: #FFF;
    border: 1px solid #fd961a;
    font-size: 14px;
}
a.btn.btn-primary{
        background: #fd961a;
    color: #FFF;
    border: 1px solid #fd961a;
    font-size: 14px;
}
button.profile-button:hover {
    color: #fff;
    background-color: #fd961a;
     border-color: #fd961a; 
}
.btn-check:focus+.btn-primary, .btn-primary:focus {
    color: #fff;
    background-color: #0b5ed7;
    border-color: #0a58ca;
    box-shadow: 0 0 0 0.25rem rgba(49,132,253,.0);
}
a.back-btn{
    background: transparent;
    color: #999;
    border: 1px solid #999;
    font-size: 14px;
}
.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1.5rem !important;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skins/orange.css">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

	
	<!--bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>
    </head>
<body>
<div class="px-4 bg-white m-4">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row back-profile py-4">
            <div class="col-md-3 col-12 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <label for="productImage">
                    <!--<img src="./images/add-product.svg" id="productImagePreview" alt="Product Image" class="img-fluid" name="profile_image" value="<?php echo $profile_image1; ?>">-->
                    <img src="<?php echo $profile_image1; ?>" id="productImagePreview" alt="Product Image" class="img-fluid rounded-circle mt-5" name="profile_image" value="<?php echo $profile_image1; ?>">
                </label>
                <input type="file" class="form-control" id="productImage" name="profile_image" style="display: none;" onchange="previewProductImage(event)" value="<?php echo $profile_image1; ?>">
                    <!--<img class="rounded-circle mt-5" id="userImagePreview" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">-->
                    <span class="font-weight-bold fs-3 mt-4"   style="color:#fd961a">Hello, <?php echo $user_name1; ?><br><span class="text-white"><?php echo $email1; ?></span><span> </span></span>
                </div>
            </div>
    
            <script>
                function previewUserImage(event) {
                    var userImagePreview = document.getElementById('userImagePreview');
                    userImagePreview.src = URL.createObjectURL(event.target.files[0]);
                }
            
                function previewProductImage(event) {
                    var productImagePreview = document.getElementById('productImagePreview');
                    productImagePreview.src = URL.createObjectURL(event.target.files[0]);
                }
            </script>
    
    
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="mb-4">
                        <h3 class="text-center text-white">Profile Settings</h3>
                    </div>
                    <!--<form action="" method="POST" enctype="multipart/form-data">-->
                        <div class="row py-2">
                            <div class="col-md-6"><label class="labels fs-5"  style="color:#fd961a">Name</label><input type="text" class="form-control" placeholder="first name" value="<?php echo $name1; ?>" name="name"></div>
                            <div class="col-md-6"><label class="labels fs-5"  style="color:#fd961a">Surname</label><input type="text" class="form-control" value="<?php echo $surname1; ?>" placeholder="surname" name="surname"></div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6"><label class="labels fs-5"  style="color:#fd961a">User Name</label><input type="text" class="form-control" placeholder="first name" value="<?php echo $user_name1; ?>" name="user_name"></div>
                            <div class="col-md-6"><label class="labels fs-5"  style="color:#fd961a">Password</label><input type="password" class="form-control" value="<?php echo $password1; ?>" placeholder="Password" name="password"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 py-2"><label class="labels fs-5"  style="color:#fd961a">Mobile Number</label><input type="number" class="form-control" placeholder="enter phone number" value="<?php echo $number1; ?>" name="number"></div>
                            <div class="col-md-12 py-2"><label class="labels fs-5"  style="color:#fd961a">Email ID</label><input type="email" class="form-control" placeholder="enter email id" value="<?php echo $email1; ?>" name="email"></div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6"><label class="labels fs-5"  style="color:#fd961a">Country</label><input type="text" class="form-control" placeholder="country" value="<?php echo $country1; ?>" name="country"></div>
                            <div class="col-md-6"><label class="labels fs-5"  style="color:#fd961a">State/Region</label><input type="text" class="form-control" value="<?php echo $state1; ?>" placeholder="state" name="state"></div>
                        </div>
                        <div class="mt-5 row align-items-center">
                            <div class="col-md-6 col-12">
                            <a class="btn btn-warning back-btn w-100" href="index.php">BACK</a>
                            </div>
                            <div class="col-md-6 col-12">
                            <button class="btn btn-primary profile-button w-100" type="submit" name="update_profile">Update Profile</button>
                            </div>
                        </div>
                    <!--</form>-->
                </div>
                </div>
            <div class="col-md-4">
                <div class="p-3 pt-5">
                        <h3 class="text-center text-white mb-4">Your API Detail</h3>
                    <div class="col-md-12 py-2 px-0"><label class="labels fs-5"  style="color:#fd961a">Your License Key</label><input type="text" class="form-control text-white" placeholder="experience" value="<?php echo $license_key1; ?>" disabled style="background: #222;"></div> <br>
                    <div class="col-md-12 py-2 px-0"><label class="labels fs-5"  style="color:#fd961a">Your Domain Name</label><input type="text" class="form-control text-white" placeholder="additional details" value="<?php echo $domain1; ?>" disabled style="background: #222;"></div>
                    <div class="col-md-12"><label class="labels" > </label><input type="hidden" class="btn-primary form-control" placeholder="additional details" value="<?php echo $date1; ?>" disabled style="background: #222;"></div>
                </div>
                    
    
                <?php
                $date2 = $date1;
                $date1_timestamp = strtotime($date2);
                $current_timestamp = time();
                $two_days_future = strtotime("+0 days");
                echo '<div class="px-3 pb-3">';
                if ($date1_timestamp > $two_days_future) {
                    echo '<a class="btn btn-success" href="demo_api.php" ping="https://4admin.4born.info/Stock-Market/api/test.php" id="copyButton">Copy API Link</a>';
                    echo '<h3 class="expire-msg mt-0">You Can Used a is This License in 15 Days Enjoye it.</h3>';
                } else {
                    echo '<h3 class="expire-msg-red">Your License is Expire Now</h3>';
                    echo '<a class="btn btn-primary mt-3" href="api_list.php">Buy Now</a>';
                    
                    // 7 Days Offer
                    // echo '<a class="btn btn-success" href="demo_api.php" ping="https://4admin.4born.info/Stock-Market/api/test.php" id="copyButton">Copy API Link</a>';
                    // echo '<h3 class="expire-msg mt-0">You Can Used a is This License in 2 Days Enjoye it.</h3>';
                }
                echo '</div>';
                ?>
    
            </div>
    </div>
    </form>
</div>
</div>
</body>    
</div>

    <script>
        const copyButton = document.getElementById('copyButton');
        copyButton.addEventListener('click', function() {
            const textToCopy = this.getAttribute('ping');
            const textArea = document.createElement('textarea');
            textArea.value = textToCopy;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
            alert('API Link copied to clipboard. And You Can Refrence a This .');
        });
    </script>