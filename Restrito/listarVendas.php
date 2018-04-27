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
            <li class="breadcrumb-item active">Vendas</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1>Vendas</h1>


                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-shopping-cart"></i> Vendas
                        <a href="efetuarVenda.php"><button class="btn btn-success float-right mr-2">EFETUAR VENDA</button></a>

                    </div>

<!--                    <div class="card-body">-->
<!--                        <div class="table-responsive">-->
<!--                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">-->
<!--                                <thead>-->
<!--                                <tr>-->
<!--                                    <th>Cliente</th>-->
<!--                                    <th>CPF</th>-->
<!--                                    <th>Total da venda</th>-->
<!--                                    <th>Forma de Pagamento</th>-->
<!--                                    <th>Vendedor</th>-->
<!--                                    <th>Ação</th>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                <tr>-->
<!--                                    <td>MATHEUS VIANA</td>-->
<!--                                    <td>000.000.000-00</td>-->
<!--                                    <td>450,00</td>-->
<!--                                    <td>DINHEIRO</td>-->
<!--                                    <td>RAPHAEL WILKER DE JESUS BRAGA</td>-->
<!--                                    <td>-->
<!---->
<!--                                        <a href="#" class="fa fa-check text-success align-items-center" style="font-size: 1em"></a>-->
<!--                                        <a href="editarVenda.php" class="fa fa-edit align-items-center" style="font-size: 1em"></a>-->
<!--                                        <a href="#" class="fa fa-print text-secondary align-items-center" style="font-size: 1em"></a>-->
<!--                                        <a href="#" class="fa fa-trash-alt text-danger"  data-toggle="modal" data-target="#excluir" style="font-size: 1em"></a>-->
<!---->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!--                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<!--Excluir fornecedor-->
<div class="modal fade" id="excluir" tabindex="-1" role="dialog" aria-labelledby="excluir" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Excluir Venda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Deseja realmente excluir a venda?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">NÃO</button>
                <button type="button" class="btn btn-primary">SIM</button>
            </div>
        </div>
    </div>
</div>



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
</body>

</html>