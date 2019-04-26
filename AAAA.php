<?php

include_once 'funcoesProjeto.php';
include_once 'conexao.php';


$antropometrico = mysqli_query($con,"SELECT * FROM `a_antropometrica` WHERE `ID_ANTROPOMETRIA` = '$id'");
$cliente = mysqli_query($con,"SELECT `SEXO`,`DT_NASCIMENTO` FROM `cliente` WHERE `ID_CLIENTE` = '$id'");

$row = mysqli_fetch_array($cliente);
$SEXO = $row['SEXO'];
$DT_NASCIMENTO = $row['DT_NASCIMENTO'];

//Trabalhando os dados antropometricos

$row = mysqli_fetch_array($antropometrico);
if ($row) {

$ALTURA = $row['ALTURA'];
$PESO = $row['PESO'];

$CIR_BRACO_DIR = $row["CIR_BRACO_DIR"];
$CIR_BRACO_ESQ = $row["CIR_BRACO_ESQ"];

$CIR_ANTEBRACO_DIR = $row["CIR_ANTEBRACO_DIR"];
$CIR_ANTEBRACO_ESQ = $row["CIR_ANTEBRACO_ESQ"];

$CIR_COXA_ESQ = $row["CIR_COXA_ESQ"];
$CIR_COXA_DIR = $row["CIR_COXA_DIR"];

$CIR_PANTURRILHA_DIR = $row["CIR_PANTURRILHA_DIR"];
$CIR_PANTURRILHA_ESQ = $row["CIR_PANTURRILHA_ESQ"];

$CIR_TORAX = $row["CIR_TORAX"];
$CIR_CINTURA = $row["CIR_CINTURA"];
$CIR_QUADRIL = $row["CIR_QUADRIL"];
$CIR_ABDOMINAL = $row["CIR_ABDOMINAL"];

$DC_TRICIPITAL = $row['DC_TRICIPITAL'];
$DC_SUBESCAPULAR_AXILAR = $row['DC_SUBESCAPULAR_AXILAR'];
$DC_SUPRAILIACA = $row['DC_SUPRAILIACA'];
$DC_ABDOMINAL = $row['DC_ABDOMINAL'];
$DC_QUADRICEPS = $row["DC_QUADRICEPS"];


//Calculos 
$imc = imc($PESO,$ALTURA);
$tmb = tmb($PESO,$DT_NASCIMENTO,$SEXO);
$class_imc = class_imc($PESO,$ALTURA,$DT_NASCIMENTO);

$Percentual = PercentualGordura($SEXO,$DC_TRICIPITAL,$DC_SUBESCAPULAR_AXILAR,$DC_SUPRAILIACA,$DC_ABDOMINAL,$DC_QUADRICEPS);


}else{
$imc = "Sem Dados";
$tmb = "Sem Dados";
$class_imc = "Sem Dados";
$Percentual = 0;

$ALTURA = "Sem Dados";
$PESO = "Sem Dados";

$CIR_BRACO_DIR = 0;
$CIR_BRACO_ESQ = 0;

$CIR_ANTEBRACO_DIR = 0;
$CIR_ANTEBRACO_ESQ = 0;

$CIR_COXA_ESQ = 0;
$CIR_COXA_DIR = 0;

$CIR_PANTURRILHA_DIR = 0;
$CIR_PANTURRILHA_ESQ = 0;

$CIR_TORAX = 0;
$CIR_CINTURA = 0;
$CIR_QUADRIL = 0;
$CIR_ABDOMINAL = 0;

$DC_TRICIPITAL = 0;
$DC_SUBESCAPULAR_AXILAR = 0;
$DC_SUPRAILIACA = 0;
$DC_ABDOMINAL = 0;
$DC_QUADRICEPS = 0;
}






?>