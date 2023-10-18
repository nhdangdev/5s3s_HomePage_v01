<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../js/main.js"></script>
    <?php
        include_once('./config.php');
        $extend_head = '<link rel="stylesheet" href="'.$cms_asset_path.'/css/login3.css">';
        include_once($cms_views_path.'/head.php');
    ?>
    <title>Login 3</title>
</head>

<body>
    <header>
        <div id="loading-screen">
            <img src="../asset/img/logo.png" width="54" height="54" alt="Logo">
            <div class="loader"></div>
        </div>
    </header>
    <div class="form-wrapper">
        <div class="grid form-modal">
            <div class="row no-gutters">
                <div class="col c-0 m-6 l-6">
                    <div class="form-modal__left-side" style="padding: 2rem;">
                        <!-- <h1>Welcome back</h1> -->
                        <!-- <div class="divider" style="width: 50px;"></div> -->
                        <!-- <br>
                            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat consequuntur omnis,
                                iure
                                perspiciatis nisi mollitia error ipsum assumenda ad non labore facere deserunt cum illo
                                adipisci
                                molestiae? Doloribus, possimus voluptatem!</small> -->
                        <img src="../asset/img/login_illustration.svg" alt="Log in illustration">
                    </div>
                </div>
                <div class="col c-12 m-6 l-6">
                    <div class="form-modal__right-side">
                        <h2>Login Account</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam suscipit officiis, hic modi
                            incidunt quas.
                        </p>
                        <br>
                        <form action="#" id="login-form">
                            <div class="form-control">
                                <!-- <div class="form-control__label">Email</div> -->
                                <input type="email" name="email" placeholder="Email ID" class="form-control__input"
                                    autofocus required>
                                <div class="form-control__field-button">
                                    <span class="material-symbols-outlined" style="font-size: 18px;"
                                        onclick="clearEmailInput()">
                                        clear
                                    </span>
                                </div>
                            </div>
                            <div class="form-control">
                                <!-- <div class="form-control__label">Password</div> -->
                                <input type="password" name="password" placeholder="Password"
                                    class="form-control__input" required>
                                <div class="form-control__field-button">
                                    <span class="material-symbols-outlined" style="font-size: 18px;"
                                        id="toggle-password-icon" onclick="togglePassword()">
                                        visibility
                                    </span>
                                </div>
                            </div>
                            <div
                                style="width: 100%; display: flex; justify-content: space-between; flex-wrap: wrap; gap: .5rem;">
                                <label class="form-control__checkbox" for="keep-sign-in">
                                    <input type="checkbox" name="keep-sign-in" id="keep-sign-in">
                                    <span class="checkmark">
                                        Keep me signed in
                                    </span>
                                </label>
                                <a href="./forgot_password.html">Forgot password?</a>
                            </div>
                            <button type="submit" class="form-control__button">Log in</button>
                            <span>Don't have a account? <a href="#">Register here</a>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- template for logout section -->
    <template id="logout-template">
        <div style="display: flex; justify-content: center; align-items: center; min-height: 100dvh; gap: 1rem;">
            <span>
                You are logined!
            </span>
            <button style="padding: .5rem 1rem; font-weight: bold; color: #1f1f1f;
            border-radius: .4rem; border: none; background-color: #eee;" onclick="logout('./login2.html')">Log
                out?</button>
        </div>
    </template>

    <script>

        function clearEmailInput() {
            const emailInput = document.querySelector('form#login-form input[name="email"]');
            if (emailInput)
                emailInput.value = '';
        }

        function togglePassword() {
            const passwordInput = document.querySelector('form#login-form input[name="password"]')
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

        window.addEventListener('load', () => {
            // handle form submit
            const loginForm = document.querySelector('#login-form')
            if (loginForm) {
                loginForm.addEventListener('submit', handleSubmitForm)
            }

            // check login
            const email = getCookie('email')
            if (!!email) {
                console.log('U are logined')
                window.location.href = './user_template_list.html'
                // const logoutTemplate = document.querySelector('#logout-template')
                // const logoutSection = logoutTemplate.content.cloneNode(true)
                // document.body.innerHTML = ''
                // document.body.appendChild(logoutSection)
            }
        })

        function handleSubmitForm(e) {
            e.preventDefault()
            const form = e.target
            if (!form) { return }

            const emailInput = form.querySelector('input[name="email"]')
            const passwordInput = form.querySelector('input[name="password"]')
            const keepSignInCheckbox = form.querySelector('input[name="keep-sign-in"]')
            const email = emailInput.value
            const password = passwordInput.value
            const keepSignIn = keepSignInCheckbox.checked
            if (!!email && !!password && keepSignIn) {
                setCookie('email', email)
                window.location.href = './user_template_list.html'
            }
        }
    </script>
</body>

</html>