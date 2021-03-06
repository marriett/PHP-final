<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<?php
include_once("logout.php");
?>


<div class="container">
    <div class="row">
        <div class="col-lg-7 col-sm-6">
            
                
            <h2 class="subtitulo">Escolha ação:</h2>
            
            <ul>
                <li> <a href="cadastrarItem.php"><span class="glyphicon glyphicon-chevron-right"></span> Novo item</a></li>
                <li> <a href="listarItem.php"><span class="glyphicon glyphicon-chevron-right"></span> Listar itens</a></li>
                <li> <a href="alterarItem.php"><span class="glyphicon glyphicon-chevron-right"></span> Alterar item</a></li>
                <li> <a href="excluirItem.php"><span class="glyphicon glyphicon-chevron-right"></span> Excluir item</a></li>
            </ul>
        </div>
        <div class="col-lg-5 col-sm-6">

            
            <h2 style=margin-top:auto;>Alterar Item:</h2></br>
            <form action=# method=POST id=item>
                <label>Nome atual:</label>
                <input class=form-control type=text name=nome required><br>
                label>Novo nome:</label>
                <input class=form-control type=text name=altNome required><br>
                <label>Nova descrição:</label>
                <textarea form=item rows=4 cols=50 class=form-control type=text name=descricao required></textarea><br>
                
                <label>Novo estado:</label>
                <select class=form-control>
                    <option value=novo>Novo</option>                    
                    <option value=usado>Usado</option>
                </select>
                <br>
                <label>Nova categoria:</label>
                <select class=form-control>
                    <option value=livro>Livro</option>                    
                    <option value=cd>CD</option>
                    <option value=dvd>DVD</option>
                    <option value=vinil>Vinil</option>
                    <option value=miniatura>Miniatura</option>
                    <option value=hq>HQ</option>
                </select>
                <br>

                <input class="form-control" type="submit" name="alterar" value="Alterar" required>
            </form>
            <br>
            

        </div>
    </div>
</div>

<?php
    include_once("rodape.php");
?>
</body>
</html>