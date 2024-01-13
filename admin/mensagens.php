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
    <section class="container" id="mensagem-list">
        <h2>Solicitações do território</h2>
            <ul>
                <?php 
                    $query_territorio = mysqli_query( $conn, "SELECT * FROM territorio ");
                        while ($row = $query_territorio->fetch_assoc())  {
                ?>
                <li>
                    <h3>Território <?php echo $id_ter = $row['id_territorio'];?></h3>
                
                    <?php
                        $query_relatorio = mysqli_query( $conn, "SELECT * FROM relatorio WHERE id_territorio = $id_ter AND obs <> '' group by data_ter order by data_ter DESC");
                        while ($rowrel = $query_relatorio ->fetch_assoc()) { 
                        $diasemana_numero =  date('w', strtotime($rowrel['data_ter']));
                    ?>
                        
                    <ul class="msg-item">   
                        <li><b><?php echo date('d/m/Y',  strtotime($rowrel['data_ter'])); ?> - <?php echo $rowrel['nome_publicador']; ?></b></li>
                        <li><b>Mensagem</b>: <?php echo $rowrel['obs']; ?></li>

                        </ul>  
                    <?php } ?>  
                </li>            
                <?php } ?>
            </ul>
    </section>
</body>
</html>


