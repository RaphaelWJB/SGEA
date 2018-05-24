<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <title>SB Admin - Start Bootstrap Template</title>-->
    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../vendor/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css"type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" >
    <a class="navbar-brand" href="index.php">SGEA</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

<!--Dashboard            -->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
                <a class="nav-link" href="index.php">
                    <i class="fa fa-fw fa-tachometer-alt"></i>
                    <span class="nav-link-text">Bem-Vindo</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cadastros">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#cads" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Cadastros</span>
                </a>
                <ul class="sidenav-second-level collapse" id="cads">

                    <!--Fornecedor            -->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Fornecedor">
                        <a class="nav-link" href="listarFornecedor.php">
                            <i class="fa fa-fw fa-dolly"></i>
                            <span class="nav-link-text">Fornecedor</span>
                        </a>
                    </li>

                    <!--Colaborador-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Colaborador">
                        <a class="nav-link" href="listarColaborador.php">
                            <i class="fa fa-fw fa-users"></i>
                            <span class="nav-link-text">Colaborador</span>
                        </a>
                    </li>

                    <!--Cliente-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cliente">
                        <a class="nav-link" href="listarCliente.php">
                            <i class="fa fa-fw fa-address-book"></i>
                            <span class="nav-link-text">Cliente</span>
                        </a>
                    </li>

                    <!--Produto-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Produto">
                        <a class="nav-link" href="listarProdutos.php">
                            <i class="fa fa-fw fa-boxes"></i>
                            <span class="nav-link-text">Produto</span>
                        </a>
                    </li>
                </ul>
            </li>


<!--Venda-->

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Vendas">
                <a class="nav-link" href="efetuarVenda.php">
                    <i class="fa fa-fw fa-shopping-cart"></i>
                    <span class="nav-link-text">Vendas</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Vendas">
                <a class="nav-link" href="listarFaturas.php">
                    <i class="fas fa-money-check-alt"></i>
                    <span class="nav-link-text">Lançar Faturas</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Gráficos">
                <a class="nav-link" href="graficos.php">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Gráficos</span>
                </a>
            </li>


            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Relatórios">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#relatorios" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file-alt"></i>
                    <span class="nav-link-text">Relatórios</span>
                </a>
                <ul class="sidenav-second-level collapse" id="relatorios">

                    <!--Colaborador-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Colaborador">
                        <a class="nav-link" href="rColaborador.php">
                            <i class="fa fa-fw fa-users"></i>
                            <span class="nav-link-text">Colaborador</span>
                        </a>
                    </li>

                    <!--Cliente-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cliente">
                        <a class="nav-link" href="rCliente.php">
                            <i class="fa fa-fw fa-address-book"></i>
                            <span class="nav-link-text">Cliente</span>
                        </a>
                    </li>

                    <!--Produto-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Produto">
                        <a class="nav-link" href="rProduto.php">
                            <i class="fa fa-fw fa-boxes"></i>
                            <span class="nav-link-text">Produto</span>
                        </a>
                    </li>

                    <!--Produto-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Produto">
                        <a class="nav-link" href="rFinanceiro.php">
                            <i class="fa fa-fw fa-dollar"></i>
                            <span class="nav-link-text">Financeiro</span>
                        </a>
                    </li>
                </ul>
            </li>



        </ul>

        <ul class="navbar-nav ml-auto">


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope"></i>
                    <span class="d-lg-none">Mensagens
              <span class="badge badge-pill badge-primary">12 Novas</span>
            </span>
                    <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">Nova Mensagem:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>David Miller</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>Jane Smith</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>John Doe</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all messages</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Alertas
              <span class="badge badge-pill badge-warning">6 Novas</span>
            </span>
                    <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">Novos Alertas:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all alerts</a>
                </div>
            </li>



            <li class="nav-item">
                    <div class="input-group mt-2 mr-4">
                        <label class="text-light user">USUARIO: RAPHAEL WILKER DE JESUS BRAGA</label>
                    </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-sign-out-alt"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>

<script src="../vendor/jquery/jquery.min.js"></script>
<!--<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<!-- Core plugin JavaScript-->
<!--<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>-->
<!-- Custom scripts for all pages-->
<!--<script src="../js/sb-admin.min.js"></script>-->
<!-- Custom scripts for this page-->
<!-- Toggle between fixed and static navbar-->

<script>
    $('#toggleNavPosition').click(function() {
        $('body').toggleClass('fixed-nav');
        $('nav').toggleClass('fixed-top static-top');
    });

</script>
<!-- Toggle between dark and light navbar-->
<script>
    $('#toggleNavColor').click(function() {
        $('nav').toggleClass('navbar-dark navbar-light');
        $('nav').toggleClass('bg-dark bg-light');
        $('.user').toggleClass('text-dark text-light');
        $('body').toggleClass('bg-dark bg-light');
    });

</script>
