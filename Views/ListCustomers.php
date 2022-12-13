<?php session_start();?>              
<?php
include '../Controller/CustomerC.php';
$customerC = new CustomerC();
$list = $customerC->listCustomers();
?>

<?php
      if(isset($_POST["Sort"]) && !empty($_POST["Sort"])){
        // var_dump($_POST["Sort"]);
        $list = $customerC->SortByName();
      }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data Table</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="dashboard/assets/img/favicon.png" rel="icon">
  <link href="dashboard/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="dashboard/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="dashboard/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="dashboard/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="dashboard/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="dashboard/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="dashboard/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="dashboard/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../Views/dashboard/index.php" class="logo d-flex align-items-center">
        <img src="https://scontent.ftun8-1.fna.fbcdn.net/v/t1.15752-9/315473763_645734937010689_6317153661414309909_n.png?_nc_cat=111&ccb=1-7&_nc_sid=ae9488&_nc_ohc=ZdcdoRIAZC0AX-OfNL4&_nc_ht=scontent.ftun8-1.fna&oh=03_AdSS2z-op2wgeLyeIrx0sMPMa-3hG2AFF9e0MpWdLQ1rAw&oe=639A57A5" style="height:100px;" alt="#">
        <span class="d-none d-lg-block">FuturisticCar</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword" id="search">
        <button type="submit" title="Search"><i class="bi bi-search" id="searchBtn"></i></button>
        <input type="submit" name="Sort" value="Sort" class="btn btn-sm btn-light mx-1 px-0">
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <i class="fa-regular fa-user"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2">User</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION["username"]?></h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="./dashboard/profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../Blank.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../Blank.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../Views/signout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="../Views/dashboard/index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Modules</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>User</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Product</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Order</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Review</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Request</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../Views/dashboard/profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="addCustomer.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="../Blank.php">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->



    <table width="90%" style="transform:translate(85px,100px);">
        <tr>
            <th>Id Customer</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>
            <th>Update</th>
            <th>Delete</th>
            <th>Ban</th>
        </tr>
        <?php
        foreach ($list as $customer) {
          if($customer['idCustomer'] != $_SESSION['idCustomer']){
          if( (!isset($_POST["query"]) && empty($_POST["query"] )) || $_POST["query"]== "" ) {          
        ?>
            <tr>
                <td style="font-size:20px;"><?= $customer['idCustomer']; ?></td>
                <td style="font-size:20px;"><?= $customer['lastName']; ?></td>
                <td style="font-size:20px;"><?= $customer['firstName']; ?></td>
                <td style="font-size:20px;"><?= $customer['Username']; ?></td>
                <td style="font-size:20px;"><?= substr($customer['Password'],0,10); ?></td>                                
                <td style="font-size:20px;"><?= $customer['Role']; ?></td>
                <td >
                    <form method="POST" action="updateCustomer.php">
                        <input type="submit" name="update" value="Update" class="btn btn-md btn-dark">
                        <input type="hidden" value=<?PHP echo $customer['idCustomer']; ?> name="idCustomer">
                    </form>
                </td>
                <td>
                    <a href="deleteCustomer.php?idCustomer=<?php echo $customer['idCustomer']; ?>" class="btn btn-md btn-danger" >Delete</a>
                </td>

                <td >
                    <form method="POST" action="banCustomer.php">
                        <input type="submit" name="Ban" value="Ban" class="btn btn-md btn-danger px-4">
                        <input type="hidden" value=<?PHP echo $customer['idCustomer']; ?> name="idCustomer">
                    </form>
                </td>
            </tr>
        <?php
        }else if (isset($_POST["query"]) && !empty($_POST["query"])) { 
          if ( $customer['Username'] == $_POST["query"]){ ?>
              <tr>
                <td style="font-size:20px;"><?= $customer['idCustomer']; ?></td>
                <td style="font-size:20px;"><?= $customer['lastName']; ?></td>
                <td style="font-size:20px;"><?= $customer['firstName']; ?></td>
                <td style="font-size:20px;"><?= $customer['Username']; ?></td>
                <td style="font-size:20px;"><?= substr($customer['Password'],0,10); ?></td>                                
                <td style="font-size:20px;"><?= $customer['Role']; ?></td>
                <td >
                    <form method="POST" action="updateCustomer.php">
                        <input type="submit" name="update" value="Update" class="btn btn-md btn-dark">
                        <input type="hidden" value=<?PHP echo $customer['idCustomer']; ?> name="idCustomer">
                    </form>
                </td>
                <td>
                    <a href="deleteCustomer.php?idCustomer=<?php echo $customer['idCustomer']; ?>" class="btn btn-md btn-danger" >Delete</a>
                </td>

                <td >
                    <form method="POST" action="banCustomer.php">
                        <input type="submit" name="Ban" value="Ban" class="btn btn-md btn-danger px-4">
                        <input type="hidden" value=<?PHP echo $customer['idCustomer']; ?> name="idCustomer">
                    </form>
                </td>
            </tr>
          <?php 
          }
        }
      }
    }
     ?>
     
     
    </table>
    <h2 class= "text-md-center" style="transform:translate(0,100px);">
        <a class ="btn btn-lg btn-secondary my-3" href="addCustomer.php">Add Customer</a>
    </h2>
</body>


  <!-- ======= Footer ======= -->
  <footer id="footer" >
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="dashboard/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dashboard/assets/vendor/chart.js/chart.min.js"></script>
  <script src="dashboard/assets/vendor/echarts/echarts.min.js"></script>
  <script src="dashboard/assets/vendor/quill/quill.min.js"></script>
  <script src="dashboard/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="dashboard/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="dashboard/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="dashboard/assets/js/main.js"></script>
  <script>
    const search=document.querySelector("#search");
    const searchBtn=document.querySelector("#searchBtn");
  </script>

</body>

</html>