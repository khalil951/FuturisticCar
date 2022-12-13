<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
// *************** Search ****************

const search=document.querySelector("#search");
const search_btn=document.querySelector("#search_btn");
element=document.querySelectorAll(".element");
arrow=document.querySelectorAll(".arrow-wheel");
elementTitle=document.querySelectorAll(".element h4 span");

search_btn.addEventListener("click",()=>{
        for(let i=0;i<element.length;i++){
        
                if(elementTitle[i].innerHTML.toUpperCase().indexOf(search.value.toUpperCase())>-1){
                        element[i].style.display="grid";
                }else if(search.value==""){
                        element[i].style.display="grid";
                }
                else
                element[i].style.display="none";
        }
})
        


// *************** PÃ©gination *********************

for(let i=0;i<9;i++)
                element[i].style.display="inline";

var count=0;           
var ln=element.length;
var nb_slide=Math.ceil(ln/9);
var tmp=1;

arrow[1].addEventListener("click",()=>{
   if(nb_slide>tmp){
        for(let i=count;i<count+9;i++){
                if(i > ln-1)
                        break;
                        element[i].style.display="none";
                }
                count=count+9;
                
                for(let i=count;i<count+9;i++){
                        if(i > ln-1)break;
                                element[i].style.display="inline";
                }  
        tmp++;
   }else{
        alert("No More Info !!!");
   }   

      

})


arrow[0].addEventListener("click",()=>{
      
        if(tmp>1){
                for(let i=count;i<count+9;i++){
                        if(i > ln-1)break;
                        element[i].style.display="none";
                }
       
                count=count-9;
                
                for(let i=count;i<count+9;i++){
                        if(i > ln-1)break;
                        element[i].style.display="inline";
                }
        tmp--;
}else{
        alert("No More Info !!!");
}
                             

});
</script>

// *************** Sort *********************
<?php 
// public function SortByName (){
//         $sql = "SELECT * FROM employee ORDER BY firstName";
//         $db  = config ::getConnexion();
//         try {
//          $list = $db->query($sql);
//          return $list;
//         }
    
//     catch (Exception $e){
//         echo($e->getMessage());
//     }
//     }
?>

<?php
include '../config.php';
$conn=mysqli_connect("localhost","root","","employeeemail");
if(isset($_POST['submit-search']))

    {
    $search = mysqli_real_escape_string($conn,$_POST['search']);
    $sql = "SELECT * FROM employee WHERE username LIKE'%$search%' ";
    
    $result = mysqli_query($conn,$sql);
    $queryresult=mysqli_num_rows($result);  
    }
?>



//contact page
<?php session_start(); ?>
<?php include 'Boilerplate/head.php'?>

<div class="container px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-4">
          <div class="text-center">
            <div class="h1 fw-light" style="color:#C71515;">Contact Form</div>
            </div>

          <form id="contactForm" action="send.php" method="POST" class="" data-sb-form-api-token="API_TOKEN">

            <!-- Email Input -->
            <div class="form-floating mb-3">
              <input class="form-control" id="emailAddress" type="email" name="email" placeholder="Email Address" data-sb-validations="required,email"  />
              <label for="emailAddress">Email Address</label>
              <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
              <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
            </div>

             <!-- Subject Input -->
             <div class="form-floating mb-3">
              <input class="form-control" id="Subject" type="text" name="subject" placeholder="Subject" data-sb-validations="required" />
              <label for="Subject">Subject</label>
              <div class="invalid-feedback" data-sb-feedback="Subject:required">Subject is required.</div>
            </div>

            <!-- Message Input -->
            <div class="form-floating mb-3">
              <textarea class="form-control" id="message" type="text" name="message" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
              <label for="message">Message</label>
              <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
            </div>

            <!-- Submit success message -->
            <!-- <div class="d-none" id="submitSuccessMessage">
              <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
              </div>
            </div> -->

            <!-- Submit error message -->
            <div class="d-none" id="submitErrorMessage">
              <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>

            <!-- Submit button -->
            <div class="d-grid">
              <button class="btn btn-dark btn-lg" id="submitButton" type="submit">Submit</button>
            </div>
          </form>
          <!-- End of contact form -->

        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const submitButton = document.querySelector("#submitButton");
  const wait=ms=>new Promise(resolve => setTimeout(resolve, ms));
  function failureCallback(){
      console.log("This is failure callback");
  }

  const redirect = (evt) =>{
      wait(1*1000).then(() => {
          window.location.replace("send.php");
          throw new Error("error occurred");
      }).catch(() => {
          failureCallback();
      });
  }
 
submitButton.addEventListener('click', redirect);
</script>

<!-- CDN Link to SB Forms Scripts -->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

<?php include 'Boilerplate/foot.php'?>

</body>
</html>



//send page
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
?>

<?php
if(isset($_POST['message']) && isset($_POST['email']) && isset($_POST["subject"])){
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $body    = $_POST['message'];

    $mail = new PHPMailer(true);
    // var_dump($mail);
    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "mohamedkhalil.ouelsleti@esprit.tn";
    $mail->Password = 'ycbqmbersjmjkdrx';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl"; //tts

    //email settings
    $mail->isHTML(true);
    $mail->setFrom("mohamedkhalil.ouelsleti@esprit.tn");
    $mail->addAddress($email);
    $mail->Subject = $subject;
    $mail->Body = $body;

    if($mail->send()){
        $status = "success";
        $response = "Email is sent!"; 
        header('Location: ../index.php');       
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>

<script>
buttons.forEach(button => {
        button.addEventListener('click', function showMore(evt){
            evt.preventDefault();
            console.dir(evt);
            let id = this.id;
            console.log(id);
            if(id === "next")
            {
                containers.forEach(container => {
                    const prevContainer =  document.getElementsByClassName('container-lg show');
                    console.dir(prevContainer[0].id.slice(10));
                    id =  parseInt(prevContainer[0].id.slice(10));
                    id++;
                    console.log(id);    
                })
                
                if(id>3)
                {
                    id = 1;
                }  
            }
    
            else if(id === "prev")
            {
                containers.forEach(container => {
                    const nextContainer = document. getElementsByClassName('container-lg show');
                    console.dir(nextContainer[0].id.slice(10));
                    id = ( parseInt(nextContainer[0].id.slice(10)) );
                    id--;
                    console.log(id);
                })
                if(id<1)
                    {
                        id = 3;
                    }
            }
                 
            containers.forEach(container => {
                container.setAttribute('class','container-lg hide');
            })
            let chosenContainer = document.getElementById(`container-${id}`);
            chosenContainer.setAttribute('class','container-lg show');
            console.dir(chosenContainer);
    
        } )
    })
</script>


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
             

</body>
</html>

        
