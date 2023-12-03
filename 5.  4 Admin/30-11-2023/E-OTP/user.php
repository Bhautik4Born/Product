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
					<div class="breadcrumb-title border-0 pe-3">USERS</div>
				</div>
				<!--end breadcrumb-->
				<hr/>
				<h6 class="	text-uppercase">User List</h6>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Name</th>
										<th>Mobile</th>
										<th>Email</th>
										<th>Password</th>
										<th>Action</th>
									</tr>
								</thead>
							<tbody>
                              <?php
                              
                                $count = 1;
                                if (isset($_GET['delete'])) {
                                  $categoryID = $_GET['delete'];
                            
                                  $checkIDSql = "SELECT * FROM E_OTP_register WHERE id = ?";
                                  $checkIDStmt = $con->prepare($checkIDSql);
                                  $checkIDStmt->bind_param("i", $categoryID);
                                  $checkIDStmt->execute();
                                  $checkIDResult = $checkIDStmt->get_result();
                            
                                  if ($checkIDResult->num_rows > 0) {
                                    $deleteSql = "DELETE FROM E_OTP_register WHERE id = ?";
                                    $stmt = $con->prepare($deleteSql);
                                    $stmt->bind_param("i", $categoryID);
                            
                                    if ($stmt->execute()) {
                                      echo '<script>alert("User deleted successfully.");</script>';
                                    } else {
                                      echo "Error deleting User.";
                                    }
                                  } else {
                                    echo '<script>alert("User ID not found.");</script>';
                                  }
                                }
                            
                                $query = "SELECT * FROM E_OTP_register";
                                $result = mysqli_query($con, $query);
                            
                                while ($row = mysqli_fetch_assoc($result)) {
                                //   $userId = $row['id'];
                                  $userName = $row['name'];
                                  $mobileNo = $row['email'];
                                  $emailId = $row['mobile'];
                                  $password = $row['password'];
                                //   $profileImage = $row['profile_image'];
                              ?>
                                  <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $userName; ?></td>
                                    <td><?php echo $mobileNo; ?></td>
                                    <td><?php echo $emailId; ?></td>
                                    <td><?php echo $password; ?></td>
                                    <td>
                                      <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="?delete=<?php echo $row['id']; ?>" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                      </div>
                                    </td>
                                  </tr>
                                  
                              <?php
                              $count += 1;
                                }
                              ?>
                            </tbody>

							</table>
						</div>
					</div>
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
  <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
  <script src="../assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="../assets/js/table-datatable.js"></script>
	
  <!--app-->
  <script src="../assets/js/app.js"></script>
  
</body>

</html>