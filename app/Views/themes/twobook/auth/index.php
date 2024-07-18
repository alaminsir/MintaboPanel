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

        <!-- Login form container -->
        <div class="auth-container">
            <div class="auth-box">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title"><?= trans("login"); ?></h1>
                        <!-- Login form -->
                        <form action="<?= base_url('login-post'); ?>" method="post" id="form_validate">
                        <?= csrf_field(); ?>
                            <!-- Social login buttons (if applicable) -->
                            <div class="social-login">
                                <!-- Placeholder for social login buttons -->
                                <?= themeView('auth/_social_login', ["orText" => trans("login_with_email")]); ?>
                            </div>

                            <!-- Result or error message display -->
                            <div id="result-register">
                                <!-- Placeholder for registration result/error message -->
                            </div>

                            <!-- Spinner for loading indication -->
                            <div class="spinner display-none spinner-activation-register">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>

                            <!-- Email input field -->
                            <div class="form-group">
                                <input type="email" name="email" class="form-control auth-form-input" placeholder="<?= trans("email_address"); ?>" value="" maxlength="255" required>
                            </div>

                            <!-- Password input field -->
                            <div class="form-group">
                                <input type="password" name="password" class="form-control auth-form-input" placeholder="<?= trans("password"); ?>" value="" minlength="4" maxlength="255" required>
                            </div>
                            <!-- Forgate Password input field -->
                            <div class="form-group text-right">
                                <a href="<?= generateUrl("forgot_password"); ?>" class="link-forgot-password"><?= trans("forgot_password"); ?></a>
                            </div>


                            <!-- Register button -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-custom btn-block"><?= trans("login"); ?></button>
                            </div>

                            <!-- Login link -->
                            <p class="p-social-media m-0 m-t-5"><?= trans("dont_have_account"); ?>&nbsp;<a href="<?= generateUrl("register"); ?>" class="link font-600"><?= trans("register"); ?></a></p>


                            <!-- Hidden input for system language ID -->
                            <input type="hidden" name="sysLangId" value="1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
