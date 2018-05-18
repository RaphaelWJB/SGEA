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
            <li class="breadcrumb-item active">Lançar Faturas</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1>Faturas</h1>


                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-dolly"></i> Faturas
                        <a href="novoFornecedor.php"><button class="btn btn-success float-right">NOVO</button></a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Razão Social</th>
<!--                                    <th>CNPJ</th>-->
                                    <th>Ramo de Atuação</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Razão Social</th>
<!--                                    <th>CNPJ</th>-->
                                    <th>Ramo de Atuação</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Ação</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <tr>
                                    <td>COMANDO AUTO-PEÇAS LTDA</td>
<!--                                    <td>00000000/0001</td>-->
                                    <td>PEÇAS AUTOMOTIVAS</td>
                                    <td>(999)9999-9999</td>
                                    <td>COMANDOAUTOPECAS@COMANDO.COM</td>
                                    <td>
                                        <a href="#" class="fa fa-list-alt text-secondary"  data-toggle="modal" data-target="#modalDetalharFornecerdor" title="Detalhar"></a>
                                        <a href="editarFornecedor.php" class="fa fa-edit align-items-center" title="Alterar"></a>
                                        <a href="#" class="fa fa-trash-alt text-danger"  data-toggle="modal" data-target="#modalExcluirFornecerdor" title="Excluir"></a>
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
<!--Excluir fornecedor-->
<div class="modal fade" id="modalExcluirFornecerdor" tabindex="-1" role="dialog" aria-labelledby="excluirFornecerdor" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Confirmação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Deseja realmente excluir o fornecedor <strong>COMANDO AUTO-PEÇAS LTDA</strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">NÃO</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="alert('Fornecedor excluido com sucesso!')">SIM</button>
            </div>
        </div>
    </div>
</div>

<!--Detalhar Fornecedor-->
<div class="modal fade" id="modalDetalharFornecerdor" tabindex="-1" role="dialog" aria-labelledby="detalharFornecedor" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Informações do Fornecedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Dados da empresa</h5>
                    <div class="ml-2">
                        <p>Codigo: 123</p>
                        <p>Razão Social: COMANDO AUTO-PEÇAS LTDA</p>
                        <p>Nome Fantasia: COMANDO AUTO-PEÇAS</p>
                        <p>CNPJ: 00000000/0001</p>
                        <p>Inscrição Estadual: 545644981132</p>
                        <p>Ramo de Atuação: PEÇAS AUTOMOTIVAS</p>
                        <p>Telefone: (61) 3333-3333</p>
                        <p>Email: COMANDOAUTOPECAS@COMANDO.COM</p>
                        <p>Endereço: Nº 25 - CEILANDIA - BRASILIA-DF - 77.852-258 - EDIFIO TESTE-4º ANDAR</p>
                        <hr>
                    </div>
                <h5>Dados do representante</h5>
                    <div class="ml-2">
                        <p>Nome do Representante: JOAQUIM SANTOS</p>
                        <p>Celular: (061) 9 8595-8965</p>
                        <p>Função: GERENTE</p>
                        <p>Email: JOAQUIM@COMANDO.COM</p>
                    </div>
                
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