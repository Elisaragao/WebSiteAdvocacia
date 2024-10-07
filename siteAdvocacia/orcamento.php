<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orçamento</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
<!--FORMULÁRIO DO ORÇAMENTO-->
    <form action="orcamento_salvar.php" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                <h3>Orçamento</h3>
                
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" placeholder="Nome completo" name="txtNome">
                </div>
                
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" class="form-control" placeholder="Telefone" name="txtTelefone">
                </div>
               
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="txtEmail">
                </div>
               
                <div class="form-group">
                    <label>CPF</label>
                    <input type="text" class="form-control" placeholder="CPF" name="txtCpf" required>
                </div>
               
                <div class="form-group">
                    <label>Turno para contato</label>
                    <select name="selTurno">
                    <option value="MAT">Matutino</option>
                    <option value="VESP">Vespertino</option>
                    <option value="NOT">Noturno</option>
                   </select>
                </div>
                
                <div class="form-group">
                    <label>Vara processual</label>
                    <input type="text" class="form-control" placeholder="Vara processual" name="txtVP">
                </div>
              
                <div class="form-group">
                    <label>Descrição do processo</label>
                    <input type="text" class="form-control" placeholder="Descrição" name="txtDesc">
                </div>
            
                <div class="form-group">
                    <input type="submit" value="Criar" class="btn btn-info" name="btCriar">
                </div>
                </div>
            </div>
        </div>
        </form>
</body>
</html>