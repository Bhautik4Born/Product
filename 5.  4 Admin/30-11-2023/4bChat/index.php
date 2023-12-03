<?php
session_start();
include "../include/config.php";
include "../include/header.php";

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='../login.php';" . "</script>";
  exit;
}
?>

<!doctype html>
<html lang="en" class="semi-dark">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://4born.info/assets/img/images/4Born_Solution.png" type="image/png" />
  <!--plugins-->
  <link href="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <link href="../assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  

  <!-- loader-->
	<link href="../assets/css/pace.min.css" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="../assets/css/dark-theme.css" rel="stylesheet" />
  <link href="../assets/css/light-theme.css" rel="stylesheet" />
  <link href="../assets/css/semi-dark.css" rel="stylesheet" />
  <link href="../assets/css/header-colors.css" rel="stylesheet" />

  <title>4Born Admin</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">


       <!--start content-->
          <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3 border-0">Dashboard For 4bAI Chat</div>
              <!-- <div class="ms-auto">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Settings</button>
                  <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                  </div>
                </div>
              </div> -->
            </div>
            <!--end breadcrumb-->
              
             <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                 <div class="col">
                  <div class="card rounded-4">
                    <div class="card-body">
                        <a href="user.php">
                      <div class="d-flex align-items-center justify-content-between">
                          <?php
                            function countUsers($con) {
                              $query = "SELECT COUNT(id) as total_users FROM AI_register";
                              $result = mysqli_query($con, $query);
                            
                              if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                $totalUsers = $row['total_users'];
                                return $totalUsers;
                              } else {
                                return 0;
                              }
                            }
                            
                            $totalUsers = countUsers($con);
                            ?>
                        <div class="">
                          <p class="mb-0 fs-6">Total Users Register</p>
                        </div>
                        <div class="">
                          
                        <div class="">
                          <h4 class="mb-0"><?php echo $totalUsers; ?></h4>
                        </div>
                        </div>
                      </div>
                      </a>
                    </div>
                  </div>
                 </div>
                 <div class="col">
                  <div class="card rounded-4">
                      <a href="google_login.php">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                          <?php
                            function countLanguages($con) {
                              $query = "SELECT COUNT(id) as payment FROM AI_login_google";
                              $result = mysqli_query($con, $query);
                            
                              if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                $totalLanguage = $row['payment'];
                                return $totalLanguage;
                              } else {
                                return 0;
                              }
                            }
                            
                            $totalLanguage = countLanguages($con);
                            ?>
                                    
                        <div class="">
                          <p class="mb-0 fs-6">Login With Google</p>
                        </div>
                        <div class="">
                          
                        <div class="">
                          <h4 class="mb-0"><?php echo $totalLanguage; ?></h4>
                        </div>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                 </div>
                 <div class="col">
                  <div class="card rounded-4">
                      <a href="keys.php">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                          <?php
                            function countCategory($con) {
                              $query = "SELECT COUNT(id) as license FROM AI_Keys";
                              $result = mysqli_query($con, $query);
                            
                              if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                $totalCategory = $row['license'];
                                return $totalCategory;
                              } else {
                                return 0;
                              }
                            }
                            
                            $totalCategory = countCategory($con);
                            ?>
                                    
                        <div class="">
                          <p class="mb-0 fs-6">AI Keys ( Open AI )</p>
                        </div>
                        <div class="">
                          
                        <div class="">
                          <h4 class="mb-0"><?php echo $totalCategory; ?></h4>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </a>
                 </div>
                 <div class="col">
                  <div class="card rounded-4">
                      <a href="notification.php">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                          <?php
                            function countStock($con) {
                              $query = "SELECT COUNT(id) as stock FROM AI_notifications";
                              $result = mysqli_query($con, $query);
                            
                              if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                $totalStock = $row['stock'];
                                return $totalStock;
                              } else {
                                return 0;
                              }
                            }
                            
                            $totalStock = countStock($con);
                            ?>
                                    
                        <div class="">
                          <p class="mb-0 fs-6">Total Notifications</p>
                        </div>
                        <div class="">
                          
                        <div class="">
                          <h4 class="mb-0"><?php echo $totalStock; ?></h4>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </a>
                 </div>
                 <div class="col">
                  <div class="card rounded-4">
                      <a href="contact.php">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                          <?php
                            function countProductStock($con) {
                              $query = "SELECT COUNT(id) as stock FROM AI_contact";
                              $result = mysqli_query($con, $query);
                            
                              if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                $totalStock = $row['stock'];
                                return $totalStock;
                              } else {
                                return 0;
                              }
                            }
                            
                            $totalStock = countProductStock($con);
                            ?>
                                    
                        <div class="">
                          <p class="mb-0 fs-6">Contact</p>
                        </div>
                        <div class="">
                          
                        <div class="">
                          <h4 class="mb-0"><?php echo $totalStock; ?></h4>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </a>
                 </div>
                  <div class="col">
                  <div class="card rounded-4">
                      <a href="#">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                          <?php
                            function countcoupon($con) {
                              $query = "SELECT COUNT(id) as coupon FROM AI_subscribe_email";
                              $result = mysqli_query($con, $query);
                            
                              if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                $totalStock = $row['coupon'];
                                return $totalStock;
                              } else {
                                return 0;
                              }
                            }
                            
                            $totalStock = countcoupon($con);
                            ?>
                                    
                        <div class="">
                          <p class="mb-0 fs-6">Footer Subscribe Email</p>
                        </div>
                        <div class="">
                          
                        <div class="">
                          <h4 class="mb-0"><?php echo $totalStock; ?></h4>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </a>
                 </div>

          </main>
       <!--end page main-->

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->

  </div>
  
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="../assets/js/pace.min.js"></script>
  <script src="../assets/plugins/chartjs/js/Chart.min.js"></script>
  <script src="../assets/plugins/chartjs/js/Chart.extension.js"></script>
  <script src="../assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
   <!-- Vector map JavaScript -->
   <script src="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
   <script src="../assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!--app-->
  <script src="../assets/js/app.js"></script>
  <script src="../assets/js/index.js"></script>
  <script>
    new PerfectScrollbar(".review-list")
    new PerfectScrollbar(".chat-talk")
 </script>


</body>

</html>