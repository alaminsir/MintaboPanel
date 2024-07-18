<style>
        /* Additional CSS for customization */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
    </style>
<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Breadcrumb navigation -->
                <nav class="nav-breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Register</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Registration form container -->
        <div class="auth-container">
            <div class="auth-box">
                <div class="row">
                    <div class="col-12">
                        <!-- Register form title -->
                        <h1 class="title"><?= trans("register"); ?></h1>
                        
                        <!-- Registration form -->
                        <form action="#" method="post" id="form_validate" class="validate_terms" novalidate>
                            <!-- CSRF token -->
                            <input type="hidden" name="csrf_token" value="8597389a1b91e065f1f39e18cf943e6d">

                            <!-- Social login section -->
                            <div class="social-login">
                                <!-- Placeholder for social login buttons or integration -->
                                <?= themeView('auth/_social_login', ['orText' => trans("register_with_email")]); ?>
                            </div>

                            <!-- Registration result or error display -->
                            <div id="result-register">
                                <!-- Placeholder for registration result/error message -->
                                <?= themeView('partials/_messages'); ?>
                            </div>

                            <!-- Spinner for loading indication -->
                            <div class="spinner display-none spinner-activation-register">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>

                            <!-- First name input -->
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control auth-form-input" placeholder="First Name" value="" maxlength="255" required>
                            </div>

                            <!-- Last name input -->
                            <div class="form-group">
                                <input type="text" name="last_name" class="form-control auth-form-input" placeholder="Last Name" value="" maxlength="255" required>
                            </div>

                            <!-- Email input -->
                            <div class="form-group">
                                <input type="email" name="email" class="form-control auth-form-input" placeholder="Email Address" value="" maxlength="255" required>
                            </div>

                            <!-- Password input -->
                            <div class="form-group">
                                <input type="password" name="password" class="form-control auth-form-input" placeholder="Password" value="" minlength="4" maxlength="255" required>
                            </div>

                            <!-- Confirm password input -->
                            <div class="form-group">
                                <input type="password" name="confirm_password" class="form-control auth-form-input" placeholder="Confirm Password" maxlength="255" required>
                            </div>

                            <!-- Terms and conditions checkbox -->
                            <div class="form-group m-t-5 m-b-15">
                                <div class="custom-control custom-checkbox custom-control-validate-input">
                                    <input type="checkbox" class="custom-control-input" name="terms" id="checkbox_terms" required>
                                    <label for="checkbox_terms" class="custom-control-label">
                                        I have read and agree to the&nbsp;
                                        <a href="#" class="link-terms" target="_blank"><strong>Terms &amp; Conditions</strong></a>
                                    </label>
                                </div>
                            </div>

                            <!-- Register button -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-custom btn-block">Register</button>
                            </div>

                            <!-- Login link -->
                            <p class="p-social-media m-0 m-t-15">
                                Have an account?&nbsp;
                                <a href="<?= generateUrl('authlogin'); ?>" class="link font-600">Login</a>
                            </p>

                            <!-- Hidden input for system language ID -->
                            <input type="hidden" name="sysLangId" value="1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
