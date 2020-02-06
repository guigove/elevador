<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Elevador</title>

    <link href="vendor_adm/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
    <link href="css/adm.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <link rel="sortcut icon" href="img/logo.jpg" type=".png" />

</head>

<body id="page-top">

    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class="container">
                        <div class="row">
                            <a class="mr-auto sidebar-brand d-flex align-items-center justify-content-center logo_link" href="#">
                                <div class="mx-3 gasparzinho">Elevador</div>
                            </a>
                        </div>
                    </div>
                </nav>

                <div class="container">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <h4 class="font-weight-bold text-primary mt-auto mb-auto">Clientes</h4>
                                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addCliente">Adicionar Cliente</button>
                            </div> 
                        </div>
                        <div class="card-body" style="font-size: 14px">
                            <div class="table-responsive">
                                 <div class="collapse" id="pesquisa">
                                    <div class="card card-body mb-4 ">
                                        <form method="post" action="#" id="form_data">
                                            <div id="pesquisa_data">
                                                <div class="row">
                                                    <div class="col"></div>
                                                    <div class="col-md-4">
                                                        <label class="text-center">De:</label>
                                                        <input type="text" name="inicio" id="inicio" class="form-control" required="" autocomplete="off">
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col"></div>
                                                    <div class="col-md-4">
                                                        <label class="text-center">Até:</label>
                                                        <input type="text" name="fim" id="fim" class="form-control" required="" autocomplete="off">
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-md-2">
                                                    <button class="btn btn-block btn-success ml-auto mt-2" type="submit" id="btn_data">Pesquisar</button>
                                                </div>
                                                <div class="col-md-2">
                                                    <button class="btn btn-block btn-primary mr-auto mt-2" type="button" id="resetar" onclick="">Mostrar tudo</button>
                                                </div>
                                                <div class="col"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                               <table class="display compact " id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>CNPJ</th>
                                            <th>Telefone</th>
                                            <th>Rua</th>
                                            <th>Número</th>
                                            <th>CEP</th>
                                            <th>Bairro</th>
                                            <th>Complemento</th>
                                            <th>Cidade</th>
                                            <th>Estado</th>
                                            <th>Editar</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th colspan="12"></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white  ">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto ">
                        <span>Copyright &copy; Elevador </span>
                    </div>
                </div>
            </footer>

        </div>
    </div>

     <div class="modal fade " id="addCliente" tabindex="-1" role="dialog" aria-labelledby="addCliente" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 style="margin-bottom: 0px;">Adicionar Cliente</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="post" action="" id="form_cliente">

                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-4">
                                <label>Nome:</label>
                                <input type="text" id="nome" name="nome" class="form-control" required="" autocomplete="off">
                            </div>
                            <div class="col-4">
                                <label>CNPJ:</label>
                                <input type="text" name="cnpj" id="cnpj" class="form-control" autocomplete="off">
                            </div>
                            <div class="col-4">
                                <label>Telefone</label>
                                <input type="text" name="tel" id="tel" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <label>Rua:</label>
                                <input type="text" id="rua" name="rua" class="form-control" autocomplete="off">
                            </div>
                            <div class="col-3">
                                <label>Número:</label>
                                <input type="text" name="num" id="num" class="form-control" autocomplete="off">
                            </div>
                            <div class="col-3">
                                <label>CEP:</label>
                                <input type="text" id="cep" name="cep" class="form-control" onblur="carregaCep()" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>Cidade:</label>
                                <input type="text" id="cidade" name="cidade" class="form-control" autocomplete="off">
                            </div>
                            <div class="col">
                                <label>Bairro:</label>
                                <input type="text" id="bairro" name="bairro" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-row">    
                            <div class="col-4">
                                <label>Estado:</label>
                                <input type="text" id="estado" name="estado" class="form-control" autocomplete="off">
                            </div>
                            <div class="col">
                                <label>Complemento:</label>
                                <input type="text" id="referencia" name="referencia" class="form-control" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit" id="btn_add_adm" >Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

<!-- Bootstrap core JavaScript-->
<script src="vendor_adm/jquery/jquery.min.js"></script>
<script src="vendor_adm/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor_adm/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js_adm/sb-admin-2.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

<script type="text/javascript">
    
    $('#dataTable').DataTable({
        'processing': true,
        'serverSide': true,
        'ajax': {
            'url': "./php/tabela_cliente.php",
            'type': "POST",
        },
        'lengthMenu': [
            [5, 10, 25, 50],
            [5, 10, 25, 50]
        ],
        'iDisplayLength': 10,
        'paging': true,
        'lengthChange': true,
        'searching': true,
        'ordering': false,
        'info': true,
        'autoWidth': true,
        'select': true,
        'oLanguage': {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            },
            "select": {
                "rows": {
                    "_": "Selecionado %d linhas",
                    "0": "Nenhuma linha selecionada",
                    "1": "Selecionado 1 linha"
                }
            }
        }
    });

</script>
<script type="text/javascript">
    $(document).ready(function () { 
        $("#cep").mask('99999-999', {reverse: false});
        $("#tel").mask('(99)99999-9999', {reverse: false});
        $("#cnpj").mask("99.999.999/9999-99", {reverse: false});
    });
</script>
<script type="text/javascript">
    function removerCliente(e){
        if (confirm("Tem certeza que deja excluir esse cliente?")) {
            var id = e;           
            $.ajax({
                type: "post",
                url: "./php/remover_cliente.php",
                data:{id:id},
                success : function(data){
                    if (data == "sucesso" ){
                        alert("Cliente removido com sucesso!");
                        window.location.reload();
                    }else{
                        alert("Não foi possivel remover o cliente. Tente novamente mais tarde!");
                    } 
                }
              });
        }   
    };
    $(document).on('submit','#form_cliente',function(event){
        event.preventDefault();
        var dados =  $("#form_cliente").serialize();          
        $.ajax({
            type: "post",
            url: "./php/add_cliente.php",
            data: dados,
            success : function(data){
                if (data == "sucesso" ){
                    alert("Cliente adicionado com sucesso!");
                    window.location.reload();
                }else if(data == "existe" ){
                    alert("CNPJ já cadastrado no sistema!");
                }else{
                    alert("Não foi possivel adicionar o cliente. Tente novamente mais tarde!");
                }
            }
          }); 
    });
    function carregaCep(){
        var cep = $("#cep").val().replace("-","");
        $.ajax({
            type: "post",
            url: "./php/consulta_cep.php",
            data: {cep: cep},
            success : function(data){
                var obj = JSON.parse(data);
                console.log(obj);
                $("#cidade").val(obj.localidade);
                $("#estado").val(obj.uf);
                $("#rua").val(obj.logradouro);
                $("#bairro").val(obj.bairro);

            }
         }); 
    }
</script>

</html>