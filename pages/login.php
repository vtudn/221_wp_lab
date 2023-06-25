<?php
include 'include/header.php';
?>

<!-- Log in Section-->
<section class="page-section" id="login">
    <div class="container">
        <!-- Log in Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Log in</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Log in Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form method="post" action="db/login_processing.php" id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Username input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="username" type="text" placeholder="Enter your username..." name="username" data-sb-validations="required" />
                        <label for="username">Username</label>
                        <div class="invalid-feedback" data-sb-feedback="username:required">Username is required.</div>
                    </div>
                    <!-- Password input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="password" type="password" placeholder="Enter your password here..." name="password" data-sb-validations="required" />
                        <label for="password">Password</label>
                        <div class="invalid-feedback" data-sb-feedback="password:required">A password is required.</div>
                    </div>
                    <!-- Log in success message-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Sign in successful!</div>
                        </div>
                    </div>
                    <!-- Log in error message-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error!</div>
                    </div>
                    <!-- Submit Button-->
                    <!-- <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit" value="Login" class="loginBtn" name="login_Btn">Log in</button> -->
                    <input type="submit" value="LOGIN" class="btn btn-primary">
                    <!-- Sign up? -->
                    <div class="signup">
                        <br>
                        Don't have an account?
                        <a href="index.php?page=register">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include 'include/footer.php';
?>
