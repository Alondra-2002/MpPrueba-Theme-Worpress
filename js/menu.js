function toggleMenu() {
    const menu = document.querySelector('.dropdown-menu');
    menu.classList.toggle('open');
}

// Cierra el menú cuando se hace clic en un enlace
document.querySelectorAll('.dropdown-menu a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const menu = document.querySelector('.dropdown-menu');
        const targetId = this.getAttribute('href');
        
        // Desplazamiento suave
        document.querySelector(targetId).scrollIntoView({
            behavior: 'smooth'
        });

        // Cierra el menú
        menu.classList.remove('open');
    });
});

