
    <?php session_start();?>
    <?php include '../Controller/CustomerC.php'; ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">    
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/custom.css">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="logo" href="#"><img style = "width:60px" src="https://scontent.ftun8-1.fna.fbcdn.net/v/t1.15752-9/315473763_645734937010689_6317153661414309909_n.png?_nc_cat=111&ccb=1-7&_nc_sid=ae9488&_nc_ohc=ZdcdoRIAZC0AX-OfNL4&_nc_ht=scontent.ftun8-1.fna&oh=03_AdSS2z-op2wgeLyeIrx0sMPMa-3hG2AFF9e0MpWdLQ1rAw&oe=639A57A5" alt="*"></a>
      <!-- src="../Frontend/img/logo.png" -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="Views/signin.php">Sign in</a>
          </li> -->
           <li class="nav-item">
           <a href="" class="nav-link" ><i class="fa-regular fa-user"></i></a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link" ><?php echo $_SESSION["username"] ;?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signout.php" id="signoutBtn" style="margin-left:20px;">Sign out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="https://img.freepik.com/premium-photo/detail-classic-car-closeup-headlight_355018-235.jpg?w=826" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/free-photo/car-parts-repair-garage_1170-1702.jpg?w=826&t=st=1670626242~exp=1670626842~hmac=416f32c3bfd437d9014ba9c4e050cc82901a552160e32b232947a9b9723d53a1" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/free-photo/closeup-shot-metal-steering-wheel-vehicle_181624-14395.jpg?w=826&t=st=1670626311~exp=1670626911~hmac=ae330c67ff82b10a30e53544a1abd7414275ba14c3d5e9322f99c6915cefda3f" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<a href="signup.php" class="btn btn-lg btn-dark px-5 my-3" style ="display:none;">Start Now</a>  
<section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5" style="transform:translate(20px,40px);">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Enter your email to start your journey!</h2>
        
                        <!-- to get an API token!-->
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><a  href="signin.php" class="btn btn-dark fs-4" id="submitButton" type="submit">Login Now!</a></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <br />
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

      <script>
        const signoutBtn = document.querySelector("#signoutBtn");
      </script>
    <?php include '../Views/Boilerplate/footer.php'?>
    <?php include '../Views/Boilerplate/foot.php'?>
    
  
