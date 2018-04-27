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
                <a href="listarProdutos.php">Produtos</a>
            </li>
            <li class="breadcrumb-item active">Efetuar Compras</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Nova Compra</h1>



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
                    </div>

                    <div class="form-row mb-3">

                        <!--CNPJ-->
                        <div class="form-group col-3 ">
                            <label for="campoCnpj">CNPJ</label>
                            <input type="text" class="form-control" id="campoCnpj" placeholder="CNPJ">
                        </div>

                        <!--Nome Fantasia-->
                        <div class="form-group col-5">
                            <label for="campoNomeFantasia">Fornecedor</label>
                            <input type="text" class="form-control" id="campoNomeFantasia" placeholder="Fornecedor">
                        </div>

                        <div class="form-group ml-5">
                            <label for=""></label>
                            <a href="novoFornecedor.php" class="btn btn-success form-control mt-2 text-white">Novo Fornecedor</a>
                        </div>
                    </div>

                    <div class="form-row">

                        <!--IE - Inscrição Estadual-->
                        <div class="form-group col-2 ">
                            <label for="campoCnpj">Produto</label>
                            <input type="text" class="form-control" id="campoCnpj" placeholder="Produto">
                        </div>

                        <!--IE - Inscrição Estadual-->
                        <div class="form-group col-2 ">
                            <label for="campoCnpj">Marca</label>
                            <input type="text" class="form-control" id="campoCnpj" placeholder="Marca">
                        </div>
                        
                        <!--Nome do Representante-->
                        <div class="form-group col-2">
                            <label for="campoNomeRepresentante">Qtde.</label>
                            <input type="text" class="form-control" id="campoNomeRepresentante" placeholder="Quantidade">
                        </div>
                        
                        <!--Ramo de Atuação-->
                        <div class="form-group col-2">
                            <label for="campoRamoAtuacao">Estoque</label>
                            <input type="text" class="form-control" id="campoRamoAtuacao" placeholder="Estoque" disabled>
                        </div>


                        <div class="form-group ml-5">
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
                                        <th>Codigo</th>
                                        <th>Produto</th>
                                        <th>Marca</th>
                                        <th>Qtde.</th>
                                        <th>Fornecedor</th>
                                        <th>Ação</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
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
                            <input type="text" class="form-control" id="campoFuncaoRepresentante" placeholder="0,00" disabled>
                        </div>

                        <!--Email-->

                        <div class="form-group col-2">
                            <label for="campoEmailRepresentante">Forma de Pagamento</label>
                            <select name="" id="" class="form-control">
                                <option value="">Dinheiro</option>
                                <option value="">Cartão de crédito</option>
                                <option value="">Cartão de débito</option>
                            </select>
                        </div>

                    </div>


                    <div class="form-row mt-4">
                        <div class="form-group col-5">
                            <a href="listarProdutos.php"><input type="button" class="btn btn-secondary" value="Cancelar"></a>
                            <input type="button" class="btn btn-success" value="Salvar Compra">
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
