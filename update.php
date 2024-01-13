<?php


    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    ?>


<?php

$result = mysqli_query( $conn, "SELECT * FROM casas");

$feito = $_POST['feito'];
$casa = $_POST['casa'];



$count = count($_POST['casa']);

for ($i = 0; $i < $count; $i++) {
    echo $feito ; 
    if(isset($feito)){
        $feito = 0;
    }else{
        $feito = 1;
    }

  echo $update = "UPDATE casas SET feito = '".$feito."' WHERE casas.id_casa ='".$casa[$i]."'";
   $query_update = mysqli_query($conn, $update);

}

?>