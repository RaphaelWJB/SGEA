<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SGEA - Fornecedor</title>
    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<!--menu-->
<?php
    require_once "menu.php";
?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Relatorios</li>
        </ol>
        <div class="mb-5 mt-5">
                <span class="fa fa-list-alt" style="font-size: 3em"> Relatorios</span>
        </div>



<!--        <ul class="nav">-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="rCliente.php">Active</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">Link</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">Link</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">Disabled</a>-->
<!--            </li>-->
<!--        </ul>-->
        
        
        
        
        
        
<!--        <div class="row">-->
<!--            <div class="col-2">-->
<!--                <div class="list-group" id="list-tab" role="tablist">-->
<!--                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Clientes</a>-->
<!--                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Produtos</a>-->
<!--                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Contas</a>-->
<!--                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Lucros</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-12">-->
<!--                <div class="tab-content" id="nav-tabContent">-->
<!--                    <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Cliente</div>-->
<!--                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Produtos</div>-->
<!--                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Financeiro</div>-->
<!--                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Empresa</div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        
    </div>
</div>



<div class="modal fade" id="excluir" tabindex="-1" role="dialog" aria-labelledby="excluir" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Excluir Fornecedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <!-- Area Chart Example-->
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-area-chart"></i> Area Chart Example</div>
                    <div class="card-body">
                        <canvas id="myAreaChart" width="100%" height="30"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
                
                
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">NÃO</button>
                <button type="button" class="btn btn-primary">SIM</button>
            </div>
        </div>
    </div>
</div>




<!-- Area Chart Example-->
<!--<div class="card mb-3">-->
<!--    <div class="card-header">-->
<!--        <i class="fa fa-area-chart"></i> Area Chart Example</div>-->
<!--    <div class="card-body">-->
<!--        <canvas id="myAreaChart" width="100%" height="30"></canvas>-->
<!--    </div>-->
<!--    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
<!--</div>-->


<!--<form action="" class="m-auto">-->
<!---->
<!--    <div class="form-row">-->
<!---->
<!---->
<!--        <button type="" class="btn btn-outline-success col-3">Clientes Ativos</button>-->
<!---->
<!--        <button type="" class="btn btn-outline-success col-3">Clientes Inativos</button>-->
<!---->
<!--        <button type="" class="btn btn-outline-success col-3">Todos os Clientes</button>-->
<!---->
<!--        <div class="input-group col-3">-->
<!--            <div class="input-group-prepend">-->
<!--                <div class="input-group-text">@</div>-->
<!--            </div>-->
<!--            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">-->
<!--        </div>-->
<!--    </div>-->
<!--</form>-->


<!-- /.container-fluid-->
<!-- /.content-wrapper-->

<?php
    require_once "footer.php";
?>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<!--Editar dataTable-->
<script src="../vendor/datatables/jquery.dataTables.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="../js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="../js/sb-admin-datatables.min.js"></script>
<!--</div>-->
</body>

</html>