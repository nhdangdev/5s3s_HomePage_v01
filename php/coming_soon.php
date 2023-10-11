<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include_once('./config.php');
        include_once($cms_views_path.'/head.php');
    ?>
    <title>Coming soon</title>
</head>

<body>
    <?php include_once("./loading_screen.php") ?>
    <?php include_once("./mobile_header.php") ?>
    <div class="dashboard">
        <?php include_once("./sidebar.php") ?>
        <div class="dashboard__content">
            <div
                style="display: flex; justify-content: center; align-items: center; min-height: 90dvh; font-size: large; font-weight: bold;">
                Coming soon
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('load', () => {
            const searchParams = new URLSearchParams(window.location.search)
            const selectedItemText = searchParams.get('selectedItem')
            const sidebarItemElements = document.querySelectorAll('.sidebar__item')
            if (!selectedItemText) {
                return sidebarItemElements[0].classList.add('sidebar__item--selected')
            }

            for (let sidebarItemElement of sidebarItemElements) {
                const sidebarItemTextElement = sidebarItemElement.querySelector('.sidebar-item__text')
                if (!sidebarItemTextElement || sidebarItemTextElement.innerText !== selectedItemText) {
                    sidebarItemElement.classList.remove('sidebar__item--selected')
                } else {
                    sidebarItemElement.classList.add('sidebar__item--selected')
                }
            }
        })
    </script>
</body>

</html>