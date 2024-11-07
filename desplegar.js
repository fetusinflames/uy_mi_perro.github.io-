document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const navList = document.getElementById('navList');
    
    menuToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        navList.classList.toggle('active');
    });

    document.addEventListener('click', function(e) {
        const isClickInsideMenu = navList.contains(e.target);
        const isClickOnMenuToggle = menuToggle.contains(e.target);
        
        if (!isClickInsideMenu && !isClickOnMenuToggle && navList.classList.contains('active')) {
            navList.classList.remove('active');
        }
    });

    // Prevenir que los clics dentro del menú lo cierren
    navList.addEventListener('click', function(e) {
        e.stopPropagation();
    });

    // Cerrar el menú al cambiar el tamaño de la ventana
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            navList.classList.remove('active');
        }
    });
});