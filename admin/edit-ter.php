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
    <section class="container" id="det-rel">
        <?php
            $ter = $_GET["ter"];

            if($ter){
                echo "<h2>Gerenciar território". $ter."</h2>";
                echo "<button><a href='edit-ter.php?clean=1&ter=".$ter."'>Limpar território</a></button>";

                $query_ultimo_publicador = mysqli_query( $conn, "SELECT * FROM territorio WHERE id_territorio = $ter");
                while ($row_pub = $query_ultimo_publicador->fetch_assoc()){
                    $query_lsita_rua = "SELECT  A.nome_rua, A.id_rua, B.id_territorio FROM rua A INNER JOIN casas B ON A.id_rua = B.id_rua WHERE B.id_territorio = '".$ter."' GROUP BY nome_rua ORDER BY id_rua ASC";
                    $lista_rua = mysqli_query($conn, $query_lsita_rua);

                        while ($row_rua = $lista_rua->fetch_assoc())  {
                            $nome_rua= $row_rua['nome_rua'];
                            $id_rua = $row_rua['id_rua'];
                            $id_territorio = $row_rua['id_territorio'];
        ?>



<div class="popcasa" id="adcasa">
                            <form action="edit-ter.php?update=1&ter=<?php echo $ter ?>">
                                <a href="#" title="Close" class="modal-close">Fechar</a>
                                <h4>Casa <?php echo $casa ?></h4>
                                    <input type="text" name="casa" id="">
                                    <select name="rua" id="">
                                        <option value=""></option>
                                    </select>
                                    <input type="hidden" name="territorio" value="<?php $id_territorio ?>">
                                    <input type="submit" value="alterar">
                                </ul>
                            </form>
                        </div>

                <ul class="list-rua">
                    <?php echo "<h3>".$nome_rua."</h3>"; ?>
                    <?php
                        $query_casas = mysqli_query( $conn, "SELECT * FROM casas WHERE id_rua = '".$id_rua."' and id_territorio = '".$ter."' ORDER BY CASA ASC");
                        while ($row = $query_casas->fetch_assoc())  {
                                $casa = $row['casa'];
                                $id_casa = $row['id_casas'];
                                $tipo = $row['Tipo'] ;
                                $feito = $row['feito'];
                    ?>
                        <li>
                       <b><?php echo "$casa"; ?> - </b>
                        <a href="#popup<?php echo $id_casa ?>" class="editar"><i class="Edit"></i>Editar</span></a>
                        <a href="deletar-casa.php" class=""><span><i class="trash"></i>Deletar</span></a>
                        </li>
                        <div class="popcasa" id="popup<?php echo $id_casa ?>">
                            <form action="edit-ter.php?update=1&ter=<?php echo $ter ?>">
                                <a href="#" title="Close" class="modal-close">Fechar</a>
                                <h4>Casa <?php echo $casa ?></h4>
                                <ul>
                                    <li>
                                        <label>Tipo da casa</label>
                                        <select name="tipo">
                                            <option value="">Casa única</option>
                                            <option value="Condomínio">Condomínio</option>
                                            <option value="Comércio">Comércio</option>
                                            <option value="Abandonada">Abandonada</option>
                                            <option value="Cond.Casas">Condominio Casas</option>
                                            <option value="Restrito">Restrita</option>
                                        </select>
                                    </li>

                                    <li>
                                        <label>Sigla</label>
                                        <input type="text" name="sigla">
                                    </li>
                                  
                                    <input type="hidden" name="id_casas" value="<?php echo $id_casa ?>">
                                    <input type="submit" value="alterar">
                                </ul>
                            </form>
                        </div>
                    <?php } ?>
                </ul>
            
            <?php 
                    }
                }

            }else{ ?>
                <h2>Nenhum territorio foi selecionado</h2>
                <a href="ter-list.php">voltar a lista de territorios</a>
            <?php 
                } 
            ?>


<?php
$clean = $_GET["clean"];
$ter;

    if($clean == 1){ 
        $query_limpater = 'update casas set feito = "" where id_territorio = '.$ter.'' ;
        $limpa_ter = mysqli_query($conn, $query_limpater); 

        if($limpa_ter){
            echo "Territorio limpo com sucesso";
            unset($clean);
        }

    }

echo "<br>";
        $update = 1; 
        echo $tipo = $_GET["tipo"];
        echo $sigla = $_GET["sigla"]; 
        echo $id_casas = $_GET["id_casas"];


        if($update){

            $query_atualiza_casa =" UPDATE `casas` SET Tipo = '$tipo', sigla = '$sigla' WHERE casas.id_casas = $id_casas; ";

            $atualizar_casa = mysqli_query($conn, $query_atualiza_casa);

            if($atualizar_casa){
                echo "casa atualizada com sucesso";
            }
        }

?>
    </section>

</body>