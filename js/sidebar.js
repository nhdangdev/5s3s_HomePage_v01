const SIDEBAR_HIDDEN_CLASS = 'sidebar--mobile-hidden';
const SIDEBAR_COMPACT_CLASS = 'sidebar--compact';

function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar')

    if (!sidebar) {
        return console.log('Sidebar not found')
    }

    if (sidebar.classList.contains(SIDEBAR_HIDDEN_CLASS)) {
        sidebar.classList.remove(SIDEBAR_HIDDEN_CLASS)
    } else {
        sidebar.classList.add(SIDEBAR_HIDDEN_CLASS)
        sidebar.classList.remove(SIDEBAR_COMPACT_CLASS)
    }
}

function toggleCompactSidebar() {
    const sidebar = document.querySelector('.sidebar')
    const toggleIcon = document.querySelector('#toggle_compact-sidebar-btn .material-symbols-outlined')

    if (!sidebar) {
        return console.log('Sidebar not found')
    }

    if (sidebar.classList.contains(SIDEBAR_COMPACT_CLASS)) {
        toggleIcon.innerText = 'chevron_left'
        sidebar.classList.remove(SIDEBAR_COMPACT_CLASS)
    } else {
        sidebar.classList.add(SIDEBAR_COMPACT_CLASS)
        sidebar.classList.remove(SIDEBAR_HIDDEN_CLASS)
        toggleIcon.innerText = 'chevron_right'
    }
}