<nav>
    <header class="navbar-header">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="stylesheet" href="css/style.css" />
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <img src="./img/logo.png" alt="Escuela de Educación Secundaria Nro1" />
    </header>
    
    <div class="navbar-body">
        <div class="desac">
            <i class="fa-solid fa-bars" data-target="#menu_prin"></i>
        </div>
        <ul id="menu_prin">
            <li><a href="./index.php">Inicio</a></li>
            <li><a href="./sobre_nosotros.php">Acerca de nosotros</a></li>
            <li><a href="./directivos.php">Directivos</a></li>
            <li><a href="./inscrip.php">Porque la técnica</a></li>
            <li><a href="./sedes.php">Sedes</a></li>
            <li><a href="./contacto.php">Contacto</a></li>
        </ul>
    </div>
</nav>

<script>
    document.querySelector('.fa-bars').addEventListener('click', function() {
        const menu = document.querySelector(this.dataset.target);
        const body = document.querySelector('body')
        menu.classList.toggle('active');
        body.classList.toggle('no-scroll');
    });
</script>
