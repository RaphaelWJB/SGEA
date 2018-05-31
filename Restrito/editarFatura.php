<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SGEA - Editar Fatura</title>
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
            <li class="breadcrumb-item active">
                <a href="listarFaturas.php">Lançar Faturas</li></a>
            <li class="breadcrumb-item">Editar</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Alterar Fatura</h1>
                <form>
                    <!--Codigo da fatura-->
                    <div class="form-row">
                        <!--Codigo da fatura-->
                        <div class="form-group col-2">
                            <label for="campoCodFatura">Código da fatura</label>
                            <input type="text" class="form-control" id="campoCodFatura" value="1" disabled>
                        </div>
                    </div>

                    <!--Nome, Marca e Descrição do produto-->
                    <div class="form-row">
                        <!--Empresa Devedora-->
                        <div class="form-group col-4 ">
                            <label for="campoEmpresaDevedora">Empresa Devedora</label>
                            <input type="text" class="form-control" id="campoEmpresaDevedora" value="COMANDO AUTO-PEÇAS LTDA">
                        </div>

                        <!--Data de vencimento-->
                        <div class="form-group col-2">
                            <label for="campoDtaVenc">Data Vencimento</label>
                            <input type="text" class="form-control" id="campoDtaVenc" value="25/10/2018">
                        </div>

                        <!--Dias para alertas-->
                        <div class="form-group col-2 ">
                            <label for="campoDtaVenc">Dias p/ alerta</label>
                            <input type="text" class="form-control" id="campoDtaVenc" value="15">
                        </div>
                    </div>

                    <div class="form-row">
                        <!--Descrição da fatura-->
                        <div class="form-group col-6">
                            <label for="campoDescFatura">Descrição da fatura</label>
                            <textarea name="" id="campoDescFatura" cols="" rows="5" class="form-control" style="resize: none">Fatura referente aos escapamentos da Volkswagen.</textarea>
                        </div>
                    </div>

                    <!--Valor Fatura-->
                    <div class="form-row">
                        <!--Valor da Fatura-->
                        <div class="form-group col-3">
                            <label for="campoValorFatura">Valor da Fatura</label>
                            <input type="text" class="form-control" id="campoValorFatura" value="789,89">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-5">
                            <a href="listarFaturas.php"><input type="button" class="btn btn-secondary" value="Cancelar"></a>
                            <a href="listarFaturas.php"><input type="button" class="btn btn-success" value="Salvar" onclick="alert('Fatura alterada com sucesso!')"></a>
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
