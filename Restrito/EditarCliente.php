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
                <a href="listarCliente.php">Cliente</a>
            </li>

            <li class="breadcrumb-item active">Editar</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Alterar Cliente</h1>

                <form>

                    <!--CODIGO DO COLABORADOR-->
                    <div class="form-row">

                        <!--Codigo do usuario-->
                        <div class="form-group col-3 ">
                            <label for="campoCodigo">Codigo</label>
                            <input type="text" class="form-control" id="campoCodigo" placeholder="Codigo" disabled value="123">
                        </div>

                    </div>

                    <!--DADOS DO Cliente-->
                    <div class="form-row">

                        <!--Nome do Cliente-->
                        <div class="form-group col-6 ">
                            <label for="campoNome">Nome</label>
                            <input value="Matheus Viana" type="text" class="form-control" id="campoNome" placeholder="Nome">
                        </div>

                        <!--CPF do Cliente-->
                        <div class="form-group col-3 ">
                            <label for="campoCpf">CPF</label>
                            <input value="789.456.123-58" type="text" class="form-control" id="campoCpf" placeholder="CPF">
                        </div>

                        <!--Data de Nascimento do Cliente-->
                        <div class="form-group col-3 ">
                            <label for="campoDataNascimento">Data de Nascimento</label>
                            <input value="13/10/1995" type="text" class="form-control" id="campoDataNascimento" placeholder="Data de Nascimento">
                        </div>

                    </div>

                    <div class="form-row">

                        <!--Telefone do Cliente-->
                        <div class="form-group col-3 ">
                            <label for="campoTelefone">Telefone</label>
                            <input value="(061) 9 9585-6985" type="text" class="form-control" id="campoTelefone" placeholder="Telefone">
                        </div>

                        <!--Email do Cliente-->
                        <div class="form-group col-6 ">
                            <label for="campoEmail">Email</label>
                            <input value="Matheus@gmail.com" type="text" class="form-control" id="campoEmail" placeholder="Email">
                        </div>
                    </div>

                    <!--ENDEREÇO DO Cliente-->
                    <div class="form-row mt-4">

                        <!--CEP-->
                        <div class="form-group col-3">
                            <label for="campoCep">CEP</label>
                            <div class="input-group">
                                <input value="72.154-589" class="form-control" id="campoCep" type="text" placeholder="CEP">
                                <span class="input-group-append">
                                 <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                 </button>
                                </span>
                            </div>
                        </div>

                        <!--Bairro-->
                        <div class="form-group col-4">
                            <label for="campoBairro">Bairro</label>
                            <input value="Setor 10" type="text" class="form-control" id="campoBairro" placeholder="Bairro">
                        </div>

                        <!--Cidade-->
                        <div class="form-group col-md-5">
                            <label for="campoCidade">Cidade</label>
                            <input value="Aguas lindas" type="text" class="form-control" id="campoCidade" placeholder="Cidade">
                        </div>

                        <!--Estado-->
                        <div class="form-group col-md-4">
                            <label for="campoEstado">Estado</label>
                            <select id="campoEstado" class="form-control">
                                <option selected>Estado</option>
                                <option>GO</option>
                            </select>
                        </div>

                        <!--Numero-->
                        <div class="form-group col-2">
                            <label for="campoNumero">Numero</label>
                            <input value="24" type="text" class="form-control" id="campoNumero" placeholder="Numero">
                        </div>

                        <!--Complemento-->
                        <div class="form-group col-6">
                            <label for="campoComplemento">Complemento</label>
                            <input value="" type="text" class="form-control" id="campoComplemento" placeholder="Complemento">
                        </div>
                    </div>

                    <!--Botões-->
                    <div class="form-row mt-4">
                        <div class="form-group col-5">
                            <a href="listarCliente.php"><input type="button" class="btn btn-secondary" value="Cancelar"></a>
                            <input type="button" class="btn btn-success" value="Salvar">
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
