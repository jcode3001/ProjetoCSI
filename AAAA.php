<?php
session_start();
include_once 'funcoesProjeto.php';
include_once 'conexao.php';

echo $_SESSION["login"];
echo $_SESSION["id_cliente"];


$antropometrico = mysqli_query($con,"SELECT `ALTURA`,`PESO`,`DC_TRICIPITAL`,`DC_SUBESCAPULAR_AXILAR`,`DC_SUPRAILIACA`,`DC_ABDOMINAL`,`DC_QUADRICEPS` FROM `a_antropometrica` WHERE `ID_ANTROPOMETRIA` = '$id'");
$cliente = mysqli_query($con,"SELECT `SEXO`,`DT_NASCIMENTO` FROM `cliente` WHERE `ID_CLIENTE` = '$id'");

$row = mysqli_fetch_array($cliente);
$sexo = $row['SEXO'];
$nascimento = $row['DT_NASCIMENTO'];

$row = mysqli_fetch_array($antropometrico);
if ($row) {
$altura = $row['ALTURA'];
$peso = $row['PESO'];
$tricipital = $row['DC_TRICIPITAL'];
$subescapular = $row['DC_SUBESCAPULAR_AXILAR'];
$suprailiaca = $row['DC_SUPRAILIACA'];
$abdominal = $row['DC_ABDOMINAL'];
$quadriceps = $row['DC_QUADRICEPS'];

$imc = imc($peso,$altura);
$tmb = tmb($peso,$nascimento,$sexo);
$class_imc = class_imc($peso,$altura,$nascimento);

$Percentual = PercentualGordura($sexo,$tricipital,$subescapular,$suprailiaca,$abdominal,$quadriceps);

}else{
$imc = "Sem Dados";
$tmb = "Sem Dados";
$class_imc = "Sem Dados";
$Percentual = 0;
}






?>