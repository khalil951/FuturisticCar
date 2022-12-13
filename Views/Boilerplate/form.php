

<div class="container px-5 my-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card border-0 rounded-3 shadow-lg">
          <div class="card-body p-4">
            <div class="text-center">
              <div class="h1 fw-light">Contact Form</div>
              <p class="mb-4 text-muted">A functional, Bootstrap 5 contact form with validation built using SB Forms. Try it out!</p>
            </div>
  
            <!-- * * * * * * * * * * * * * *
            // * * SB Forms Contact Form * *
            // * * * * * * * * * * * * * * *
  
            // This form is pre-integrated with SB Forms.
            // To make this form functional, sign up at
            // https://startbootstrap.com/solution/contact-forms
            // to get an API token!
            -->
  
            <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
  
              <!-- Name Input -->
              <div class="form-floating mb-3">
                <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                <label for="name">Name</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
              </div>
  
              <!-- Email Input -->
              <div class="form-floating mb-3">
                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                <label for="emailAddress">Email Address</label>
                <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
              </div>
  
              <!-- Message Input -->
              <div class="form-floating mb-3">
                <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                <label for="message">Message</label>
                <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
              </div>
  
              <!-- Submit success message -->
              <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                  <div class="fw-bolder">Form submission successful!</div>
                  <p>To activate this form, sign up at</p>
                  <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
              </div>
  
              <!-- Submit error message -->
              <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
              </div>
  
              <!-- Submit button -->
              <div class="d-grid">
                <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
              </div>
            </form>
            <!-- End of contact form -->
  
          </div>
        </div>
      </div>
    </div>
  </div>
  
 