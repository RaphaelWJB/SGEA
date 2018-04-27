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
    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <style>

        #campoValidade, #lblValidade{
            display: none;
        }
    </style>

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
            <li class="breadcrumb-item active">Cadastrar</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Cadastro de Produto</h1>


                <form class="">

                    <div class="form-row">
                        <!--Importação de arquivo XML-->
                        <div class="form-group">
                            <label for="campoImportXml">Importação de XML: </label>
                            <input type="file" class="custom-file" id="campoImportXml">
                        </div>
                    </div>

                    <!--Codigo do produto-->
                    <div class="form-row">
                        <!--Codigo do produto-->
                        <div class="form-group col-2">
                            <label for="campoCodProd">Código do produto</label>
                            <input type="text" class="form-control" id="campoCodProd" value="2" disabled>
                        </div>
                    </div>

                    <!--Nome, Marca e Descrição do produto-->
                    <div class="form-row">
                        <!--Nome do produto-->
                        <div class="form-group col-4 ">
                            <label for="campoCnpj">Nome do produto</label>
                            <input type="text" class="form-control" id="campoCnpj" placeholder="Nome do produto">
                        </div>

                        <!--Marca do produto-->
                        <div class="form-group col-4 ">
                            <label for="campoCnpj">Marca do produto</label>
                            <input type="text" class="form-control" id="campoCnpj" placeholder="Marca do produto">
                        </div>

                        <!--Descrição do produto-->
                        <div class="form-group col-8">
                            <label for="campoCnpj">Descrição do produto</label>
                            <textarea name="" id="" cols="" rows="" class="form-control" style="resize: none" placeholder="Descrição do produto"></textarea>
                        </div>
                    </div>

                    <!--Qtde. Produtos e Qtde. p/ alertas do produto-->
                    <div class="form-row">

                        <!--Qtde. Produtos do produto-->
                        <div class="form-group col-3">
                            <label for="campoRamoAtuacao">Qtde. Produto</label>
                            <input type="text" class="form-control" id="campoRamoAtuacao" placeholder="Qtde. Produto">
                        </div>

                        <!--Qtde. p/ alertas do produto-->
                        <div class="form-group col-3">
                            <label for="inputNomeFantasia">Qtde. p/ alerta</label>
                            <input type="text" class="form-control" id="inputNomeFantasia" placeholder="Qtde. p/ alerta">
                        </div>

                        <!--Qtde. Estoque produto-->
                        <div class="form-group col-2">
                            <label for="inputNomeFantasia">Qtde. Estoque</label>
                            <input type="text" disabled class="form-control" id="inputNomeFantasia" placeholder="Qtde. p/ alerta" value="220">
                        </div>

                    </div>

                    <!--Tipo e validade do produto-->
                    <div class="form-row">

                        <!--Tipo do produto-->
                        <div class="form-group mr-2">
                            <label for="campoCidade">Tipo</label>
                            <select name="" id="" class="form-control">
                                <option value="" selected>LT</option>
                                <option value="">UN</option>
                                <option value="">CX</option>
                                <option value="">PC</option>
                            </select>
                        </div>

                        <!--Categoria do produto-->
                        <div class="form-group">
                            <label for="tipo">Categoria</label>
                            <select name="categoria" id="categoria" class="form-control">
                                <option value="naoPerecivel" onclick="cadastrarInstituicao();">Não Perecivel</option>
                                <option value="perecivel" onclick="cadastrarInstituicao();">Perecivel</option>
                            </select>
                        </div>

                        <!--Validade do produto-->
                        <div class="form-group  ml-2">
                            <label for="campoValidade" id="lblValidade">Data de Vencimento</label>
                            <input type="date" class="form-control" id="campoValidade">
                        </div>

                    </div>


                    <!--Fornecedor, Vlr. Compra, Vlr. Venda do produto-->
                    <div class="form-row mb-4">

                        <!--Fornecedor do produto-->
                        <div class="form-group col-4">
                            <label for="campoBairro">Fornecedor</label>
                            <input type="text" class="form-control" id="campoBairro" placeholder="Fornecedor">
<!--                            <i class="far fa-plus-square text-success" style="font-size: 2em ;"></i>-->
                        </div>
                        <div class="form-group mr-4 mt-5">
                            <label for="campoCidade"></label>
                            <a href=""><i class="far fa-plus-square text-success" style="font-size: 1.5em ;"></i></a>
                        </div>

                        <!--Vlr. Compra do produto-->
                        <div class="form-group col-2">
                            <label for="campoCidade">Valor de Compra</label>
                            <input type="text" class="form-control" id="campoCidade" placeholder="Valor de Compra">
                        </div>

                        <!--Vlr. Venda do produto-->
                        <div class="form-group col-2">
                            <label for="campoNumero">Valor de Venda</label>
                            <input type="text" class="form-control" id="campoNumero" placeholder="Valor de Venda">
                        </div>

                        <!--Adicionar produtos-->
                        <div class="form-group col-2 mt-1">
                            <button class="btn btn-success mt-4">Adicionar</button>
                        </div>
                    </div>

                    <!--Tabela de produto-->
                    <div class="form-row col-12">

                        <div class="card mb-3">
                            

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Produto</th>
                                            <th>Marca</th>
                                            <th>Qtde. Produto</th>
                                            <th>Tipo</th>
                                            <th>Categoria</th>
                                            <th>Data de Vencimento</th>
                                            <th>Fornecedor <a href=""><i class="far fa-plus-square text-success"></i></a></th>
                                            <th>Ação</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Oleo de motor</td>
                                            <td>Grid</td>
                                            <td>120</td>
                                            <td>LT</td>
                                            <td>Perecivel</td>
                                            <td>25/07/2018</td>
                                            <td>Comando</td>
                                            <td>
                                                <a href="#" class="fa fa-edit align-items-center"></a>
                                                <a href="#" class="fa fa-trash-alt text-danger"  data-toggle="modal" data-target="#excluir"></a>
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

            <!--            <div class="form-row mt-4">-->
            <div class="form-group col-5">
                <a href="listarProdutos.php"><input type="button" class="btn btn-secondary" value="Cancelar"></a>
                <input type="button" class="btn btn-success" value="Salvar">
            </div>
            <!--            </div>-->

            </form>

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


    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>


    <script>

        function cadastrarInstituicao() {
            //Abre a função que mostra o campo CadastrarInstituicao se a opção "Instituição não encontrada" no select instituicao.
            var categoria = document.getElementById("categoria").value;
            if (categoria === 'perecivel') {
                document.getElementById("campoValidade").style.display = "block";
                document.getElementById("lblValidade").style.display = "block";
            } else {
                document.getElementById("campoValidade").style.display = "none";
                document.getElementById("lblValidade").style.display = "none";
            }

            if (categoria === 'naoPerecivel') {
                document.getElementById("campoValidade").style.display = "none";
                document.getElementById("lblValidade").style.display = "none";
            }
        }//Fecha a função

    </script>


</div>
</body>

</html>
