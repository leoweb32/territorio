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
<?php $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'); ?>
    <section class="container" id="relatorio-list">
        <h2>Relatório Geral </h2>
            <ul id="ter_list">
                <?php 
                    $query_territorio = mysqli_query( $conn, "SELECT * FROM territorio ");
                        while ($row = $query_territorio->fetch_assoc())  {
                ?>
                <li>
                    <div><?php echo $id_ter = $row['id_territorio'];?>- </div>
                
                    <?php
                        $query_relatorio = mysqli_query( $conn, "SELECT * FROM relatorio WHERE id_territorio = $id_ter group by data_ter order by data_ter DESC limit 4");
                        while ($rowrel = $query_relatorio ->fetch_assoc()) { 
                        $diasemana_numero =  date('w', strtotime($rowrel['data_ter']));
                    ?>
                        
                        <ul id="less-work" class="item_<?php echo $diasemana_numero ?>">   
                        <li><b><?php echo date('d/m/Y',  strtotime($rowrel['data_ter'])); ?></b></li>
                        <li><b><?php echo $rowrel['nome_publicador']; ?></b></li>
                        <li><?php echo $diasemana[$diasemana_numero]; ?></li>
                        </ul>  
                    <?php } ?>  
                </li>            
                <?php } ?>
            </ul>
    </section>
</body>
</html>


