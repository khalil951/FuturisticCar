<?php
session_start();
include '../Controller/CustomerC.php';

$error = "";
// create customer
$customer = null;

// create an instance of the controller
$customerC = new CustomerC();

if (
    isset($_POST["idCustomer"]) &&
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["Username"]) &&
    isset($_POST["Password"]) &&
    isset($_POST["Role"])
) {
    if (
        !empty($_POST["idCustomer"]) &&
        !empty($_POST['firstName']) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["Username"]) &&
        !empty($_POST["Password"]) &&
        !empty($_POST["Role"])
    ) {
        $customer = new Customer(
            $_POST['idCustomer'],
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['Username'],
            $_POST['Password'],
            $_POST['Role']
        );
        
        $customerC->updateCustomer($customer, $_POST["idCustomer"]);
        header('Location:ListCustomers.php');
    } else
        $error = "Missing information";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="dashboard/assets/img/favicon.png" rel="icon">
  <link href="dashboard/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
<div id="error">
        <?php if($error){
           echo "<script>alert(\"Missing Information\")</script>";
           /*echo "<div class=<? $alert ?>  role=<?$alerRole ?>>
           A simple primary alert—check it out!
         </div>"*/
        }?>
</div>

    <?php
    if (isset($_POST['idCustomer'])) {
        $customer = $customerC->showCustomer($_POST['idCustomer']);

    ?>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block" style="color:#222123;">FuturisticCar</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4" style="color:#C71515;">Update an Account</h5>
                    <p class="text-center small">Enter your personal details to update account</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" novalidate>
                  <div class="col-12">
                      <label for="idCustomer" class="form-label">ID</label>
                      <input type="text" class="form-control" name="idCustomer" id="idCustomer" value="<?php echo $customer['idCustomer']; ?>" maxlength="20" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>  
                  
                  <div class="col-12">
                      <label for="firstName" class="form-label">Your Name</label>
                      <input type="text" class="form-control" name="firstName" id="firstName" maxlength="20" value="<?php echo $customer['firstName']; ?>" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="lastName" class="form-label">Last Name</label>
                      <input type="text" class="form-control" name="lastName" id="lastName" maxlength="20" value="<?php echo $customer['firstName']; ?>" required>
                      <div class="invalid-feedback">Please enter your last name!</div>
                    </div>

                    <div class="col-12">
                      <label for="Username" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" name="Username" id="Username" maxlength="20" value="<?php echo $customer['Username']; ?>" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="Password" class="form-label">Password</label>
                      <input type="text" class="form-control" name="Password" id="Password" minlength="4" maxlength="10" value="<?php echo $customer['Password']; ?>"  required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                    <label for="Role" class="form-label">Role</label>
                    <select type="text" name="Role" id="Role" placeholder="Role" class="form-control">
                        <option class="option" value="<?php $customer['Role']; ?>" selected><?php echo $customer['Role'];?></option>
                        <option value="user">user</option>
                        <option value="company">company</option>
                        <option value="employee">employee</option>
                        <option value="admin">admin</option>
                    </select>
                      <div class="invalid-feedback">Please choose your role!</div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" style="background-color:#C71515;" type="submit">Update Account</button>
                    </div>
                  </form>
                  <?php
                        }
                     ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script>
        const options = document.querySelectorAll(".option");
        options[0].style.display = "none";  
</script>

<script>
        /*const checkInput = (input , varInput)  => {
            if (input.innerHTML === varInput.innerHTML){
                varInput.style.display = "none";
            }
        }
            const Selected = (options) =>{
                for(option of options)
            {
                if(option.selected) return option ;
            }
        }
        const selected = Selected(options);
        options.forEach(option =>{checkInput(selected, option)}) */  
</script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
   
</body>

</html>