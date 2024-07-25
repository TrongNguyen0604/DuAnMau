document.querySelector('.sidebar-header').addEventListener('click', function() {
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');
    const headerText = document.querySelector('.sidebar-header h3');

    sidebar.classList.toggle('collapsed');
    if (sidebar.classList.contains('collapsed')) {
        sidebar.style.width = '100px';
        mainContent.style.marginLeft = '100px';
        mainContent.style.width = 'calc(100% - 100px)';
        headerText.textContent = 'Admin';
    } else {
        sidebar.style.width = '300px';
        mainContent.style.marginLeft = '300px';
        mainContent.style.width = 'calc(100% - 300px)';
        headerText.textContent = 'Admin Dashboard';
    }
});
