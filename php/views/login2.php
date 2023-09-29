<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/login2.css">
    <script src="../js/main.js"></script>
    <title>Layout Login 2</title>
</head>

<body>
    <?php include_once("./loading_screen.php") ?>
    <div class="form-wrapper">
        <div class="grid form-modal">
            <div class="row no-gutters">
                <div class="col c-0 m-6 l-6">
                    <div class="form-modal__left-side">
                        <span>Nice to see you again</span>
                        <h1>Welcome back</h1>
                        <div class="divider" style="width: 50px;"></div>
                        <br>
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat consequuntur omnis,
                            iure
                            perspiciatis nisi mollitia error ipsum assumenda ad non labore facere deserunt cum illo
                            adipisci
                            molestiae? Doloribus, possimus voluptatem!</small>

                    </div>
                </div>
                <div class="col c-12 m-6 l-6">
                    <div class="form-modal__right-side">
                        <h2>Login Account</h2>
                        <small>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam suscipit officiis, hic modi
                            incidunt quas. Inventore officiis aspernatur, mollitia velit, repellat officia iste
                            aperiam
                            tempore natus, earum fuga corporis minus!
                        </small>
                        <br>
                        <form action="#" id="login-form">
                            <div class="form-control">
                                <input type="email" name="email" placeholder="Email ID"
                                    class="form-control form-control__input">
                                <div class="form-control__field-button">
                                    <span class="material-icons" style="font-size: 18px;" onclick="clearEmailInput()">
                                        clear
                                    </span>

                                </div>
                            </div>
                            <div class="form-control">
                                <input type="password" name="password" placeholder="Password"
                                    class="form-control form-control__input">
                                <div class="form-control__field-button">
                                    <span class="material-icons" style="font-size: 18px;" id="toggle-password-icon"
                                        onclick="togglePassword()">
                                        visibility
                                    </span>
                                </div>
                            </div>
                            <div style="width: 100%; display: flex; justify-content: space-between;">
                                <label class="form-control form-control__checkbox" for="keep-sign-in">
                                    <input type="checkbox" name="keep-sign-in" id="keep-sign-in">
                                    <span class="checkmark">
                                        Keep me signed in
                                    </span>
                                </label>
                                <a href="#">Already a menber?</a>
                            </div>
                            <button type="submit" class="form-control form-control__button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        console.l
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
                togglePasswordIcon && (togglePasswordIcon.innerHTML = 'visibility_off');
            } else {
                passwordInput.setAttribute('type', 'text');
                togglePasswordIcon && (togglePasswordIcon.innerHTML = 'visibility');
            }
        }
    </script>
</body>

</html>