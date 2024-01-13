<?php include('conect.php'); ?>

<?php
echo $login = $_POST['login'];
echo $senha = $_POST['senha'];

$query_select = "SELECT * FROM usuarios WHERE login = '$login'";
$select = mysqli_query( $conn, $query_select );
$array = mysqli_fetch_array($select);
echo $logarray = $array['login'];
echo $senhaarray = $array['senha'];


  if($login == "" || $login == null){
      echo "Nenhum dado foi inserido. Volte e insira alguma info";   

    }else{
      if($logarray == $login  && $senhaarray == $senha ){
         header("location: ter-list.php");     
      }else{
        echo "Login ou senha errados. Volte e tente novamente";
      }
    }
?>