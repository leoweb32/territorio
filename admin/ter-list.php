<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="ter-list">
    <?php include("header.php")?>
    <section class="container" id="list-ter">
        <h2>Gerenciar territórios</h2>
        <ul>
            <?php 
                $query_territorio = mysqli_query( $conn, "SELECT * FROM territorio ");
                    while ($row = $query_territorio->fetch_assoc())  {
            ?>
            <li>
                <b>Território <?php echo $row['id_territorio'];?>-</b>
                    <a href="edit-ter.php?ter=<?php echo $row['id_territorio'];?>" class="editar"><i class="Edit"></i>Editar</span></a>
                    <!--a href="delete-ter.php" class="delete"><span><i class="trash"></i>Deletar</span></a-->
            </li>
            <?php } ?>
        </ul>
    </section>

</body>
</html>