<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/slider.css">
    <script src="../js/main.js"></script>
    <script src="../js/slider.js" defer></script>
    <title>Slider</title>
</head>

<body>
    <?php include_once("./loading_screen.php") ?>
    <div id="slider-frame-wrap">
        <iframe src="./user_template_list.php" frameborder="0" id="slider-frame"></iframe>
        <div class="slider-nav">
            <div class="searchbox">
                <span class="material-symbols-outlined searchbox__icon">
                    language
                </span>
                <input type="text" name="search" id="searchbox" class="searchbox__input" placeholder="Search ...">
                <div class="searchbox__suggestion" tabindex="-1">
                </div>
                <a href="#" id="open_in_new" target="_blank">
                    <span class="material-symbols-outlined searchbox__icon" style="left:calc(100% - 1.4rem)">
                        open_in_new
                    </span>
                </a>
            </div>
            <div class="slider-nav__button-wrap">
                <button class="slider-nav__btn" onclick="prevLayout()" id="prev-btn">
                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>
                </button>
                <button class="slider-nav__btn" onclick="nextLayout()" id="next-btn">
                    <span class="material-symbols-outlined">
                        arrow_forward
                    </span>
                </button>
                <button class="slider-nav__btn" onclick="reloadSliderFrame()">
                    <span class="material-symbols-outlined">
                        refresh
                    </span>
                </button>
            </div>
        </div>
        <!-- <div class="slider-btn-wrap">
            <button onclick="prevLayout()" class="slider-btn">
                <span class="material-symbols-outlined">
                    chevron_left
                </span>
            </button>
            <button onclick="nextLayout()" class="slider-btn">
                <span class="material-symbols-outlined">
                    chevron_right
                </span>
            </button>
        </div> -->
    </div>
    <script>
        layoutFilePaths = [
            './template_list.php',
            './pricing.php',
            // './login1.php',
            // './login2.php',
            './login3.php',
            './get_tips_earlier2.php',
            './complete_register.php',
            './forgot_password.php',
            './reset_password.php',
            './user_template_list.php',
            './select_template.php',
            './add_template_data2.php',
            './dialog.php'
        ]
    </script>
</body>

</html>