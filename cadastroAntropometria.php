<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Dietpro</title>
    <?php include_once 'head.php'; ?>
    

</head>

<body>
    <div class="">

        <?php
        
    $altura           = $_POST["altura"];
    $pesoAtual        = $_POST["pesoAtual"];
    $bracoEsq         = $_POST["bracoEsq"];
    $bracoDir         = $_POST["bracoDir"];
    $tricipital       = $_POST["tricipital"];
    $subescapular     = $_POST["subescapular"];
    $cintura          = $_POST["cintura"];
    $quadril          = $_POST["quadril"];
    $suprailiaca      = $_POST["suprailiaca"];
    $abdominal        = $_POST["abdominal"];
    $torax            = $_POST["torax"];
    $abdominalCir     = $_POST["abdominalCir"];
    $quadriceps       = $_POST["quadriceps"];
    $coxaEsq          = $_POST["coxaEsq"];
    $coxaDir          = $_POST["coxaDir"];
    $panturrilhaEsq   = $_POST["panturrilhaEsq"]; 
    $panturrilhaDir   = $_POST["panturrilhaDir"];
    $antebracoEsq     = $_POST["antebracoEsq"];
    $antebracoDir     = $_POST["antebracoDir"];

    session_start();
    include_once 'conexao.php';
    $id = $_SESSION['id'];

     $ok = $altura != "" && $pesoAtual != ""; 
    
    $sql = "insert into a_antropometrica values(".$id.", '".$bracoDir."','".$altura."','".$torax."','".$subescapular."','".$coxaEsq."','".$coxaDir."','".$panturrilhaEsq."','".$panturrilhaDir."','".$cintura."','".$quadril."','".$abdominalCir."','".$quadriceps."','".$pesoAtual."','".$suprailiaca."','".$tricipital."','".$abdominal."','".$antebracoEsq."','".$antebracoDir."','".$bracoEsq."')";
    
        

        
        if($ok)
{
            if(mysqli_query($con,$sql))  
    {
         ?>
        <div class="alert alert-success animated zoomIn container" role="alert" style="width: 300px; margin-top: 100px;">
            Dados gravados com sucesso!
        </div>

        <div id="btnConfirmacao">
            <a href="form-antropometria.php"><button id="btnVoltar1" type="button" class="btn btn-warning animated zoomIn" style="margin-left:48%;">OK</button> </a>
        </div>
        <?php
        }
        else
        {
                
         ?>
        <div class="alert alert-warning animated zoomIn container" role="alert" style="width: 300px; margin-top: 100px;">
            Erro ao cadastrar contato!
        </div>

        <div id="btnConfirmacao">
            <a href="form-antropometria.php"><button id="btnVoltar1" type="button" class="btn btn-warning animated zoomIn" style="margin-left:48%;">OK</button></a>
        </div>
        <?php
        }
        }
        
        else
        {
    ?>
        <div class="alert alert-danger animated zoomIn container" role="alert" style="width: 300px; margin-top: 100px;">
            Favor preencher peso e altura!
        </div>

        <div id="btnConfirmacao">
            <a href="form-antropometria.php"><button id="btnVoltar1" type="button" class="btn btn-warning animated zoomIn" style="margin-left:48%;">OK</button></a>
        </div>
        <?php
        }
       
            
            
    mysqli_close($con);

	
?>

    </div>
</body>

</html>
