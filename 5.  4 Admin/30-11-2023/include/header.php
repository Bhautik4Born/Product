<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>    
    
     <div class="sidenav">
    <!--start top header-->
      <header class="top-header">        
        <nav class="navbar navbar-expand gap-3 align-items-center">
          <div class="mobile-toggle-icon fs-3">
              <i class="bi bi-list"></i>
            </div>
            <div class="top-navbar-right ms-auto">
              <ul class="navbar-nav align-items-center">
              <li class="nav-item dropdown dropdown-user-setting">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="user-setting d-flex align-items-center">
                    <img src="https://4born.info/assets/img/images/4Born_Solution.png" class="user-img" alt="">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                          <img src="https://4born.info/assets/img/images/4Born_Solution.png" alt="" class="rounded-circle" width="54" height="54">
                          <div class="ms-3">
                            <!--<h6 class="mb-0 dropdown-user-name">Mechodal</h6>-->
                            <h6 class="my-4">Hello, <br><?= htmlspecialchars($_SESSION["username"]); ?></h6>
                          </div>
                       </div>
                     </a>
                   </li>
                   <li><hr class="dropdown-divider"></li>
                    <li>
                      <a class="dropdown-item" href="logout.php">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-lock-fill"></i></div>
                           <div class="ms-3"><span>Logout</span></div>
                         </div>
                       </a>
                    </li>
                </ul>
              </li>
              </ul>
              </div>
        </nav>
      </header>
       <!--end top header-->


        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <img src="https://4born.info/assets/img/images/4Born_Solution.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">4Born Solutions</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li class="menu-label">MAIN</li>
            <li>
              <a href="index.php">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
              </a>
            </li>
            <li class="menu-label">Pages</li>
            
                 
          <button class="dropdown-btn">Hashlib
            <i class="fa fa-caret-down"></i>
          </button>
                <div class="dropdown-container">
                    <li>
                      <a href="#">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-user"></i>
                        </div>
                        <div class="menu-title">Not Any Pages</div>
                      </a>
                    </li>
                </div>
           
          <button class="dropdown-btn">E-OTP
            <i class="fa fa-caret-down"></i>
          </button>
                <div class="dropdown-container">
                    <li>
                      <a href="../E-OTP/user.php">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-user"></i>
                        </div>
                        <div class="menu-title">Users</div>
                      </a>
                    </li>
                        <li>
                          <a href="../E-OTP/payment_detail.php">
                            <div class="parent-icon"><i class="fadeIn animated bx bx-font-family"></i>
                            </div>
                            <div class="menu-title">User Detail</div>
                          </a>
                        </li>
                    <li>
                      <a href="../E-OTP/license.php">
                        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                        </div>
                        <div class="menu-title">License</div>
                      </a>
                    </li>
                </div>
           
                
                
           <button class="dropdown-btn">Stock Market
            <i class="fa fa-caret-down"></i>
          </button>
                <div class="dropdown-container">
                    <li>
                      <a href="../Stock-Market/user.php">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-user"></i>
                        </div>
                        <div class="menu-title">Users</div>
                      </a>
                    </li>
                    <li>
                      <a href="../Stock-Market/api-buy-detail.php">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-user"></i>
                        </div>
                        <div class="menu-title">Users License</div>
                      </a>
                    </li>
                    <li>
                      <a href="../Stock-Market/contact_detail.php">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-user"></i>
                        </div>
                        <div class="menu-title">Contact User</div>
                      </a>
                    </li>
                    <li>
                      <a href="../Stock-Market/license.php">
                        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                        </div>
                        <div class="menu-title">License</div>
                      </a>
                    </li>
                    <li>
                      <a href="../Stock-Market/Add-Stock.php">
                        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                        </div>
                        <div class="menu-title">Add Stock</div>
                      </a>
                    </li>
                    <li>
                      <a href="../Stock-Market/Add-Product.php">
                        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                        </div>
                        <div class="menu-title">Add Stock Products</div>
                      </a>
                    </li>
                        
                </div>
                
            <button class="dropdown-btn">4bChat
                <i class="fa fa-caret-down"></i>
            </button>
                <div class="dropdown-container">
                    <li>
                      <a href="../4bChat/user.php">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-user"></i>
                        </div>
                        <div class="menu-title">Users</div>
                      </a>
                    </li>
                    <li>
                      <a href="../4bChat/google_login.php">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-user"></i>
                        </div>
                        <div class="menu-title">Users Google</div>
                      </a>
                    </li>
                    <li>
                      <a href="../4bChat/keys.php">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-user"></i>
                        </div>
                        <div class="menu-title">Add Keys</div>
                      </a>
                    </li>
                    <li>
                      <a href="../4bChat/notification.php">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-user"></i>
                        </div>
                        <div class="menu-title">Add Notifications</div>
                      </a>
                    </li>
                    <li>
                      <a href="../4bChat/contact.php">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-user"></i>
                        </div>
                        <div class="menu-title">Contact Form</div>
                      </a>
                    </li>
                </div>
                
                
        </div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
          </ul>
       </aside>