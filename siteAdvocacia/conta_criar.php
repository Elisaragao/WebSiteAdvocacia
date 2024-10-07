<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>
    <!-- REFERENCIA AO BOOTSTRAP -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <style>
    </style>
</head>
<body>
    <!--FORMULÁRIO DE CRIAÇÃO DA CONTA -->
    <form name="formCriarConta" action="conta_salvar.php" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
            
                <h3>Criar conta</h3>
                
                <div class="form-group"> 
                <label>Nome</label>
                <input type="text" class="form-control" placeholder="Nome completo" name="txtNome"> 
                </div>
                
                <div class="form-group"> 
                <label>Número da OAB</label>
                <input type="text" class="form-control" placeholder="Número OAB" name="txtOab" required> 
                </div>
                
                <div class="form-group"> 
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Email" name="txtEmail"> 
                </div>
                
                <div class="form-group"> 
                <label>CPF</label>
                <input type="text" class="form-control" placeholder="Cpf" name="txtCpf"> 
                </div>

                <div class="form-group">
                <input type="submit" value="Criar" class="btn btn-info" name="btCriar">
                </div>

                   
            </div>    
                </div>
                    </div>
                        </div>
                            </form>
</body>
</html>