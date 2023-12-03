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
					<div class="breadcrumb-title border-0 pe-3">License</div>
                    <div class="ms-auto">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal"><i class="fadeIn animated bx bx-plus-circle me-2"></i>Add License</button>
                    </div>
				</div>

                <!-- Add License Modal -->
                <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="card-body">
                                <div class="p-3 rounded">
                                <h6 class="mb-0 text-center">Add License Detail</h6>
                                <hr>
                                <form class="row g-3" method="POST" action="include/add-category.php">
                                  <div class="col-12">
                                    <label for="single-select" class="form-label">Enter a License Key</label>
                                    <input type="text" class="form-control" name="license">
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Enter Domain Name</label>
                                    <input type="text" class="form-control" name="domain">
                                  </div>
                                  <div class="col-12">
                                    <button type="submit" class="btn btn-primary"><i class="fadeIn animated bx bx-plus-circle me-2"></i>Save</button>
                                    <!--<button type="button" class="btn btn-primary"><i class="fadeIn animated bx bx-plus-circle me-2"></i>Save</button>-->
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fadeIn animated bx bx-x-circle me-2"></i>Close</button>
                           
                                  </div>
                                </form>
                              </div>
                              </div>
                            <!--<div class="modal-footer justify-content-center">-->
                            <!--    <button type="button" class="btn btn-primary"><i class="fadeIn animated bx bx-plus-circle me-2"></i>Save</button>-->
                            <!--    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fadeIn animated bx bx-x-circle me-2"></i>Close</button>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
				<!--end breadcrumb-->
				<hr/>
				<h6 class="	text-uppercase">License List</h6>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>License Key</th>
      <th>Domain</th>
      <th>Action</th>
    </tr>
  </thead>
 <tbody>
  <?php
  $sql = "SELECT * FROM E_OTP_license";
  $result = mysqli_query($con, $sql);
  $count = 1;

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $count . "</td>";
      echo "<td>" . $row['license_key'] . "</td>";
      echo "<td>" . $row['domain'] . "</td>";
      echo '<td>
              <div class="d-flex align-items-center gap-3 fs-6">
                <!-- <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a> -->
                <a href="?edit=' . $row['id'] . '" class="text-warning" data-bs-toggle="modal" data-bs-target="#editModal' . $row['id'] . '" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                <a href="?delete=' . $row['id'] . '" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
              </div>
            </td>';
      echo "</tr>";

      echo '<div class="modal fade" id="editModal' . $row['id'] . '" tabindex="-1" aria-labelledby="editModalLabel' . $row['id'] . '" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel' . $row['id'] . '">Update License</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="post">
                      <input type="hidden" name="license_id" value="' . $row['id'] . '">
                      <div class="mb-3">
                        <label for="license_key" class="form-label">License Key</label>
                        <input type="text" class="form-control" id="license_key" name="license_key" value="' . $row['license_key'] . '">
                      </div>
                      <div class="mb-3">
                        <label for="domain" class="form-label">Domain</label>
                        <input type="text" class="form-control" id="domain" name="domain" value="' . $row['domain'] . '">
                      </div>
                      <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>';

      $count++;
    }
  } else {
    echo "<tr><td colspan='4'>No records found</td></tr>";
  }

  // Delete Functionality
  if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_query = "DELETE FROM E_OTP_license WHERE id = '$delete_id'";
    $delete_result = mysqli_query($con, $delete_query);

    if ($delete_result) {
      echo '<script>window.location.href = "";</script>';
    } else {
      echo '<script>alert("Failed to delete record.");</script>';
    }
  }

  // Update Functionality
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['license_id'])) {
    $license_id = $_POST['license_id'];
    $updated_license_key = $_POST['license_key'];
    $updated_domain = $_POST['domain'];

    $update_query = "UPDATE E_OTP_license SET license_key = '$updated_license_key', domain = '$updated_domain' WHERE id = '$license_id'";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
      echo '<script>window.location.href = "";</script>';
    } else {
      echo '<script>alert("Failed to update record.");</script>';
    }
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