
const appContainer = document.querySelector('.app-container');
const sidebarToggle = document.getElementById('sidebarToggle');
const sidebar = document.querySelector('.sidebar');

sidebarToggle.addEventListener('click', function () {
    if (window.innerWidth <= 768) {
        // Tampilan mobile
        appContainer.classList.toggle('sidebar-open');
    } else {
        // Tampilan desktop
        appContainer.classList.toggle('sidebar-collapsed');
    }
});

// Tutup sidebar mobile ketika area di luar sidebar diklik
document.addEventListener('click', function (event) {
    if (
        window.innerWidth <= 768 &&
        appContainer.classList.contains('sidebar-open') &&
        !sidebar.contains(event.target) &&
        !sidebarToggle.contains(event.target)
    ) {
        appContainer.classList.remove('sidebar-open');
    }
});

// Tutup sidebar mobile ketika berpindah ke ukuran desktop
window.addEventListener('resize', function () {
    if (window.innerWidth > 768) {
        appContainer.classList.remove('sidebar-open');
    }
});
