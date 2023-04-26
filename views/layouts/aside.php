<!-- MENU -->
<div class="row">
    <div class="col">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Sistema de Actividades complementarias</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url ?>">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Organigrama
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= base_url ?>organigrama/create">Agregar</a></li>
                                <li><a class="dropdown-item" href="<?= base_url ?>organigrama/read">Mostrar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url ?>help/index">Acerca de</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>



<div id="content">
    <div class="row">
        <div class="col-3">
            <!-- BARRA LATERAL -->
            <aside id="lateral">

                <div id="login" class="block_aside">
                    <main class="form-signin w-100 m-auto">
                        <form action="#" method="post">
                            <h1 class="h3 mb-3 fw-normal">Ingresa</h1>

                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Recordarme
                                </label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar</button>
                        </form>
                    </main>
                </div>

            </aside>
        </div>
        <div class="col-9">