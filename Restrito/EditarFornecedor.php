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
            <li class="breadcrumb-item">
                <a href="listarFornecedor.php">Fornecedor</a>
            </li>
            <li class="breadcrumb-item active">Editar</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Alterar Fornecedor</h1>



                <form>
                    <!--CODIGO DO Fornecedor-->
                    <div class="form-row">

                        <!--Codigo do Fornecedor-->
                        <div class="form-group col-3 ">
                            <label for="campoCodigo">Codigo</label>
                            <input value="123" type="text" class="form-control" id="campoCodigo" placeholder="Codigo" disabled>
                        </div>

                    </div>
                    <!--Dados da empresa-->
                    <div class="form-row">

                        <!--Razão Social-->
                        <div class="form-group col-6">
                            <label for="campoRazaoSocial">Razão Social</label>
                            <input type="text" class="form-control" id="campoRazaoSocial" placeholder="Razão Social" value="COMANDO AUTO-PEÇAS LTDA">
                        </div>

                        <!--Nome Fantasia-->
                        <div class="form-group col-6">
                            <label for="campoNomeFantasia">Nome Fantasia</label>
                            <input type="text" class="form-control" id="campoNomeFantasia" placeholder="Nome Fantasia" value="COMANDO AUTO-PEÇAS">
                        </div>

                        <!--CNPJ-->
                        <div class="form-group col-3 ">
                            <label for="campoCnpj">CNPJ</label>
                            <input type="text" class="form-control" id="campoCnpj" placeholder="CNPJ" value="00000000/0001">
                        </div>
                        
                        <!--IE - Inscrição Estadual-->
                        <div class="form-group col-3 ">
                            <label for="campoCnpj">Inscrição Estadual</label>
                            <input type="text" class="form-control" id="campoCnpj" placeholder="Inscrição Estadual" value="545644981132">
                        </div>
                        
                        <!--Ramo de Atuação-->
                        <div class="form-group col-6">
                            <label for="campoRamoAtuacao">Ramo de Atuação</label>
                            <input type="text" class="form-control" id="campoRamoAtuacao" placeholder="Ramo de Atuação" value="PEÇAS AUTOMOTIVAS">
                        </div>

                    </div>

                    <div class="form-row mb-4">

                        <!--Telefone-->
                        <div class="form-group col-3">
                            <label for="inputNomeFantasia">Telefone</label>
                            <input type="text" class="form-control" id="inputNomeFantasia" placeholder="Telefone" value="(61) 3333-3333">
                        </div>
                        <!--Email-->
                        <div class="form-group col-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="COMANDOAUTOPECAS@COMANDO.COM">
                        </div>

                    </div>

                    <!--Dados do endereço da empresa-->
                    <div class="form-row mb-4">

                        <!--CEP-->
                        <div class="form-group col-3">
                            <label for="campoCep">CEP</label>
                            <div class="input-group">
                                <input class="form-control" id="campoCep" type="text" placeholder="CEP" value="77.852-258">
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
                            <input type="text" class="form-control" id="campoBairro" placeholder="Bairro" value="CEILANDIA">
                        </div>

                        <!--Cidade-->
                        <div class="form-group col-md-5">
                            <label for="campoCidade">Cidade</label>
                            <input type="text" class="form-control" id="campoCidade" placeholder="Cidade" value="BRASILIA">
                        </div>

                        <!--Estado-->
                        <div class="form-group col-md-4">
                            <label for="campoEstado">Estado</label>
                            <select id="campoEstado" class="form-control">
                                <option selected>DF</option>
                                <option>...</option>
                            </select>
                        </div>

                        <!--Numero-->
                        <div class="form-group col-2">
                            <label for="campoNumero">Numero</label>
                            <input type="text" class="form-control" id="campoNumero" placeholder="Numero" value="25">
                        </div>

                        <!--Complemento-->
                        <div class="form-group col-6">
                            <label for="campoComplemento">Complemento</label>
                            <input type="text" class="form-control" id="campoComplemento" placeholder="Complemento" value="EDIFIO TESTE-4º ANDAR">
                        </div>

                    </div>


                    <!--Dados do representante da empresa-->
                    <div class="form-row mt-4">

                        <!--Nome do Representante-->
                        <div class="form-group col-6">
                            <label for="campoNomeRepresentante">Nome Representante</label>
                            <input type="text" class="form-control" id="campoNomeRepresentante" placeholder="Nome Representante" value="JOAQUIM SANTOS">
                        </div>

                        <!--Celular do Representante-->
                        <div class="form-group col-4">
                            <label for="campoCelularRepresentante">Celular</label>
                            <input type="text" class="form-control" id="campoCelularRepresentante" placeholder="Celular" value="(061) 9 8595-8965">
                        </div>

                        <!--Função do Representante-->
                        <div class="form-group col-6">
                            <label for="campoFuncaoRepresentante">Função</label>
                            <input type="text" class="form-control" id="campoFuncaoRepresentante" placeholder="Função" value="GERENTE">
                        </div>

                        <!--Email-->
                        <div class="form-group col-6">
                            <label for="campoEmailRepresentante">Email</label>
                            <input type="email" class="form-control" id="campoEmailRepresentante" placeholder="Email" value="JOAQUIM@COMANDO.COM">
                        </div>

                    </div>

                    <div class="form-row mt-4">
                        <div class="form-group col-5">
                            <a href="listarFornecedor.php"><input type="button" class="btn btn-secondary" value="Cancelar"></a>
                            <input type="button" class="btn btn-success" value="Salvar" data-toggle="modal" data-target="#alterar">
                        </div>
                    </div>

                    <div class="modal fade" id="alterar" tabindex="-1" role="dialog" aria-labelledby="alterar" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="alterar"> Alterar Fornecedor</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Deseja realmente alterar dados do fornecedor</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">NÃO</button>
                                    <button type="button" class="btn btn-primary" onclick="alert('Alterado com sucesso')">SIM</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="confirmação" tabindex="-1" role="dialog" aria-labelledby="alterar" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p>Dados alterados com sucesso</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">OK</button>
                                </div>
                            </div>
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
