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
    <link href="css/adm.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
     <link rel="sortcut icon" href="img/logo.png" type=".png" />

    <?php
        include './php/conexao.php';
        $id = $_GET['id'];
        $query = "SELECT * FROM clientes WHERE id ='$id' ";
        $pesquisa = mysqli_query($conexao,$query);
        $dados = mysqli_fetch_assoc($pesquisa);
    ?>
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
                                <h4 class="font-weight-bold text-primary mt-auto mb-auto">Editar cadastro do cliente</h4>
                            </div> 
                        </div>
                        <div class="card-body">
                            <form method="post" action="" id="form_att_cliente">
                                <div class="row">
                                    <div class="col-4">
                                        <label>Nome:</label>
                                        <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $dados['nome']; ?>" required="" autocomplete="off">
                                    </div>
                                    <div class="col-4">
                                        <label>CNPJ:</label>
                                        <input type="text" name="cnpj" id="cnpj" class="form-control" value="<?php echo $dados['cnpj']; ?>" autocomplete="off">
                                    </div>
                                    <div class="col-4">
                                        <label>Telefone:</label>
                                        <input type="text" name="tel" id="tel" class="form-control" value="<?php echo $dados['telefone']; ?>" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 2%;">
                                    <div class="col-4">
                                        <label>Rua:</label>
                                        <input type="text" id="rua" name="rua" class="form-control" value="<?php echo $dados['rua'] ;?>" autocomplete="off">
                                    </div>
                                    <div class="col-4">
                                        <label>CEP:</label>
                                        <input type="text" name="cep" id="cep" class="form-control" onblur="carregaCep()" value="<?php echo $dados['cep']; ?>" autocomplete="off">
                                    </div>
                                    <div class="col-4">
                                        <label>Número:</label>
                                        <input type="text" name="num" id="num" class="form-control" value="<?php echo $dados['numero']; ?>" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 2%;">
                                    <div class="col-3">
                                        <label>Bairro:</label>
                                        <input type="text" id="bairro" name="bairro" class="form-control" value="<?php echo $dados['bairro']; ?>" autocomplete="off">
                                    </div>
                                    <div class="col-2">
                                        <label>Estado:</label>
                                        <input type="text" id="estado" name="estado" class="form-control" value="<?php echo $dados['estado']; ?>" autocomplete="off">
                                    </div>
                                    <div class="col-4">
                                        <label>Cidade:</label>
                                        <input type="text" id="cidade" name="cidade" class="form-control" value="<?php echo $dados['cidade']; ?>" autocomplete="off">
                                    </div>
                                    <div class="col-3">
                                        <label>Complemento:</label>
                                        <input type="text" id="referencia" name="referencia" class="form-control" value="<?php echo $dados['referencia']; ?>" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 2%">
                                    <button class="btn btn-primary ml-auto" type="submit">Alterar cadastro</button>
                                    <button class="btn btn-secondary ml-3 "><a href='index.php' style="color: #fff;text-decoration:none;"> Cancelar</a></button>
                                </div>
                            </form>
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

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>

<!-- Bootstrap core JavaScript-->
<script src="vendor_adm/jquery/jquery.min.js"></script>
<script src="vendor_adm/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor_adm/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js_adm/sb-admin-2.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

<script type="text/javascript">
     $(document).on('submit','#form_att_cliente',function(event){
        event.preventDefault();
        var url =window.location.search.replace("?", "");
        var id = url.split("=")[1];
        var nome = $("#nome").val();
        var cnpj = $("#cnpj").val();
        var cidade = $("#cidade").val();
        var tel = $("#tel").val();
        var rua = $("#rua").val();
        var referencia = $("#referencia").val();
        var num = $("#num").val();
        var cep = $("#cep").val();
        var bairro = $("#bairro").val();
        var estado = $("#estado").val();
        var vData = {id:id, nome:nome, cnpj:cnpj, cidade:cidade,tel:tel,rua:rua,
            referencia:referencia,num:num,cep:cep,estado:estado,bairro:bairro};         
        $.ajax({
            type: "post",
            url: "./php/att_cliente.php",
            data: vData,
            success : function(data){
                console.log(data);
                if (data == "sucesso" ){
                    alert("Cliente atualizado com sucesso!");
                    window.location.href = "index.php";
                }else if(data == "existe" ){
                    alert("CNPJ já cadastrado no sistema!");
                }else{
                    alert("Não foi possivel atualizar o cadastro do cliente. Tente novamente mais tarde!");
                }
            }
          }); 
    });
</script>

<script type="text/javascript">
    $(document).ready(function () { 
        $("#cep").mask('99999-999', {reverse: false});
        $("#tel").mask('(99)99999-9999', {reverse: false});

       
    });

</script>
<script type="text/javascript">
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