<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include_once('./config.php');
        $extend_head = '<link rel="stylesheet" href="'.$cms_asset_path.'/css/user_form.css">';
        $extend_head .= '<script src="'.$cms_asset_path.'/js/forgot_password.js" type="module"></script>';
        include_once($cms_views_path.'/head.php');
    ?>
    <title>Forgot password</title>
</head>

<body>
    <header>
        <div id="loading-screen">
            <img src="../asset/img/logo.png" width="54" height="54" alt="Logo">
            <div class="loader"></div>
        </div>
    </header>
    <div class="user-form" id="forgot-password-form">
        <!-- <div class="forgot-password__wrap">
            <div class="forgot-password__illustration">
                <img src="../asset/img/forgot_password_illustration.svg" alt="Forgot password illustration">
            </div>
            <br>
            <div class="forgot-password__title">Forgot password?</div>
            <div class="forgot-password__subtitle">No worries, we'll send you reset instructions.</div>
            <br>
            <br>
            <form action="#" class="forgot-password__form">
                <div class="forgot-password__text-field">
                    <label for="email" class="forgot-password__field-label">Email</label>
                    <input type="email" class="forgot-password__field-control" id="email"
                        placeholder="Enter your email">
                </div>
                </input>
                <button class="forgot-password__submit">Reset password</button>
                <a href="./login2.html" id="back-to-login">
                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>
                    <span>Back to log in</span>
                </a>
            </form>
        </div> -->
    </div>
    <template id="request-reset-password-template">
        <div class="user-form__wrap">

            <div class="user-form__illustration">
                <img src="../asset/img/forgot_password_illustration.svg" alt="Forgot password illustration">
            </div>
            <div class="user-form__title">Forgot password?</div>
            <div class="user-form__subtitle">No worries, we'll send you reset instructions.</div>
            <br>
            <br>
            <form action="#" class="user-form__form" @submit.prevent="resetPassword">
                <div class="user-form__text-field">
                    <label for="email" class="user-form__field-label">Email</label>
                    <input type="email" class="user-form__field-control" id="email" placeholder="Enter your email"
                        required autofocus>
                </div>

                <button class="user-form__submit" type="submit">Request Reset password</button>
                <a href="./login2.html" id="back-to-login">
                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>
                    <span>Back to log in</span>
                </a>
            </form>
        </div>
    </template>
    <template id="sent-reset-password-link-template">
        <div class="user-form__wrap">
            <div class="user-form__illustration">
                <img src="../asset/img/email_illustration.svg" alt="Forgot password illustration">
            </div>
            <br>
            <div class="user-form__title">Check your email</div>
            <div class="user-form__subtitle">We sent a password reset link to
                <span class="user-form__user-mail">
                    {{email || 'user@mail.com'}}
                </span>
            </div>
            <p>
                Did'nt receive the email?
                <a href="#" class="user-form__link">Click to resend</a>
            </p>
            <a href="./login2.html" id="back-to-login">
                <span class="material-symbols-outlined">
                    arrow_back
                </span>
                <span>Back to log in</span>
            </a>
        </div>
    </template>
</body>

</html>