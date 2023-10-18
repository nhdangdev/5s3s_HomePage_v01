<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include_once('./config.php');
        $extend_head = '<link rel="stylesheet" href="'.$cms_asset_path.'/css/user_form.css">';
        $extend_head .= '<script src="'.$cms_asset_path.'/js/reset_password.js" type="module"></script>';
        include_once($cms_views_path.'/head.php');
    ?>
    <title>Reset password</title>
</head>

<body>
    <?php include_once("./loading_screen.php") ?>
    <div class="user-form" id="reset-password-section">
        <!-- <div class="forgot-password__wrap">
            <div class="forgot-password__illustration">
                <img src="../asset/img/reset_passowrd_illustration.svg" alt="Reset password illustration">
            </div>
            <br>
            <div class="forgot-password__title">Set new password</div>
            <div class="forgot-password__subtitle">Your new password muse be different to previously used password.
            </div>
            <br>
            <form action="#" class="forgot-password__form">
                <div class="forgot-password__text-field">
                    <label for="password" class="forgot-password__field-label">Password</label>
                    <input type="password" class="forgot-password__field-control" id="password"
                        placeholder="Enter your password" required autofocus>
                </div>
                <div class="forgot-password__text-field">
                    <label for="confirm-password" class="forgot-password__field-label">Confirm password</label>
                    <input type="password" class="forgot-password__field-control" id="confirm-password"
                        placeholder="Enter your password again" required>
                </div>
                </input>
                <button class="forgot-password__submit" type="submit">Reset password</button>
                <a href="./login2.php" id="back-to-login">
                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>
                    <span>Back to log in</span>
                </a>
            </form>
        </div> -->
    </div>
    <template id="reset-password-form-template">
        <div class="user-form__wrap">
            <div class="user-form__illustration">
                <img src="../asset/img/reset_passowrd_illustration.svg" alt="Reset password illustration">
            </div>
            <div class="user-form__title">Set new password</div>
            <div class="user-form__subtitle">Your new password muse be different to previously used password.
            </div>
            <br>
            <form action="#" class="user-form__form" @submit.prevent="resetPassword">
                <div class="user-form__text-field">
                    <label for="password" class="user-form__field-label">Password</label>
                    <input :type="isShowPassword ? 'text': 'password'" class="user-form__field-control" id="password"
                        placeholder="Enter your password" required autofocus>
                    <button class="user-form__field-button" type="button">
                        <span class="material-symbols-outlined" style="font-size: 18px;" id="toggle-password-icon"
                            @click="togglePassword()">
                            {{isShowPassword ? 'visibility_off' :'visibility'}}
                        </span>
                    </button>
                </div>
                <div class="user-form__text-field">
                    <label for="confirm-password" class="user-form__field-label">Confirm password</label>
                    <input :type="isShowConfirmPassword ? 'text' : 'password'" class="user-form__field-control"
                        id="confirm-password" placeholder="Enter your password again" required>
                    <button class="user-form__field-button" type="button">
                        <span class="material-symbols-outlined" style="font-size: 18px;"
                            id="toggle-confirm-password-icon" @click="toggleConfirmPassword()">
                            {{isShowConfirmPassword ? 'visibility_off' :'visibility'}}
                        </span>
                    </button>
                </div>
                <button class="user-form__submit" type="submit">Reset password</button>
                <a href="./login2.html" id="back-to-login">
                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>
                    <span>Back to log in</span>
                </a>
            </form>
        </div>
    </template>
    <template id="reset-password-alert-template">
        <div class="user-form__wrap">
            <div class="user-form__illustration">
                <img src="../asset/img/reset_passowrd_illustration.svg" alt="Reset password illustration">
            </div>
            <div class="user-form__title">Password reset</div>
            <div class="user-form__subtitle">
                Your password has been successfully reset. <br>
                Click below to log in magically
            </div>
            <br>
            <button class="user-form__submit" style="width: 100%;">Continute</button>
            <br>
            <a href="./login2.php" id="back-to-login">
                <span class="material-symbols-outlined">
                    arrow_back
                </span>
                <span>Back to log in</span>
            </a>
        </div>
    </template>
</body>

</html>