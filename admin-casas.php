<?php include('conect.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Inserir</title>
</head>
<body>
<h2>Adicione uma casa</h2>
<form action="admin-casas.php?insertcasa=1" method="post">
    <ul>
        <li>
            <label>Número da casa </label><br><input type="text" name="casa" id="">
        </li>
        <li>
        <label>Tipo da Casa</label><br><input type="text" name="tipo" id="">
        </li>
        <li>
            <label>Selecione um território</label><br>
                <?php include('list_ter.php'); ?>
        </li>
        <li>
            <label>Selecione uma Rua</label><br>
                <?php include('list-rua.php'); ?>
        </li>
    </ul>

    <input type="submit" value="Cadastrar">
</form>

<hr>

<h2>Adicione uma Rua</h2>
<form action="admin-casas.php?insertrua=1" method="post">
    <ul>
        <li>
            <label>Insira o nome da rua</label><br>
            <input type="text" name="rua" size="40">
        </li>
    </ul>

    <input type="submit" value="Cadastrar">
</form>

<hr>

<h2>Adicione uma território</h2>
<form action="admin-casas.php?insertter=1" method="post">
    <ul>
        <li>
            <label>Insira um número de território</label><br>
            <input type="text" name="territorio">
        </li>
    </ul>

    <input type="submit" value="Cadastrar">
</form>


<?php
/* Update Casa */
if($_GET['insertcasa']==1){

    $casa = $_POST['casa'];
    $tipo = $_POST['tipo'];
    $territorio = $_POST['territorio'];
    $rua = $_POST['rua'];


            $insert = "INSERT INTO casas (casa, Tipo, id_rua, id_territorio) VALUES ('$casa', '$tipo', '$rua', '$territorio')";
            $query_insert = mysqli_query($conn, $insert);
        

        if($query_insert){
            echo "Casa inserida";
            empty($insert);
            empty($casa);
            empty($tipo);
            empty($territorio);
            empty($rua);
        }else{
            echo "erro ao atualizar";
        }

        $conn->close();

}


/* Update Casa */
if($_GET['insertrua']==1){

    $rua = $_POST['rua'];

            $insert = "INSERT INTO rua (nome_rua) VALUES ('$rua')";
            $query_insert = mysqli_query($conn, $insert);
        

        if($query_insert){
            echo "Rua inserida";
            $insert = "";
        }else{
            echo "erro ao atualizar";
        }

        $conn->close();
        empty($rua);

}

/* Update Casa */
if($_GET['insertter']==1){

    $ter = $_POST['territorio'];

            $insert = "INSERT INTO territorio (id_territorio) VALUES ('$ter')";
            $query_insert = mysqli_query($conn, $insert);
        

        if($query_insert){
            echo "Territorio inserido";
            $insert = "";
        }else{
            echo "erro ao atualizar";
        }

        $conn->close();

        empty($ter);

}



?>

</body>
</html>

