<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja bem vindo ao admin do Território</title>
    <?php
        include('conect.php');
        error_reporting(E_ERROR);
        $ter = $_POST['territorio'];
    ?>
</head>
<body>
<div class="container" id="loginform">
    <h1>Gerencimaneto do território</h1>
    <form method="POST" action="cadastro.php">
        <ul>
            <li><label>Login:</label><input type="text" name="login" id="login"><br></li>
            <li><label>Senha:</label><input type="password" name="senha" id="senha"></li>
            <li> <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"></li>
        </ul>
            
            
           
    </form>
</div>



    </form>
 </div>
    
</body>
</html>