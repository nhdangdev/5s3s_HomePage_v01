<div class="sidebar mobile-sidebar--hidden">
    <div class="sidebar__header">
        <div class="account">
            <div class="account__avatar">
                <img src="https://picsum.photos/200" alt="Avatar">
            </div>
            <div class="account__name">User name</div>
            <div class="account__actions">
                <!-- <button>
                    <span class="material-symbols-outlined">
                        expand_more
                    </span>
                </button> -->
            </div>
        </div>
        <button onclick="toggleSidebar()" class="sidebar__close-btn">
            <span class="material-symbols-outlined">
                close
            </span>
        </button>
    </div>
    <div class="sidebar__menu">
        <a class="sidebar__item sidebar__item--selected" href="./user_template_list.php">
            <span class="material-symbols-outlined">
                space_dashboard
            </span>
            <div class="sidebar-item__text">
                Dashboard
            </div>
        </a>
        <a class="sidebar__item" href="./coming_soon.php?selectedItem=User">
            <span class="material-symbols-outlined">
                person
            </span>
            <div class="sidebar-item__text">
                User
            </div>
        </a>
        <a class="sidebar__item" href="./coming_soon.php?selectedItem=History">
            <span class="material-symbols-outlined">
                calendar_month
            </span>
            <div class="sidebar-item__text">
                History
            </div>
        </a>
        <a class="sidebar__item" href="./coming_soon.php?selectedItem=Report">
            <span class="material-symbols-outlined">
                flag
            </span>
            <div class="sidebar-item__text">
                Report
            </div>
        </a>
        <a class="sidebar__item" href="./coming_soon.php?selectedItem=Setting">
            <span class="material-symbols-outlined">
                settings
            </span>
            <div class="sidebar-item__text">
                Setting
            </div>
        </a>
    </div>
    <div class="sidebar__footer">
        <button id="logout-desktop-btn" style="margin-left: -.5rem;" onclick="logout('./login2.php')">
            <span class="material-symbols-outlined">
                move_item
            </span>
            <span>Log Out</span>
        </button>
    </div>
</div>