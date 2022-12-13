    
<?php session_start(); ?>
<?php include 'Boilerplate/head.php'?>

<div class="container px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-4">
          <div class="text-center">
            <div class="h1 fw-light" style="color:#C71515; margin-bottom:15px;">Contact Form</div>
            </div>

          <form id="contactForm" action="send.php" method="POST" class="" data-sb-form-api-token="API_TOKEN">
            <!-- Email Input -->
            <!-- <div class="form-floating mb-3">
              <input class="form-control" id="emailAddress" type="email" name="email" placeholder="Email Address" data-sb-validations="required,email"  />
              <label for="emailAddress">Email Address</label>
              <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
              <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
            </div>-->

             <!-- Subject Input -->
             <div class="form-floating mb-3">
              <input class="form-control" id="Subject" type="text" name="subject" placeholder="Subject" data-sb-validations="required" required />
              <label for="Subject">Subject</label>
              <div class="invalid-feedback" data-sb-feedback="Subject:required">Subject is required.</div>
            </div>

            <!-- Message Input -->
            <div class="form-floating mb-3">
              <textarea class="form-control" id="message" type="text" name="message" placeholder="Message" style="height: 10rem;" data-sb-validations="required" required ></textarea>
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

<!-- CDN Link to SB Forms Scripts -->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

<?php include 'Boilerplate/foot.php'?>

</body>
</html>


