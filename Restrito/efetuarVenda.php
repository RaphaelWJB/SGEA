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
<!--            </li>-->
<!--            <li class="breadcrumb-item">-->
<!--                <a href="listarVendas.php">Vendas</a>-->
<!--            </li>-->
            <li class="breadcrumb-item active">Venda</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Venda</h1>



                <form>
                    <!--Dados da empresa-->
                    <div class="form-row">

                        <!--Razão Social-->
                        <div class="form-group col-2">
                            <label for="campoRazaoSocial">Codigo da venda</label>
                            <input type="text" class="form-control"disabled id="campoRazaoSocial" placeholder="Codigo da venda" value="1">
                        </div>
                        <div class="form-group col-2">
                            <label for="campoRazaoSocial">Data da venda</label>
                            <input type="text" class="form-control"disabled id="campoRazaoSocial" placeholder="Data da venda" value="20/04/2018">
                        </div>

                        <div class="form-group col-4">
                            <label for="campoRazaoSocial">Vendedor</label>
                            <input type="text" class="form-control"disabled id="campoRazaoSocial" placeholder="Data da venda" value="RAPHAEL WILKER DE JESUS BRAGA">
                        </div>
                    </div>

                    <div class="form-row mb-3">

                        <!--CNPJ-->
                        <div class="form-group col-3 ">
                            <label for="campoCnpj">CPF</label>
                            <input type="text" class="form-control" id="campoCnpj" placeholder="CPF">
                        </div>

                        <!--Nome Fantasia-->
                        <div class="form-group col-5">
                            <label for="campoNomeFantasia">Cliente</label>
                            <input type="text" class="form-control" id="campoNomeFantasia" placeholder="Cliente">
                        </div>

                        <div class="form-group ml-5">
                            <label for=""></label>
                            <a href="novoCliente.php" class="btn btn-success form-control mt-2 text-white">Novo Cliente</a>
                        </div>
                    </div>

                    <div class="form-row">

                        <!--IE - Inscrição Estadual-->
                        <div class="form-group col-4 ">
                            <label for="campoCnpj">Produto</label>
                            <input type="text" class="form-control" id="campoCnpj" placeholder="Produto">
                        </div>

                        <!--Ramo de Atuação-->
                        <div class="form-group col-2">
                            <label for="campoRamoAtuacao">Estoque</label>
                            <input type="text" class="form-control" id="campoRamoAtuacao" placeholder="Estoque" disabled>
                        </div>

                        <!--Nome do Representante-->
                        <div class="form-group col-2 mr-5">
                            <label for="campoNomeRepresentante">Qtde.</label>
                            <input type="text" class="form-control" id="campoNomeRepresentante" placeholder="Quantidade">
                        </div>

                        <div class="form-group">
                            <label for=""></label>
                            <button type="button" class="btn btn-success form-control mt-2">Adicionar</button>
                        </div>
                    </div>
                        <!--Celular do Representante-->
                        

                    <div class="form-row w-100 h-50">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Produto</th>
                                        <th>Qtde.</th>
                                        <th>Valor unitário</th>
                                        <th>valor Total</th>
                                        <th>Ação</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Produto</th>
                                        <th>Qtde.</th>
                                        <th>Valor unitário</th>
                                        <th>valor Total</th>
                                        <th>Ação</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="fa fa-edit align-items-center"></a>
                                            <a href="#" class="fa fa-trash-alt text-danger"  data-toggle="modal" data-target="#excluir"></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        
                        
                    </div>


                    <div class="form-row">
                        <!--Função do Representante-->
                        <div class="form-group col-2">
                            <label for="campoFuncaoRepresentante">Total</label>
                            <input type="text" class="form-control" id="campoFuncaoRepresentante" placeholder="Total" disabled>
                        </div>

                        <!--Email-->

                        <div class="form-group col-2">
                            <label for="campoEmailRepresentante">Forma de Pagamento</label>
                            <select name="" id="" class="form-control">
                                <option value="">Dinheiro</option>
                                <option value="">Cartão de crédito</option>
                                <option value="">Cartão de crédito</option>
                                <option value="">Dinheiro/Cartão de crédito</option>
                                <option value="">Dinheiro/Cartão de débito</option>
                                <option value="">Cartão de crédito/Cartão de débito</option>
                            </select>
                        </div>
                        

                    </div>


                    <div class="form-row mt-4">
                        <div class="form-group col-5">
                            <a href="listarVendas.php"><button type="reset" class="btn btn-secondary">Limpar</button></a>
                            <input type="button" class="btn btn-success" value="Salvar Venda">
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
