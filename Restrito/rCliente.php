<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
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
            <li class="breadcrumb-item active">Relatório de Clientes</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1>Clientes</h1>
                <form action="" method="post">
                    <!--<div class="form-group">-->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Total de Clientes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios1">
                            Clientes Ativos
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios2">
                            Clientes Inativos
                        </label>
                    </div>

                    <!--</div>-->

                    <div class="card mb-5">
                        <div>
                            <button type="submit" class="btn btn-success" onclick="imprimir()"><i class="fa fa-print"></i> Imprimir</button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>Telefone</th>
                                        <th>Email</th>
                                        <th>Situação</th>
                                        <th>Ação</th>
                                    </tr>
                                    </thead>
                                
                                    <tbody>
                                    <tr>
                                        <td>Matheus Viana</td>
                                        <td>789.456.123-58</td>
                                        <td>(061) 9 9585-6985</td>
                                        <td>Matheus@gmail.com</td>
                                        <td>Ativo</td>
                                        <td>
                                            <a href="#" class="fa fa-file-pdf" title="PDF" onclick="imprimir()"></a>
                                        </td>
                                    </tr>
                                    <td>Matheus Viana</td>
                                    <td>789.456.123-58</td>
                                    <td>(061) 9 9585-6985</td>
                                    <td>Matheus@gmail.com</td>
                                    <td>Ativo</td>
                                    <td>
                                        <a href="#" class="fa fa-file-pdf" title="PDF" onclick="imprimir()"></a>
                                    </td>


                                    </tfoot>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
                    </div>
                </form>
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
                <h5 class="modal-title" id="exampleModalLabel"> Excluir Fornecedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Deseja realmente excluir o fornecedor <strong>COMANDO AUTO-PEÇAS LTDA</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">NÃO</button>
                <button type="button" class="btn btn-primary">SIM</button>
            </div>
        </div>
    </div>
</div>
<!--Detalhar Fornecedor-->
<div class="modal fade" id="mostrar" tabindex="-1" role="dialog" aria-labelledby="excluir" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Informações do Fornecedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
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

<script>

    function imprimir() {
        print()
    }

</script>

</body>

</html>
