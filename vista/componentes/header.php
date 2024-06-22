<header>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-lg-5"> <!-- Ajusta el padding según sea necesario -->
            <a class="navbar-brand" href="#">Energia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0"> <!-- Clase mx-auto para centrar horizontalmente -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <div class="d-flex" role="search">
                    <?php 
                        /* ------- MODAL CALCULAR ENERGIA---- */
                        /* include './vista/login/modal_login.php';  */
                        /* ---------------------------------------*/
                    ?>
                    <a class="nav-link active" aria-current="page" href="./vista/login/login.php" style="background-color: white;">Iniciar Sesion</a>
                </div>
            </div>
        </div>
    </nav>
</header>