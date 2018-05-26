<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SGEA - Fatura</title>
    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
            <li class="breadcrumb-item">
                <a href="listarFaturas.php">Lançar Faturas</a>
            </li>
            <li class="breadcrumb-item active">Alterar</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Alterar Fatura</h1>




                                <form>

                                    <div class="form-row">
                                    <div class="form-row">

                                        <!--Empresa Devedora-->
                                        <div class="form-group col-md-6 col-sm-6">
                                            <label for="campoRazaoSocial">Empresa Devedora</label>
                                            <input type="text" class="form-control" id="empresadev" value="COMANDO AUTO-PEÇAS LTDA" placeholder="Empresa Devedora">
                                        </div>

                                        <!--Data.Vencimento-->
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label for="inputNomeFantasia">Data.Vencimento</label>
                                            <input type="text" class="form-control" value="	25/10/2018" id="datavencimento" placeholder="Data.Vencimento">
                                        </div>

                                        <!--Alerta-->
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label for="inputNomeFantasia">Dias p/ alerta</label>
                                            <input type="text" class="form-control" id="inputdiaspalerta" placeholder="Dias p/ alerta">
                                        </div>

                                        <!--IE - Descrição da Fatura-->
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label>Descrição da Fatura</label>
                                            <textarea cols="30" rows="3" name="comentários" id="descricaofatura" placeholder="Descrição da Fatura"></textarea></div>
                                            </div>
                </div>


                                    <div class="form-row mb-4">

                                        <!--Valor da Fatura-->
                                        <div class="form-group">
                                            <label for="inputNomeFantasia">Valor da Fatura</label>
                                            <input type="text"  class="form-control" id="inputvalorfatura" placeholder="Valor ">
                                        </div>
                </div>
                                    <div class="form-row mt-4">
                                        <div class="form-group">
                                            <a href="listarFaturas.php"><input type="button" class="btn btn-success" value="Salvar" onclick="alert('Fatura cadastrada com sucesso!') "></a>
                                            <a href="listarFaturas.php"><input type="button" class="btn btn-secondary" value="Cancelar"></a>
                                            </div>
                                    </div>

                                </form>


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
                    <!-- Custom scripts for all pages-->
                    <script src="../js/sb-admin.min.js"></script>
                </div>
                </body>

                </html>
