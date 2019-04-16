<?php include_once "verificaLogin.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Dietpro</title>
    
    <?php include_once 'head.php'; ?>
<!-- O arquivo AAAA.php ele trabalha as funcoes e gera os dados -->
    <?php include_once 'AAAA.php'; ?> 
    <script type="text/javascript" src="js/antropometrico.js"></script>

</head>

<body>

    <div id="fundoSistemaInterno" class="container">


        
        <?php 
        include_once "html/barra_nav.php";
        include_once "html/barra_lateral.php";
        ?>

         
        <h4 id="menuNutricionista">Avaliação Antropométrica &nbsp; <img id="balanca" src="img/icons8-balan%C3%A7a-industrial-48.png" alt=""></h4>

        

        <form action="cadastroAntropometria.php" method="post">

            <div id="gerarIMC">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label style="margin-left: 70px;" for="altura">Altura (m) :</label>
                        <input class="form-control" type="text" id="altura"  min="0" max="3" step="0.01" onblur="imc();" /> <br>
                    </div>
                    <div class="form-row">
                        <label style="margin-left: 70px;" for="altura">Imc :</label>
                        <span  class="form-control" style="margin-left: 100px;" id="resultado"></span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label style="margin-left: 53px;" for="pesoAtual">Peso Atual (kg)</label>
                        <input class="form-control" type="text" id="pesoAtual"  min="0" max="3" step="0.01" onblur="imc();" /> <br>
                    </div>
                </div>    
               
                
            </div>
            


            <div id="gerarMedidas">

                <div id="h5Antro" class="form-row alturaAntro">
                    <h5 class="col-md-5" style="text-align: center;"><i>Circunferências</i></h5>
                    <h5 class="col-md-5" style="text-align: right; margin-right: 10px;"><i>Dobras Cutâneas</i></h5>
                </div>



                <div class="form-row alturaAntro">
                    <label for="bracoEsq">Braço Esq. :</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="bracoEsq" placeholder="<?php echo $CIR_BRACO_ESQ;  ?>" name="bracoEsq">
                    </div>
                    <label style="margin-left: 60px;" for="bracoDir">Braço Dir. :</label>
                    <div class="form-group col-md-1 ">
                        <input type="number" class="form-control" id="bracoDir" placeholder="<?php echo $CIR_BRACO_DIR; ?>" name="bracoDir">
                    </div>
                    <label style="margin-left: 120px;" for="tricipital">Tricipital :</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="tricipital" placeholder="<?php echo $DC_TRICIPITAL; ?>" name="tricipital">
                    </div>
                    <label style="margin-left: 60px;" for="subescapular">Subescapular :</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="subescapular" placeholder="<?php echo $DC_SUBESCAPULAR_AXILAR; ?>" name="subescapular">
                    </div>
                </div>

                <div class="form-row alturaAntro">
                    <label style="margin-left: 20px;" for="cintura">Cintura :</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="cintura" placeholder="<?php echo $CIR_CINTURA; ?>" name="cintura">
                    </div>
                    <label style="margin-left: 78px;" for="quadril">Quadril :</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="quadril" placeholder="<?php echo $CIR_QUADRIL;  ?>" name="quadril">
                    </div>
                    <label style="margin-left: 105px;" for="suprailiaca">Suprailíaca :</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="suprailiaca" placeholder="<?php echo $DC_SUPRAILIACA; ?>" name="suprailiaca">
                    </div>
                    <label style="margin-left: 75px;" for="abdominal">Abdominal :</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="abdominal" placeholder="<?php echo $CIR_ABDOMINAL; ?>" name="abdominal">
                    </div>
                </div>

                <div class="form-row alturaAntro">
                    <label style="margin-left: 33px;" for="torax">Torax :</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="torax" placeholder="<?php echo $CIR_TORAX; ?> " name="torax">
                    </div>
                    <label style="margin-left: 53px;" for="abdominal">Abdominal :</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="abdominal" placeholder="<?php echo $CIR_ABDOMINAL; ?>" name="abdominalCir">
                    </div>
                    <label style="margin-left: 220px;" for="quadriceps">Quadríceps :</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="quadriceps" placeholder=" <?php echo $CIR_ABDOMINAL; ?>" name="quadriceps">
                    </div>

                <div  id="grafico_percentualDeGordura"  style="width: 400px; height: 210px; margin-left: 450px; background-color: rgba(208, 235, 218, 0.63); border-style:ridge;">
                        <?php include_once 'AAAA.php'; ?>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                            //inserindo valores 
                            var data = google.visualization.arrayToDataTable([
                            ['item', 'sexo dos usuarios'],
                            ['Gordura',   <?php echo $Percentual;  ?>],
                            ['Livre de Gordura',   <?php echo 100 - $Percentual;  ?>],
                            ]);
                    //tipo do texto
                            var options = {
                            title: 'Percentual de Gordura'
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('grafico_percentualDeGordura'));
                            chart.draw(data, options);
                            }
                        </script>
                    </div>

                </div>

                <div class="form-row alturaAntro">
                    <label style="margin-left: 8px;" for="coxaEsq">Coxa Esq. :</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="coxaEsq" placeholder="<?php echo $CIR_COXA_ESQ; ?>" name="coxaEsq">
                    </div>
                    <label style="margin-left: 66px;" for="coxaDir">Coxa Dir. :</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="coxaDir" placeholder="<?php echo $CIR_COXA_DIR; ?>" name="coxaDir">
                    </div>

                    <div class="form-group col-md-3 ">
                    </div>

                </div>

                <div class="form-row alturaAntro">
                    <label style="margin-left: 9px;" for="panturrilhaEsq">Pant. Esq. :</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="panturrilhaEsq" placeholder="<?php echo $CIR_PANTURRILHA_ESQ; ?>" name="panturrilhaEsq">
                    </div>
                    <label style="margin-left: 66px;" for="panturrilhaDir">Pant. Dir. :</label>
                    <div class="form-group col-md-1 linha-vertical">
                        <input type="number" class="form-control" id="panturrilhaDir" placeholder="<?php echo $CIR_PANTURRILHA_DIR; ?>" name="panturrilhaDir">
                    </div>



                </div>

                <div class="form-row ">
                    <label for="antebracoEsq">A.braço Esq.:</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="antebracoEsq" placeholder="<?php echo $CIR_ANTEBRACO_ESQ; ?>" name="antebracoEsq">
                    </div>
                    <label style="margin-left: 50px;" for="antebracoDir">A.braço Dir.:</label>
                    <div class="form-group col-md-1">
                        <input type="number" class="form-control" id="antebracoDir" placeholder="<?php echo $CIR_ANTEBRACO_DIR; ?>" name="antebracoDir">
                    </div>
                </div>

                <button style="margin-left: 270px; margin-bottom: 20px; margin-top: 30px;" id="btnentrar" type="submit" class="btn btn-primary">Salvar Antropometria</button>
            </div>
        </form>


        <?php include_once 'html/rodape.php'; ?>
        

    </div>

</body>

</html>
