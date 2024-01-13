<?php 
$casa = array(27,29,41,41,53);
$tipo = "''";
$rua = 72;
$ter = 46;
echo "insert into casas (casa, id_rua, tipo, id_territorio) values";


foreach($casa as $value){

  echo "(".$value.",".$rua.",".$tipo.",".$ter."),";
}

?>