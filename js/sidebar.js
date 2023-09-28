function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar')
    const sidebarHiddenClass = 'sidebar--hidden';

    if (!sidebar) {
        return console.log('Sidebar not found')
    }

    sidebar.classList.toggle(sidebarHiddenClass)
}