<?php
include 'include/header.php';
?>

<!-- Register Section-->
<section class="page-section" id="register">
    <div class="container">
        <!-- Register Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Register</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Register Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form action="db/register_processing.php" method="post" id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="number" name="phone" placeholder="(84) 903 990 009" data-sb-validations="required,number" />
                        <label for="phone">Phone number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="phone:number">A phone number is required.</div>
                    </div>
                    <!-- Username input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="username" type="text" name="username" placeholder="Enter your username..." data-sb-validations="required" />
                        <label for="username">Username</label>
                        <div class="invalid-feedback" data-sb-feedback="username:required">Username is required.</div>
                    </div>
                    <!-- Password input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="password" type="password" name="password" placeholder="Enter your password here..." data-sb-validations="required" />
                        <label for="password">Password</label>
                        <div class="invalid-feedback" data-sb-feedback="password:required">A password is required.</div>
                    </div>
                    <!-- Register success message-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Registration successful!</div>
                        </div>
                    </div>
                    <!-- Register error message-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error registering!</div>
                    </div>
                    <!-- Submit Button-->
                    <!-- <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Send</button> -->
                    <input type="submit" value="REGISTER" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include 'include/footer.php';
?>