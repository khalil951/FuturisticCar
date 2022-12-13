
<?php
include '../Controller/CustomerC.php';

// create customer
$customer = null;
$customerC = new CustomerC();
?>
<?php
    if (isset($_POST['Username']) && isset($_POST['Password'])) {
        $customer = $customerC->findCustomer($_POST['Username'],md5($_POST['Password']));
        //make sure that the password is unique
        if(!empty($customer && session_id() == '')) {
            session_start();
            $_SESSION["username"]   =  $customer["Username"];
            $_SESSION["password"]   =  $customer["Password"];
            $_SESSION["firstName"]  =  $customer["firstName"];
            $_SESSION["lastName"]   =  $customer["lastName"];
            $_SESSION["Role"]       =  $customer["Role"];
            $_SESSION["idCustomer"] =  $customer["idCustomer"];
            // set isLoggedIn to true
            $customerC->isLoggedIn($username,$Password);
            // setcookie('PHPSESSID', session_id(), 0, '/');
            if($customer["Role"] == "admin")
            {
              header('Location: dashboard/index.php');
            }else if($customer["Role"] == "banned"){
              header('Location: alert.php');
            }
            else{
              header('Location: profile.php');
            }  
            exit();
        } else  {
          echo "<script>alert(\"An Error occured\")</script>";
        }
           
 } ?>

   

    <?php include 'Boilerplate/headViews.php'?>
    <a href="../index.php" class="btn btn-lg btn-danger px-5" style = "transform:translate(20px,3px)">Back</a>
    <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center text-lg mb-5 fw-light fs-3" style ="color:#3F4241;">Sign In</h5>
            <form action="" method="POST">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Username" id="Username" placeholder="Username" style="height:50px; font-size:16px;" >
                <label for="Username">username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="Password" id="Password" placeholder="Password" minlength="4" maxlength="100" style="height:50px; font-size:16px;">
                <label for="Password">password</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-dark btn-login text-uppercase fw-bold" id="signin" type="submit">Sign
                  in</button>
              </div>
              <hr class="my-4">
              <div class="d-grid mb-2">
                <button class="btn btn-google btn-login text-uppercase fw-bold"  type="submit">
                  <i class="fab fa-google me-2"></i> Sign in with Google
                </button>
              </div>
              <div class="d-grid">
                <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
                </button>
              </div>
            </form>
          </div>
          <a href="contact.php" style="text-align:center; color:#C71515; text-decoration:none; margin-bottom:10px; font-size:15px;">Are you having issues with the login? <span style="font-size: 12px;" onMouseOver="this.style.textDecoration='underline'" onMouseOut="this.style.textDecoration='none'" >Contact our support</span></a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://www.google.com/recaptcha/api.js?render=6LdOcWAjAAAAABKoYiB0uM7dMNDbQlSLEcDefbsr">
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6LdOcWAjAAAAABKoYiB0uM7dMNDbQlSLEcDefbsr', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
              console.log(token);
          });
        });
      }
  </script>

  <!-- <script>
    btnGoogle = document.querySelector(".btn-google");
    btnFacebook = document.querySelector(".btn-facebook");
    const hoberFunction = (btn) =>{
      btn.addEventListener('mouseover',(evt)=>{
        btn.style.opacity = '0.6';
        btn.style.display='block';
      })
      hoberFunction(btnGoogle);
      hoberFunction(btnFacebook);

    }
  </script>
  <script>
    const SigninBtn = document.querySelector("#signin"); 
    const username = document.getElementById("Username");
    const pw = document.getElementById("Password");
    window.addEventListener("load",(evt) => {
      SigninBtn.addEventListener("click",(evt) =>{
        if(!(username.value) && !(pw.value)){
            setTimeout((SigninBtn,evt) =>{
            SigninBtn.classList.add("disabled");
            evt.preventDefault();
            },1000) 
        }
      })
    })
  </script> -->
<?php include 'Boilerplate/foot.php'?>