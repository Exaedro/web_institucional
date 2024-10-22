
// Seleccionar todos los links del menú lateral
const sectionLinks = document.querySelectorAll('.section-link');

// Agregar evento a cada link
sectionLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();

        // ocultar opciones
        document.querySelectorAll('.section-content').forEach(section => {
            section.classList.add('hidden');
        });

        // mostrar opciones
        const sectionId = this.getAttribute('data-section');
        document.getElementById(sectionId).classList.remove('hidden');
    });
});

// maneojo del as pestañas
const tabs = document.querySelectorAll('.tab');
tabs.forEach(tab => {
    tab.addEventListener('click', function() {
        //desactivar
        tabs.forEach(t => t.classList.remove('active'));

        // activar
        this.classList.add('active');

        // mostrar
        const contentClass = this.id === 'electronica' ? 'text-electronica' : 'text-programacion';
        document.querySelectorAll('.content').forEach(content => {
            content.classList.add('hidden');
        });
        document.querySelector(`.${contentClass}`).classList.remove('hidden');
    });
});

// inicialziar para visibilidad al abrir la pestaña...
document.querySelector('.text-electronica').classList.remove('hidden');
