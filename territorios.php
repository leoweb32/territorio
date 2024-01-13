<?php
include('conect.php');
error_reporting(E_ERROR);
$ter = $_POST['territorio'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de territórios</title>

    <script>
        function ativarCheckbox(idCheckbox) {
        var checkbox = document.getElementById(idCheckbox); // obter o elemento checkbox pelo ID
            if (checkbox.checked) { // verificar se o checkbox está selecionado
                //checkbox.setAttribute("checked", true); // definir o atributo "checked" como verdadeiro
                checkbox.setAttribute("value", 1);
            }else {
                //checkbox.setAttribute("checked", false); // definir o atributo "checked" como falso
                checkbox.setAttribute("value", 0);
            }
        }
    </script>


</head>
<body>
<form action="territorios.php?select=1" method="post">
        <select name="territorio" id="territorio">
            <option value=""> Selecione um território</option>
            <?php 
                $query_territorio = mysqli_query( $conn, "SELECT * FROM territorio ORDER BY id_territorio ASC ");
                while ($row = $query_territorio->fetch_assoc()){
            ?>
                <option value="<?php echo $row['id_territorio'];?>"><?php echo $row['id_territorio'];?></option>
            <?php } ?>
        </select>
    <input type="submit" value="escolher">
</form>
<?php 

if($_GET['select']){ ?>


<h2>Território <?php echo $ter; ?></h2>
<form action="territorios.php?update=1&select=<?php echo $_GET['select'] ?>" method="post" >
        <?php 
        
            if($ter){

                $query_ultimo_publicador = mysqli_query( $conn, "SELECT * FROM relatorio WHERE id_territorio = $ter ORDER BY data_ter DESC LIMIT 1");
                while ($row_pub = $query_ultimo_publicador->fetch_assoc()){
                    $publicador_lst = $row_pub['nome_publicador'];
                    $data_lst = $row_pub['data_ter'];
                }
            }    
        ?>
            <ul>
                <li>
                    <lable>Nome</label><br> 
                    <input type="text" name="nome" value="<?php echo $publicador_lst ?>" placeholder="Digite seu nome" required size="40px">
                </li>
                <li>
                    <label>Dia que foi trabalhado</label><br>
                    <input type="date" name="data" value="<?php echo  $data_lst ?>" placeholder="escolha a data" required>
                </li>
            <input type="hidden" name="territorio_hidden" value="<?php echo $ter ?>">
        </ul>
<?php  
    $query_lsita_rua = "SELECT  A.nome_rua, A.id_rua, B.id_territorio FROM rua A INNER JOIN casas B ON A.id_rua = B.id_rua WHERE B.id_territorio = '".$ter."' GROUP BY nome_rua ORDER BY id_rua ASC";
    $lista_rua = mysqli_query($conn, $query_lsita_rua);

    while ($row_rua = $lista_rua->fetch_assoc())  {
           $nome_rua= $row_rua['nome_rua'];
           $id_rua = $row_rua['id_rua'];
           $id_territorio = $row_rua['id_territorio'];
?>

        <h3><?php echo $nome_rua ?></h3>
        <ul id="list-ter">
            <?php
                $query_casas = mysqli_query( $conn, "SELECT * FROM casas WHERE id_rua = '".$id_rua."' and id_territorio = '".$id_territorio."' ORDER BY CASA ASC");
                while ($row = $query_casas->fetch_assoc())  {
                        $casa = $row['casa'];
                        $tipo = $row['Tipo'] ;
                        $feito = $row['feito'];
            ?>
                <li>
                    <input type="checkbox" name="feito[]" <?php  if($feito){ echo "checked";}  ?> value="<?php echo $casa ?>">
                    
                    <div class="itenscasa">
                        <input type="hidden" name="casa[]" value="<?php echo $casa ?>">
                        <?php if($casa == 0 ){$casa = "S/N";} echo $casa ?>     
                            <?php 
                                if($tipo=="Restrito"){$style="style='color:red;'";}else if($tipo=="Predio"){$style="style='color: darkorange;'";}
                            ?>
                        <span class="tipo" <?php echo $style ?>><?php echo $tipo;?></span>
                    </div>
  
                </li>    
            <?php } ?>
        </ul>

            
<?php  }  ?>
<br><br>
        <label>Observação</label>
        <textarea name="obs" id="" cols="30" rows="30" placeholder="Digite aqui algum comentário sobre o território, como por exemplo, mudança de números, restritas e outros"></textarea>

        <input type="submit" value="Atualizar" class="atalizar">
    </form>
<?php } ?>

<?php


/* Update */

if($_GET['update']==1){

     $feito = $_POST['feito'];
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $ter = $_POST['territorio_hidden'];
    $obs = $_POST['obs'];


    $query_inserir_relatorio = "INSERT INTO relatorio (id_territorio, data_ter, nome_publicador, obs) VALUES ('$ter', '$data', '$nome', '$obs')";
    $inserir_relatorio = mysqli_query($conn, $query_inserir_relatorio);    

        $valores =  "'".implode("','",$feito)."'"; 

        foreach ($feito as $valor) {
        
            $update = "UPDATE casas SET feito = '".$valor."' WHERE casas.casa ='".$valor."' AND id_territorio = '".$ter."'";
            $update . "<br>";
            $query_update = mysqli_query($conn, $update);
        

                $teste ="SELECT * from casas WHERE casa NOT IN ($valores)  AND id_territorio = '".$ter."' ";
                $teste2 = mysqli_query($conn, $teste);
                while ($row = $teste2->fetch_assoc())  {
                    $id_casa = $row['casa'];
                    $update_null = "UPDATE casas SET feito = '0' WHERE casas.casa ='".$id_casa."' AND id_territorio = '".$ter."'";
                    $query_notin = mysqli_query($conn,  $update_null);
                }

        }
  
        if($query_update){
            echo "<span class='sucess'>Dados atualizados com sucesso<span>";
            echo "<script>let tempo = 5000; // 5 segundos em milissegundos
            setTimeout(function() {
                window.location.replace('territorios.php');
            }, tempo);</script>";

        }else{
            echo "erro ao atualizar";
        }

    }


?>
</body>
</html>