<?php
session_start();
require_once "conf/db.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto voluntariado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="Styles/Estilo.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="https://i.pinimg.com/originals/8f/a0/d0/8fa0d03cbc2d6def4069a075152011ff.png" alt="Logo" width="40" height="40" class="me-2">
                Leones en Acción
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#quienesSomos">¿Que es leones en accion?</a></li>
                    <li class="nav-item"><a class="nav-link" href="#oportunidades">Oportunidades</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                <?php if (isset($_SESSION['usuario'])): ?>
                    <li class="nav-item d-flex align-items-center">
                    <span class="navbar-text text-white me-3">Hola, <?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
                    <a href="conf/cerrar.php" class="btn btn-danger">Cerrar sesión</a>
                    </li>
                    <?php else: ?>  
                    <li class="nav-item">
                    <button class="btn btn-dark ms-3" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar sesión</button>
                    </li>
                 <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner Principal -->
    <section id="inicio" class="py-5 bg-dark text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Leones En Acción</h1>
                    <p class="lead">
                        Fuerza, Coraje y Solidaridad en Movimiento.<br>
                        Únete a una comunidad que no se queda quieta. Somos voluntarios con garra, listos para cambiar el mundo, una acción a la vez.<br>
                        ¡Tu ayuda puede rugir más fuerte de lo que imaginas!
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://tse2.mm.bing.net/th/id/OIP.jzsnsIeKXi26lRx3d-_dJgHaEK?rs=1&pid=ImgDetMain" width="400" height="300" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Conocenos -->
    <section id="quienesSomos" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4 text-warning">¿Qué es Leones en Acción?</h2>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <img src="https://i0.wp.com/clusterenergiajalisco.mx/wp-content/uploads/2021/08/logo_udeg_color_horizontal_3.png?fit=5347%2C3063&ssl=1" width="400" height="300" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-8">
                    <p class="lead text-center">
                        Leones en Acción es una propuesta para los estudiantes de la Universidad de Guadalajara. Buscamos crear consciencia y ayudar  
                        a las asociaciones que necesitan de nosotros, así como ofrecer un espacio para que cada estudiante pueda realizar su servicio social de
                        una manera más flexible, ayudando a crear un mundo mejor. Cada voluntario es parte de nuestra manada, 
                        y juntos trabajamos para construir un mundo más justo, más verde y más humano.<br><br>
                        ¡Sé parte de nuestro rugido de esperanza y acción!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Oportunidades -->
    <section id="oportunidades" class="py-5 bg-dark text-light">
        <div class="container">
            <h2 class="text-center mb-4 text-warning">Oportunidades más recientes</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Recolección de basura</h5>
                            <img src="https://www.ecoavant.com/uploads/s1/10/08/25/andalimpia-y-amigos-del-mar.jpeg" width="400" height="300" class="img-fluid rounded shadow">
                            <p class="card-text">Apoya con la limpieza de nuestros parques y zonas familiares del área metropolitana</p>
                            <a href="#" class="btn btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Baño de lomitos</h5>
                            <img src="https://th.bing.com/th/id/R.44fa72d970e6d48adcb491183855187b?rik=VM5SU2smqwd%2b4Q&pid=ImgRaw&r=0" width="400" height="300" class="img-fluid rounded shadow">
                            <p class="card-text">Únete a la campaña que protege a los perros del CUT apoyando con un baño para que se vean guapos</p>
                            <a href="#" class="btn btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Bosques del agua</h5>
                            <img src="https://lajornadaestadodemexico.com/wp-content/uploads/2024/07/recomendaciones-para-reforestar-los-bosques-1.jpeg" width="400" height="300" class="img-fluid rounded shadow">
                            <p class="card-text">Apoya con la reforestación del bosque del agua, una zona importante por su biodiversidad</p>
                            <a href="#" class="btn btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <button class="btn btn-primary" id="toggleGaleriaBtn">Ver catálogo completo</button>
            </div>

            <!-- Galería -->
            <div id="galeriaImagenes" class="row mt-4 d-none">
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <img src="https://www.miambiente.gob.pa/wp-content/uploads/2023/07/Jornada-de-limpieza-en-playa-en-Veracruz.jpg" class="img-fluid rounded shadow card-img-top" alt="Voluntariado 1">
                        <div class="card-body">
                            <h5 class="card-title">Limpieza de playas</h5>
                            <a href="#" class="btn btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <img src="https://tse1.mm.bing.net/th/id/OIP.YzvUm1S8sDUy04DEfaFnVwHaE3?cb=iwc1&rs=1&pid=ImgDetMain" class="img-fluid rounded shadow card-img-top" alt="Voluntariado 2">
                        <div class="card-body">
                            <h5 class="card-title">Apoyo en comedores</h5>
                            <a href="#" class="btn btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <img src="https://i0.wp.com/refugiokimba.org/wp-content/uploads/2019/03/180428_104845_IMG_9432_Canon-EOS-7D.jpg?w=1600&ssl=1" class="img-fluid rounded shadow card-img-top" alt="Voluntariado 3">
                        <div class="card-body">
                            <h5 class="card-title">Cuidado animal</h5>
                            <a href="#" class="btn btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <img src="https://irp.cdn-website.com/a31689ad/dms3rep/multi/voluntarios+en+albergue.jpeg" class="img-fluid rounded shadow card-img-top" alt="Voluntariado 4">
                        <div class="card-body">
                            <h5 class="card-title">Voluntariado en albergues</h5>
                            <a href="#" class="btn btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <img src="https://tse3.mm.bing.net/th/id/OIP.4F2kZEC0gQyTzuOTVq34nAHaEM?cb=iwc1&rs=1&pid=ImgDetMain" class="img-fluid rounded shadow card-img-top" alt="Voluntariado 5">
                        <div class="card-body">
                            <h5 class="card-title">Reforestación urbana</h5>
                            <a href="#" class="btn btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4 text-warning">¿Quieres inscribir tu voluntariado con nosotros?</h2>
            <form class="mt-4">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Descripción del voluntariado</label>
                    <textarea class="form-control" id="mensaje" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                <form action="conf/validacion.php" method="POST">
                <div class="mb-3">
                   <label for="correoLogin" class="form-label">Correo electrónico</label>
                   <input type="email" class="form-control" id="correoLogin" name="correo" required>
                </div>
                <div class="mb-3">
                   <label for="contrasenaLogin" class="form-label">Contraseña</label>
                   <input type="password" class="form-control" id="contrasenaLogin" name="password" required>
                </div>
                     <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Script/funciones.js"></script>
</body>
</html>
