<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SGEA - Colaborador</title>
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

            <li class="breadcrumb-item active">Cadastros</li>
            <li class="breadcrumb-item active">Colaborador</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1>Colaborador</h1>


                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-users"></i> Colaborador
                        <a href="novoColaborador.php"><button class="btn btn-success float-right col-1">NOVO</button></a>
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
                                    <th>Acesso</th>
                                    <th>Situação</th>
                                    <th>&nbsp;Ação</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Matheus Viana</td>
                                    <td>789.456.123-58</td>
                                    <td>(061) 9 9585-6985</td>
                                    <td>Matheus@gmail.com</td>
                                    <td>Colaborador</td>
                                    <td>Ativo</td>
                                    <td>
                                        <a href="#" class="fa fa-list-alt text-secondary"  data-toggle="modal" data-target="#mostrar" title="Detalhes"></a>
                                        <a href="editarColaborador.php" class="fa fa-edit align-items-center" title="Editar"></a>
                                        <a href="#" class="fa fa-ban text-danger"  data-toggle="modal" data-target="#modalInativarColaborador" data-placement="top" title="Inativar"></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
<!--                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<!--Inativar Colaborador-->
<div class="modal fade" id="modalInativarColaborador" tabindex="-1" role="dialog" aria-labelledby="inativarColaborador" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Confirmação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Deseja realmente inativar o colaborador <strong>Matheus Viana</strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">NÃO</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal"onclick="alert('Colaborador inativado com sucesso!')">SIM</button>
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

                <p>Codigo: 123</p>
                <p>Nome: Matheus Viana</p>
                <p>CPF: 789.456.123-58</p>
                <p>Data de Nascimento: 13/10/1995</p>
                <p>Telefone: (061) 9 9585-6985</p>
                <p>Email: Matheus@gmail.com</p>
                <p>Endereço: nº 24 - Setor 10 - Aguas lindas - GO - 72.154-589</p>
                <p>Usuario: Matheus.Viana</p>
                <p>Acesso: Proprietário</p>
                <p>Situação: Ativo</p>
                
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
</div>
</body>

</html>