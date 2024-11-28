<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">

            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="img/avatars/avatar.png" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">
                        Admin
                        <?php /*
                          echo $logado = $_SESSION['email'];*/
                        ?>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">

                    <a class="dropdown-item" href="index.php"><i class="align-middle me-1" data-feather="pie-chart"></i> Analística</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="curso_listagem.php"><i class="align-middle" data-feather="book"></i> Listagem de nível</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="inscricao_listagem.php"><i class="align-middle me-2" data-feather="book-open"></i> Listagem de inscrição</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="formando_listagem.php"><i class="align-middle" data-feather="user"></i> Listagem de formando</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="sair.php">Sair</a>
                </div>
            </li>
        </ul>
    </div>

</nav>