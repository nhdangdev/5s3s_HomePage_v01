function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar')
    const sidebarHiddenClass = 'mobile-sidebar--hidden';

    if (!sidebar) {
        return console.log('Sidebar not found')
    }

    sidebar.classList.toggle(sidebarHiddenClass)
}