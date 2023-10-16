<!-- [102311Tuan]  create sidebar for template list -->
<div class="sidebar-templatelist">
    <div class="sidebar__scroll-container">
        <!-- nav link used to choose subject -->
        <div class="nav-link nav-link--active" data-view="Home">
        <i class="fa-solid fa-house"></i> <nav>Home</nav>
        </div>
        <div class="nav-link" data-view="Nail salon">
        <i class="fa-solid fa-hand-sparkles"></i> <nav>Nail salon</nav>
        </div>
        <div class="nav-link" data-view="Pho">
        <i class="fa-solid fa-bowl-rice"></i></i> <nav>Pho</nav>
        </div>
        <div class="nav-link" data-view="Restaurant">
        <i class="fa-solid fa-utensils"></i> <nav>Restaurant</nav>
        </div>
    </div>
    <div class="sidebar__login">
    <hr>
    <p class="user-select--none">Login if you have already bought our package and provided an account.</p>
    <!-- [102312Tuan] add cookie login page-->
    <a class="button"> <span>Login</span> <i class="fa-solid fa-right-to-bracket"></i></a>
    <hr>
    <div class="sidebar__footer">
        <ul class="footer__links">
            <li data-view="pricing" class="footer__link">Pricing</li>
            <li class="footer__link">Contact</li>
        </ul>
        <div class="user-select--none"><small>&copy; Copyright <span id="year"></span>, 5s3s</small></div>
    </div>
    </div>
    
    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();

        var loginBtn = document.querySelector(".sidebar__login .button");
        loginBtn.addEventListener("click", function(){
            window.location.replace("/php/login2.php");
        });

        var footerLinks = document.querySelectorAll(".footer__link");
        footerLinks[0].addEventListener("click", function(){
            
            window.location.replace("/php/pricing.php");
        })
    </script>
</div>