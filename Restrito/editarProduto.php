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
            <li class="breadcrumb-item active">Cadastros</li>
            <li class="breadcrumb-item">
                <a href="listarProdutos.php">Produtos</a>
            </li>
            <li class="breadcrumb-item active">Editar</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Editar de Produto</h1>


                <form class="">

                    <!--Codigo do produto-->
                    <div class="form-row">
                        <!--Codigo do produto-->
                        <div class="form-group col-2">
                            <label for="campoCodProd">Código do produto</label>
                            <input type="text" class="form-control" id="campoCodProd" value="1" disabled>
                        </div>
                    </div>

                    <!--Nome, Marca e Descrição do produto-->
                    <div class="form-row">
                        <!--Nome do produto-->
                        <div class="form-group col-4 ">
                            <label for="campoCnpj">Nome do produto</label>
                            <input type="text" class="form-control" id="campoCnpj" placeholder="Nome do produto" value="Oleo de motor">
                        </div>

                        <!--Marca do produto-->
                        <div class="form-group col-4 ">
                            <label for="campoCnpj">Marca do produto</label>
                            <input type="text" class="form-control" id="campoCnpj" placeholder="Marca do produto" value="Grid">
                        </div>

                        <!--Descrição do produto-->
                        <div class="form-group col-8">
                            <label for="campoCnpj">Descrição do produto</label>
                            <textarea name="" id="" cols="" rows="" class="form-control" style="resize: none" placeholder="Descrição do produto">Oleo de motor - Grid carros tal</textarea>
                        </div>
                    </div>

                    <!--Qtde. Produtos e Qtde. p/ alertas do produto-->
                    <div class="form-row">

                        <!--Qtde. Produtos do produto-->
                        <div class="form-group col-3">
                            <label for="campoRamoAtuacao">Qtde. Produto</label>
                            <input type="text" class="form-control" id="campoRamoAtuacao" placeholder="Qtde. Produto" value="220">
                        </div>

                        <!--Qtde. p/ alertas do produto-->
                        <div class="form-group col-3">
                            <label for="inputNomeFantasia">Qtde. p/ alerta</label>
                            <input type="text" class="form-control" id="inputNomeFantasia" placeholder="Qtde. p/ alerta" value="25">
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
                                <option value="perecivel" onclick="cadastrarInstituicao();" selected>Perecivel</option>
                            </select>
                        </div>

                        <!--Validade do produto-->
                        <div class="form-group  ml-2">
                            <label for="campoValidade" id="lblValidade" style="display: block">Data de Vencimento</label>
                            <input type="date" class="form-control" id="campoValidade" style="display: block" value="">
                        </div>

                    </div>


                    <!--Fornecedor, Vlr. Compra, Vlr. Venda do produto-->
                    <div class="form-row mb-4">

                        <!--Fornecedor do produto-->
                        <div class="form-group col-4">
                            <label for="campoBairro">Fornecedor</label>
                            <input type="text" class="form-control" id="campoBairro" placeholder="Fornecedor" value="Comando">
                        </div>

                        <!--Vlr. Compra do produto-->
                        <div class="form-group col-2">
                            <label for="campoCidade">Valor de Compra</label>
                            <input type="text" class="form-control" id="campoCidade" placeholder="Valor de Compra" value="12">
                        </div>

                        <!--Vlr. Venda do produto-->
                        <div class="form-group col-2">
                            <label for="campoNumero">Valor de Venda</label>
                            <input type="text" class="form-control" id="campoNumero" placeholder="Valor de Venda" value="18">
                        </div>
                    </div>
            </div>
        </div>
        <div class="form-group">
            <a href="listarProdutos.php"><input type="button" class="btn btn-secondary" value="Cancelar"></a>
            <input type="button" class="btn btn-success" value="Salvar" data-toggle="modal" data-target="#alterar">
        </div>
        </form>

    </div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->


<!--                Modal de confirmação de alteração-->
<div class="modal fade" id="alterar" tabindex="-1" role="dialog" aria-labelledby="alterar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="alterar"> Confirmação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Deseja realmente alterar o produto <strong>Oleo de motor</strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">NÃO</button>
                <a href="listarProdutos.php" onclick="alert('Produto alterado com sucesso!')"><button type="button" class="btn btn-primary">SIM</button></a>
            </div>
        </div>
    </div>
</div>


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
