<div class="sidebar mobile-sidebar--hidden">
    <div class="sidebar__header">
        <div class="account">
            <div class="account__avatar">
                <img src="https://picsum.photos/200" alt="Avatar">
            </div>
            <div class="account__name">User name</div>
            <div class="account__actions">
                <button>
                    <span class="material-symbols-outlined">
                        expand_more
                    </span>
                </button>
            </div>
        </div>
        <button onclick="toggleSidebar()" class="sidebar__close-btn">
            <span class="material-symbols-outlined">
                close
            </span>
        </button>
    </div>
    <div class="sidebar__menu">
        <div class="sidebar__item sidebar__item--selected">
            <span class="material-symbols-outlined">
                space_dashboard
            </span>
            <div class="sidebar-item__text">
                Dashboard
            </div>
        </div>
        <div class="sidebar__item">
            <span class="material-symbols-outlined">
                person
            </span>
            <div class="sidebar-item__text">
                Comming Soon
            </div>
        </div>
        <div class="sidebar__item">
            <span class="material-symbols-outlined">
                calendar_month
            </span>
            <div class="sidebar-item__text">
                Comming Soon
            </div>
        </div>
        <div class="sidebar__item">
            <span class="material-symbols-outlined">
                flag
            </span>
            <div class="sidebar-item__text">
                Comming Soon
            </div>
        </div>
        <div class="sidebar__item">
            <span class="material-symbols-outlined">
                settings
            </span>

            <div class="sidebar-item__text">
                Comming Soon
            </div>
        </div>
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