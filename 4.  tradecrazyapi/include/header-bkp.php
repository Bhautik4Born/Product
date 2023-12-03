 <?php
session_start();
include "config.php";

if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $showUsername = true;
} else {
    $showUsername = false;
}
?>

 <header class="header">
            <div class="container">
                <div class="row">
                    <!-- Logo Starts -->
                    <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                        <a href="index.php">
							<!--<img id="logo" class="img-responsive" src="images/logo-dark.png" alt="logo">-->
							 <p id="about-us" class="img-responsive img-about-us" style="color:#fd961a;">TradeCrazyAPI</p>
						</a>
                    </div>
                    <!-- Logo Ends -->
                    <!-- Statistics Starts -->
                    <div class="col-md-7 col-lg-7">
                        <ul class="unstyled bitcoin-stats text-center">
                            <li>
                                <h6>26,629.50 USD</h6><span>Last trade price</span></li>
                            <li>
                                <h6>+0.25%</h6><span>24 hour price</span></li>
                            <li>
                                <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                                <span>Live Bitcoin price</span>
							</li>
                        </ul>
                    </div>
                    <!-- Statistics Ends -->
                    <!-- User Sign In/Sign Up Starts -->
                    <div class="col-md-3 col-lg-3">
                        <ul class="unstyled user">
                               <?php if($showUsername): ?>
                                    <!--<li class="username">Hello, <span style="color:#fd961a;"><?php echo $username; ?></li></span>-->
                                     <li class="dropdown sign-up"><i class="fa fa-user"  style="color:#fd961a"></i> 
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Profile <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <!--<li><a href="blog-left-sidebar.php">Left Sidebar</a></li>-->
                                        <li><a href="profile.php">Views Profile</a></li>
                                        <!--<li><a href="api_detail.php">API Detail</a></li>-->
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                                    
                                    
                                <?php else: ?>
                                    <li class="sign-in"><a href="login.php" class="btn btn-primary"><i class="fa fa-user"></i> Sign In</a></li>
                                    <li class="sign-up"><a href="register.php" class="btn btn-primary"><i class="fa fa-user-plus"></i> Register</a></li>
                                <?php endif; ?>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <!-- Navigation Menu Starts -->
            <nav class="site-navigation navigation" id="site-navigation">
                <div class="container">
                    <div class="site-nav-inner">
                        <a class="logo-mobile" href="index.php">
                            <!--<img id="logo-mobile" class="img-responsive" src="images/logo-dark.png" alt="">-->
                             <p id="about-us" class="img-responsive img-about-us" style="color:#fd961a; margin: 11px 0;">TradeCrazyAPI</p>
                        </a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="pricing.php">Pricing</a></li>
                                <!--<li><a href="about.php">About</a></li>-->

                                <li><a href="contact.php">Contact</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Others <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="api_list.php">Add To Cart</a></li>
                                        <li><a href="shopping-cart.php">Shoping Cart</a></li>
                                        <li><a href="demo_api.php">API Documents</a></li>
                                        <li><a href="user_payment_detail.php">Confirm Your Payment</a></li>
                                        <!--<li><a href="user-buy-history.php">Your API History</a></li>-->
                                        <li><a href="faq.php">FAQ</a></li>
                                        <li><a href="coming-soon.php">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <!-- Cart Icon Starts -->
								<li class="cart"><a href="shopping-cart.php"><i class="fa fa-shopping-cart"></i></a></li>
								<!-- Cart Icon Starts -->
                                <!-- Search Icon Starts -->
                                <li class="search" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><button class="fa fa-search"></button></li>
                                <!-- Search Icon Ends -->
                            </ul>
                        </div>
                    </div>
                </div>
                 <!-- Search Input Starts -->
                <!--<div class="site-search">-->
                <!--    <div class="container">-->
                <!--        <input type="text" placeholder="type your keyword and hit enter ..." id="searchbar" onkeyup="search_animal()" name="search">-->
                <!--        <span class="close">×</span>-->
                <!--    </div>-->
                <!--</div>-->
                <!-- Search Input Ends -->
            </nav>
            <!-- Navigation Menu Ends -->
        </header>
        
        
        
                <!-- Large modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search a ANY Stock Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form>
          <!--<section class="shop-cart">-->
            <!--Start section-->
            <div class="container-fluid">
                <div class="row">
                   
					<!-- Purchased Products Starts -->
                    <div class="col-12 table-responsive">
                         <input type="text"  onkeyup="search_animal()" id="searchbar">
                         <table class="table animals">
                        <!--<table id="example" class="table table-striped table-bordered order text-center" style="width:100%">-->
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Stock Name</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody tabl="animals">
                                <?php
                                if (isset($_SESSION['id'])) {
                                    $user_id = $_SESSION['id'];
                                
                                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
                                        $product_id = $_POST['product_id'];
                                        $quantity = $_POST['quantity'];
                                
                                        $check_query = "SELECT * FROM market_cart WHERE user_id = $user_id AND product_id = $product_id";
                                        $check_result = mysqli_query($con, $check_query);
                                
                                        if (mysqli_num_rows($check_result) > 0) {
                                            $row = mysqli_fetch_assoc($check_result);
                                            $new_quantity = $row['quantity'] + $quantity;
                                            $total = $row['price'] * $new_quantity;
                                
                                            $update_query = "UPDATE market_cart 
                                                             SET quantity = $new_quantity, total = $total 
                                                             WHERE user_id = $user_id AND product_id = $product_id";
                                            
                                            if (mysqli_query($con, $update_query)) {
                                                echo "<script>alert('Product added to cart successfully!');</script>";
                                            } else {
                                                echo "Error updating product quantity in the cart: " . mysqli_error($con);
                                            }
                                        } else {
                                            $query = "SELECT * FROM market_product WHERE id = $product_id";
                                            $result = mysqli_query($con, $query);
                                
                                            if ($row = mysqli_fetch_assoc($result)) {
                                                $product_name = $row['name'];
                                                $product_price = $row['price'];
                                                $total = $product_price * $quantity;
                                
                                                $insert_query = "INSERT INTO market_cart (user_id, product_id, name, price, quantity, total)
                                                                 VALUES ($user_id, $product_id, '$product_name', $product_price, $quantity, $total)";
                                                if (mysqli_query($con, $insert_query)) {
                                                    echo "<script>alert('Product added to cart successfully!');</script>";
                                                } else {
                                                    echo "Error adding product to cart: " . mysqli_error($con);
                                                }
                                            } else {
                                                echo "Product not found in the database.";
                                            }
                                        }
                                    }
                                }
                                
                                $query = "SELECT * FROM market_product";
                                $result = mysqli_query($con, $query);
                                
                                if (mysqli_num_rows($result) > 0) {
                                    $counter = 1; // Initialize a counter
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                            <tr class="animals">
                                <td><?php echo $counter; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                            </tr>
                            <?php
                                    $counter++; // Increment the counter
                                }
                            } else {
                            ?>
                                <tr><td colspan="5">No products found</td></tr>
                            <?php
                            }
                            ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </section>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('whatever')
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
    
        // JavaScript code
    function search_animal() {
    	let input = document.getElementById('searchbar').value
    	input=input.toLowerCase();
    	let x = document.getElementsByClassName('animals');
    	
    	for (i = 0; i < x.length; i++) {
    		if (!x[i].innerHTML.toLowerCase().includes(input)) {
    			x[i].style.display="none";
    		}
    		else {
    			x[i].style.display="list-item";				
    		}
    	}
    }
    
</script>