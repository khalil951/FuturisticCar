<?php

include '../Controller/CustomerC.php';

$error = "";

// create customer
$customer = null;

// create an instance of the controller
$customerC = new CustomerC();
if (
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["Username"]) &&
    isset($_POST["Password"])&&
    true
    // isset($_POST["Role"])
) {
    if (
        !empty($_POST['firstName']) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["Username"]) &&
        !empty($_POST["Password"])&&
        true
        //!empty($_POST["Role"])
    ) {
        $customer = new Customer(
            null,
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['Username'],
            md5($_POST['Password']),
            null
            // $_POST['Role'] 
        );
        $customerC->addCustomer($customer);
        header('Location: ../index.php');
    } else
        $error = "Missing information";
}

?>

<?php include 'Boilerplate/headViews.php' ?>

<a href="../index.php" class="btn btn-lg btn-dark px-5" style = "transform:translate(20px,3px)">Back</a>
<div id="error">
        <?php if($error){
           echo "<script>alert(\"Missing Information\")</script>";
        }?>
</div>

<div class="form">
            <span class="form__title">Sign up</span>
            <form action="" method="POST">
                <div class="form__input">
                    <i class="ri-user-line"></i>
                    <input type="text" placeholder="Name" type="text" name="firstName" id="firstName" maxlength="20">
                    <span class="bar"></span>
                </div>
                <div class="form__input">
                    <i class="ri-user-line"></i>
                    <input type="text" placeholder="Last Name" name="lastName" id="lastName" maxlength="20">
                    <span class="bar"></span>
                </div>
                
                <div class="form__input">
                    <i class="ri-mail-line"></i>
                    <input type="text" placeholder="User Name" name="Username" id="Username" maxlength="20">
                    <span class="bar"></span>
                </div>
                
                <div class="form__input">
                    <i class="ri-lock-line"></i>
                    <input type="password" placeholder="Password" name="Password" id="Password" minlength="4" maxlength="10">
                    <span class="bar"></span>
                </div>
                
                <!-- <div class="form__input form-select form-select-lg mb-3">
                    <select type="text" name="Role" id="Role" placeholder="Role">
                    <option value="">--Please choose an option--</option>
                    <option value="user">user</option>
                    <option value="company">company</option>
                    <option value="employee">employee</option>
                    <option value="admin">admin</option>
                    </select>
                    <span class="bar"></span>
                </div> -->
                <button type="submit" id="sign" class="form__button">Sign up</button>
                <span class="form__switch" style="color:#3F4241;" >
                    Already have an account? <a href="signin.php" style="color:#222123;" >Sign in</a>
                </span>
            </form>
        </div>
<?php include 'Views/Boilerplate/foot.php'?> 








