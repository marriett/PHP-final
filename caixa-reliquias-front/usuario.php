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
                <li> <a href="alterarNovo.php"><span class="glyphicon glyphicon-chevron-right"></span> Alterar item</a></li>
                <li> <a href="excluirNovo.php"><span class="glyphicon glyphicon-chevron-right"></span> Excluir item</a></li>
            </ul>
        </div>
        <div class="col-lg-5 col-sm-6">

            <?php

            /* CADASTRAR NOVO ITEM */
            echo'
            <h2 style=margin-top:auto;>Novo Item:</h2></br>
            <form action="item.php" method="POST" id="item">
                <label>Nome:</label>
                <input class=form-control type=text name="nome" required><br>
                <label>Descrição:</label>
                <textarea form=item rows=4 cols=50 class=form-control type=text name="descricao" required></textarea><br>
                
                <label>Estado:</label>
                <select class=form-control name="estado">
                    <option value=novo>Novo</option>                    
                    <option value=usado>Usado</option>
                </select>
                <br>
                <label>Categoria:</label>
                <select class=form-control name="categoria">
                    <option value=livro>Livro</option>                    
                    <option value=cd>CD</option>
                    <option value=dvd>DVD</option>
                    <option value=vinil>Vinil</option>
                    <option value=miniatura>Miniatura</option>
                    <option value=hq>HQ</option>
                </select>
                <br>

                <button type="submit" class=btn btn-default btn-sm style=width:100%>Cadastrar</button>
            </form>
            <br>
            ';
                
            ?>

        </div>
    </div>
</div>
</body>
</html>