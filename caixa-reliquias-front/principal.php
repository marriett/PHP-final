<!DOCTYPE html>
<html>
<head>
    <<meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-6">
                <ul>
                    <li> <span class="glyphicon glyphicon-th-list"></span> Crie listas e cadastre seus itens colecionáveis.</li>
                    <li> <span class="glyphicon glyphicon-tags"></span> Organize por categorias e faça consultas.</li>
                    <li> <span class="glyphicon glyphicon-search"></span> Consulte rapidamente sua coleção.</li>
                </ul>
            </div>
            <div class="col-lg-5 col-sm-6">
                    <h2>Comece a usar:</h2></br>
                <form action="cadastroUsuario.php" method="POST">
                    <input class="form-control" type='text' name='nome' placeholder='Nome' required><br>
                    <input class="form-control" type='text' name='sobrenome' placeholder='Sobrenome' required><br>
                    <input class="form-control" type='mail' name='email' placeholder='E-mail' required><br>
                    <input class="form-control" type='text' name='login' placeholder='Usuário' required><br>
                    <input class="form-control" type='password' name='senha' placeholder='Senha' required><br>
                    <input class="form-control" type="submit" name="cadastrar" value="Cadastrar" required>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php

?>