<?php include_once "verificaLogin.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Dietpro</title>
    
    <?php include_once 'head.php'; ?>
<!-- O arquivo AAAA.php ele trabalha as funcoes e gera os dados -->
    <?php include_once 'AAAA.php'; ?> 


</head>

<body>

    <div id="fundoSistemaInterno" class="container">


        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-secondary navbar-dark p-1">
                    <a class="btn btn-secondary navbar-brand" href="index.php">HOME</a>
                    <a class="btn btn-secondary navbar-brand" href="#">QUEM SOMOS</a>

                    <a class="btn btn-secondary dropdown-toggle navbar-brand" href="#" role="button" id="<dropdownMenuL></dropdownMenuL>ink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        LOGIN
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <div class="">
                                <form class="px-4 py-3">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1"><i class="fab fa-nutritionix" style="font-size: 30px; color:#3b884d; "></i> &nbsp; Endereço E-mail</label>
                                        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@email.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormPassword1">Senha</label>
                                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Senha">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                        <label class="form-check-label" for="dropdownCheck">
                                            Lembre-me
                                        </label>
                                    </div>
                                    <button id="btnentrar" type="submit" class="btn btn-primary">Entrar</button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <button id="btnentrar" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                                    Novo por aqui? Cadastre-se
                                </button>

                            </div>
                        </a>

                    </div>
                </div>

            </div>
        </div>
        <nav id="teste" class="navbar navbar-dark" style="background-color:#3b884d;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span> <i class="fas fa-carrot animated rubberBand" style="font-size: 30px; color: #c78713"></i> &nbsp; <i class="fas fa-apple-alt animated rubberBand" style="font-size: 30px; color: #d83838"></i> &nbsp; <i class="fas fa-cheese animated rubberBand" style="font-size: 30px; color: #ccc624"></i> </span>
            </button>

              <div> <img src="img/icons8-checked-user-male-26.png" alt=""> <b> Bem vindo(a):</b> <?php echo "<i>"  .$_SESSION["login"] . "</i>" ; ?> <a style="text-decoration: none;" href="logout.php">&nbsp;<img id="logout" src="img/icons8-exit-48.png" alt=""></a> 
        </div>
        </nav>

       

        <div id="listNutri" class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
                Menu
            </a>
            <a href="nutricionistaMenu.php" class="list-group-item list-group-item-action">Dados do paciente</a>
            <a href="#" class="list-group-item list-group-item-action">Av. Antropométrica <i class="fas fa-check" style="font-size: 10px; color: #3b884d"></i></a>
            <a href="form-bioquiomica.php" class="list-group-item list-group-item-action">Av. Bioquímica</a>
            <a href="form-clinicaNutricional.php" class="list-group-item list-group-item-action">Av. Clínica nutri.</a>
            <a href="form-VetFao.php" class="list-group-item list-group-item-action">Vet FAO</a>
            <a href="tabelaAlimentos.php" class="list-group-item list-group-item-action">Lista de alimentos</a>
            <a href="#" class="list-group-item list-group-item-action">Recordatório 24h</a>
            <a href="form-Dietoterapia.php" class="list-group-item list-group-item-action">Dietoterapia</a>
            <a href="#" class="list-group-item list-group-item-action">Lista de substituições</a>
            <a href="#" class="list-group-item list-group-item-action">Impressão de dieta</a>
        </div>

        <h4 id="menuNutricionista">Avaliação Antropométrica &nbsp; <img id="balanca" src="img/icons8-balan%C3%A7a-industrial-48.png" alt=""></h4>

        

        <form action="cadastroAntropometria.php" method="post">

            <div id="gerarIMC">

                <div class="form-row">

                    <div class="form-group col-md-3">
                        <h5 style="text-align: center;"><i>IMC</i></h5>

                        <label style="margin-left: 70px;" for="altura">Altura (m) :</label>
                        <input style="text-align: center;" type="number" class="form-control" id="altura" placeholder="<?php echo $ALTURA; ?>" name="altura" min="0" max="3" step="0.01">
                    </div>
                    
                    <div class="form-group col-md-6" style="padding-left: 30%;">   
                        <label  for="altura">Imc Gerado:</label>
                        <input style="text-align: center;" type="number" class="form-control"  placeholder="<?php echo $imc ?>" disabled = "disabled" min="0" max="3" step="0.01">
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label style="margin-left: 53px;" for="pesoAtual">Peso Atual (kg)</label>
                        <input style="text-align: center;" type="number" class="form-control" id="pesoAtual" placeholder="<?php echo $PESO; ?>" name="pesoAtual" min="0" max="300" step="0.01">
                    </div>

                     <div class="form-group col-md-6" style="padding-left: 30%;">
                        
                        <label  for="altura">Classificação:</label>
                        <input style="text-align: center;" type="text" class="form-control" placeholder="<?php echo $class_imc; ?>" disabled = "abled" min="0" max="3" step="0.01">
                    </div>

                </div>
                <a style=" margin-left: 52px;" type="submit" id="btnentrar" class="btn btn-primary">Gerar IMC</a>

            </div>
            <?php  
                if (isset($_GET["altura"]) && isset($_GET["peso"])) {
                    $ALTURA = $_GET["altura"];
                        $PESO = $_GET["peso"];

                        $imc = imc($PESO,$ALTURA);
                        echo $imc;
                }
            ?>   
           


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



        <footer class="container" id="rodape">
             <?php include_once 'rodape.php'; ?>
        </footer>

    </div>

</body>

</html>
