<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include_once('./config.php');
        $extend_head = '<link rel="stylesheet" href="'.$cms_asset_path.'/css/user_form.css">';
        include_once($cms_views_path.'/head.php');
    ?>
    <title>Complete Register</title>
</head>

<body>
    <header>
        <div id="loading-screen">
            <img src="../asset/img/logo.png" width="54" height="54" alt="Logo">
            <div class="loader"></div>
        </div>
    </header>
    <div class="user-form">
        <div class="user-form__wrap">

            <div class="user-form__illustration" style="height: 200px; text-align: center;">
                <img src="../asset/img/registor_illustration.svg" alt="Registor illustration"
                    style="height: 100%; object-fit: contain;">
            </div>
            <div class="user-form__title">Complete register</div>
            <div class="user-form__subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, ea.
            </div>
            <br>
            <br>
            <form action="#" class="user-form__form">
                <div class="user-form__text-field">
                    <label for="username" class="user-form__field-label">User name</label>
                    <input type="text" class="user-form__field-control" id="username" placeholder="Enter user name"
                        required autofocus>
                </div>
                <div class="user-form__text-field">
                    <label for="password" class="user-form__field-label">Password</label>
                    <input type="password" class="user-form__field-control" id="password" name="password"
                        placeholder="Enter your password" required autofocus>
                    <button class="user-form__field-button" type="button">
                        <span class="material-symbols-outlined" style="font-size: 18px;" id="toggle-password-icon"
                            onclick="togglePassword()">
                            visibility
                        </span>
                    </button>
                </div>
                <div class="user-form__text-field">
                    <label for="confirm-password" class="user-form__field-label">Confirm password</label>
                    <input type="password" class="user-form__field-control" id="confirm-password"
                        name="confirm-password" placeholder="Enter your password again" required>
                    <button class="user-form__field-button" type="button">
                        <span class="material-symbols-outlined" style="font-size: 18px;"
                            id="toggle-confirm-password-icon" onclick="toggleConfirmPassword()">
                            visibility
                        </span>
                    </button>
                </div>
                <button class="user-form__submit" type="submit">Complete</button>
                <a href="#" id="back-to-login">
                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>
                    <span>Back to home</span>
                </a>
            </form>
        </div>
    </div>
    <script>
        function togglePassword() {
            const passwordInput = document.querySelector('input[name="password"]')
            const togglePasswordIcon = document.querySelector('#toggle-password-icon')

            if (!passwordInput) { return }

            if (passwordInput.getAttribute('type') === 'text') {
                passwordInput.setAttribute('type', 'password')
                togglePasswordIcon && (togglePasswordIcon.innerHTML = 'visibility');
            } else {
                passwordInput.setAttribute('type', 'text');
                togglePasswordIcon && (togglePasswordIcon.innerHTML = 'visibility_off');
            }
        }

        function toggleConfirmPassword() {
            const passwordInput = document.querySelector('input[name="confirm-password"]')
            const toggleConfirmPasswordIcon = document.querySelector('#toggle-confirm-password-icon')

            if (!passwordInput) { return }

            if (passwordInput.getAttribute('type') === 'text') {
                passwordInput.setAttribute('type', 'password')
                toggleConfirmPasswordIcon && (toggleConfirmPasswordIcon.innerHTML = 'visibility');
            } else {
                passwordInput.setAttribute('type', 'text');
                toggleConfirmPasswordIcon && (toggleConfirmPasswordIcon.innerHTML = 'visibility_off');
            }
        }
    </script>
</body>

</html>