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
					<div class="breadcrumb-title border-0 pe-3">LANGUAGE</div>
                    <!--<div class="ms-auto">-->
                    <!--    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal"><i class="fadeIn animated bx bx-plus-circle me-2"></i>Add Language</button>-->
                    <!--</div>-->
				</div>

                
				<!--end breadcrumb-->
				<hr/>
				<h6 class="	text-uppercase">Language List</h6>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Payment ID</th>
										<th>Email</th>
										<th>Screen Shot</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    <?php
                                    if (isset($_GET['delete'])) {
                                        $con = mysqli_connect($server, $username, $password, $database);
                                        $categoryID = $_GET['delete'];
                                
                                        // Check if the category ID exists
                                        $checkIDSql = "SELECT * FROM E_OTP_confirm_payment WHERE id = ?";
                                        $checkIDStmt = $con->prepare($checkIDSql);
                                        $checkIDStmt->bind_param("i", $categoryID);
                                        $checkIDStmt->execute();
                                        $checkIDResult = $checkIDStmt->get_result();
                                
                                        if ($checkIDResult->num_rows > 0) {
                                            $deleteSql = "DELETE FROM E_OTP_confirm_payment WHERE id = ?";
                                            $stmt = $con->prepare($deleteSql);
                                            $stmt->bind_param("i", $categoryID);
                                
                                            if ($stmt->execute()) {
                                                echo '<script>alert("User Detail deleted successfully.");</script>';
                                            } else {
                                                echo "Error deleting category.";
                                            }
                                        } else {
                                            echo '<script>alert("User Detail ID not found.");</script>';
                                        }
                                    }
                                
                                    $sql = "SELECT * FROM E_OTP_confirm_payment";
                                    $result = mysqli_query($con, $sql);
                                
                                    $count = 1; // Initialize count variable
                                
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $count++; ?></td>
                                                <td><?php echo $row["payment_id"]; ?></td>
                                                <td><?php echo $row["email"]; ?></td>
                                                <td><img src="https://e-otp.4born.info/<?php echo $row["image"]; ?>" alt="User Image" width="50"></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="?delete=<?php echo $row["id"]; ?>">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <?php
                                        }
                                    } else {
                                        echo '<tr><td colspan="6">No records found.</td></tr>';
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