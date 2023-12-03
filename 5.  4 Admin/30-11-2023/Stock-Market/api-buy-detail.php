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
                <div class="breadcrumb-title border-0 pe-3">User / License</div>
                <div class="ms-auto">
                    <!--<button type="button" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal"><i class="fadeIn animated bx bx-plus-circle me-2"></i>Add User / License</button>-->
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModall"><i class="fadeIn animated bx bx-plus-circle me-2"></i>Add User License</button>
                </div>
            </div>
            <!-- Add User / License Modal -->
            <div class="modal fade" id="exampleVerticallycenteredModall" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="card-body">
                            <div class="p-3 rounded">
                                <h6 class="mb-0 text-center">Add User</h6>
                                <hr>
                                <form class="row g-3" action="include/Add-user-license.php" method="POST">
                                    <div class="col-12">
                                        <label for="validationCustom04" class="form-label">Select User</label>
                                        <select class="form-select" id="validationCustom04" name="username" required="">
                                            <?php
                                            $sql = "SELECT id , username FROM users";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $row['id'] . '">' . $row['username'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="validationCustom04" class="form-label">Select Stock</label>
                                        <select class="form-select" id="validationCustom04" name="book_name" required="">
                                            <?php
                                            $sql = "SELECT Stock_name FROM market_Stock";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $row['Stock_name'] . '">' . $row['Stock_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Enter License Key</label>
                                        <input type="text" class="form-control" name="chapter_no" required="">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Enter Domain</label>
                                        <input type="text" class="form-control" name="domain" required="">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Enter Stock Link</label>
                                        <input type="text" class="form-control" name="chapter_title" required="">
                                    </div>
                                    <!--<div class="col-12">-->
                                    <!--    <label class="form-label">Description</label>-->
                                    <!--    <textarea class="form-control" rows="4" cols="4" name="description" required=""></textarea>-->
                                    <!--</div>-->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary"><i class="fadeIn animated bx bx-plus-circle me-2"></i>Save</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fadeIn animated bx bx-x-circle me-2"></i>Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end breadcrumb-->
            <hr />
            <h6 class="text-uppercase mb-3">User / Licenses List</h6>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User Name</th>
                                    <th>Stock Name</th>
                                    <th>Stock Link</th>
                                    <th>License Key</th>
                                    <th>Domain</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                        if (isset($_POST['book_id'])) {
                                            $bookName = $_POST['book_name'];
                                            $userName = $_POST['user_name'];
                                            $authorName = $_POST['author_name'];
                                            $rating = $_POST['rating'];
                                            $domain = $_POST['domain'];
                                        
                                            $updateSql = "UPDATE market_buy_product SET Stock_name = ?, user_name = ?, license_key = ?, stock_link = ? WHERE id = ?";
                                            $stmt = $con->prepare($updateSql);
                                            $stmt->bind_param("ssssi",$bookName,$userName, $authorName, $rating, $bookID);
                                        
                                            if ($stmt->execute()) {
                                                echo '<script>alert("Record updated successfully.");</script>';
                                            } else {
                                                echo "Error updating record.";
                                            }
                                        }
                                        
                                        if (isset($_GET['delete'])) {
                                            $bookID = $_GET['delete'];
                                            $deleteSql = "DELETE FROM market_buy_product WHERE id = ?";
                                            $stmt = $con->prepare($deleteSql);
                                            $stmt->bind_param("i", $bookID);
                                        
                                            if ($stmt->execute()) {
                                                echo '<script>alert("Record deleted successfully.");</script>';
                                            } else {
                                                echo "Error deleting record.";
                                            }
                                        }
                                        
                                        $sql = "SELECT * FROM market_buy_product";
                                        $result = mysqli_query($con, $sql);
                                        
                                        if (mysqli_num_rows($result) > 0) {
                                            $rowNumber = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $bookName = $row['user_name'];
                                                $authorName = $row['Stock_name'];
                                                $rating = $row['stock_link'];
                                                $license_key = $row['license_key'];
                                                $domain = $row['domain'];
                                                $bookID = $row['id'];
                                ?>

                                        <tr>
                                            <td><?php echo $rowNumber; ?></td>
                                            <td><?php echo $bookName; ?></td>
                                            <td><?php echo $authorName; ?></td>
                                            <td><?php echo $rating; ?></td>
                                            <td><?php echo $license_key; ?></td>
                                            <td><?php echo $domain; ?></td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <a href="?edit=<?php echo $row['id']; ?>" class="text-warning" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['id']; ?>" data-bs-placement="bottom" title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                    <a href="?delete=<?php echo $row['id']; ?>" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Edit Modal -->
                                        <div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel<?php echo $row['id']; ?>">Update Record</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Update Record Form -->
                                                        <form action="" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="book_id" value="<?php echo $row['id']; ?>">
                                                            <div class="mb-3">
                                                                <label for="language" class="form-label">Stock Name</label>
                                                                <select class="form-control" id="language" name="language">
                                                                    <?php
                                                                    $languageSql = "SELECT Stock_name FROM market_Stock";
                                                                    $languageResult = mysqli_query($con, $languageSql);
                                                                    while ($languageRow = mysqli_fetch_assoc($languageResult)) {
                                                                        $selectedLanguage = ($languageRow['Stock_name'] == $language) ? 'selected' : '';
                                                                        echo '<option value="' . $languageRow['Stock_name'] . '" ' . $selectedLanguage . '>' . $languageRow['Stock_name'] . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="language" class="form-label">User Name</label>
                                                                <select class="form-control" id="language" name="user_name">
                                                                    <?php
                                                                    $languageSql = "SELECT username , id FROM users";
                                                                    $languageResult = mysqli_query($con, $languageSql);
                                                                    while ($languageRow = mysqli_fetch_assoc($languageResult)) {
                                                                        $selectedLanguage = ($languageRow['username'] == $language) ? 'selected' : '';
                                                                        echo '<option value="' . $languageRow['id'] . '" ' . $selectedLanguage . '>' . $languageRow['username'] . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="author_name" class="form-label">Lisence Key</label>
                                                                <input type="text" class="form-control" id="author_name" name="author_name" value="<?php echo $row['price']; ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="rating" class="form-label">Stock Link</label>
                                                                <input type="text" class="form-control" id="rating" name="rating" value="<?php echo $row['quantity']; ?>">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                        $rowNumber++;
                                    }
                                } else {
                                    echo '<tr><td colspan="8">No records found</td></tr>';
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