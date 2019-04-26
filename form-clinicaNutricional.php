<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Dietpro</title>
    <?php include_once 'head.php';
    include_once 'verificaLogin.php';
    ?>


</head>

<body>

    <div id="fundoSistemaInterno" class="container">


         <?php 
        include_once "html/barra_nav.php";
        include_once "html/barra_lateral.php";
        ?>

        <h4 id="menuNutricionista">Avaliação Clínica Nutricional &nbsp; <i class="fas fa-book-medical" style="font-size: 40px; color: #d83838;"></i> </h4>


        <div id="form-Clinico">
            <form action="cadastroClinicaNutricional.php" method="post">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">
                        <h6><i>H. Patológica pregressa :</i></h6>
                    </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword" placeholder="" name="HpatologiaPregressa">
                    </div>
                    <img id="virus" src="img/icons8-v%C3%ADrus-48.png" alt="">
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">
                        <h6><i>Histórico familiar :</i></h6>
                    </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword" placeholder="" name="Hfamiliar">
                    </div>
                    <img id="familia" src="img/icons8-fam%C3%ADlia-homem-mulher-48.png" alt="">
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">
                        <h6><i>Histórico alimentar :</i></h6>
                    </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword" placeholder="" name="Halimentar" ;>
                    </div>
                    <img id="maca" src="img/icons8-ma%C3%A7%C3%A3-48.png" alt="">
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">
                        <h6><i>Sinal clínico :</i></h6>
                    </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword" placeholder="" name="sinalClinico">
                    </div>
                    <img id="exameSaude" src="img/icons8-exame-de-sa%C3%BAde-48.png" alt="">
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">
                        <h6><i>Medicamentos :</i></h6>
                    </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword" placeholder="" name="medicamentos">
                    </div>
                    <img id="comprimidos" src="img/icons8-comprimidos-48.png" alt="">
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">
                        <h6><i>Histórico social :</i></h6>
                    </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword" placeholder="" name="Hsocial">
                    </div>
                    <img id="dinheiroNaMão" src="img/icons8-dinheiro-na-m%C3%A3o-48.png" alt="">
                </div>
                <div id="">

                    <div class="form-row">
                        <div id="form-Bio1" class="form-group col-md-3">
                            <h6><i>Observações <br> adicionais :</i></h6>
                        </div>
                        <div id="form-Bio2" class="form-group col-md-5">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="" name="observacoesAdicionais"></textarea>
                        </div>
                    </div>

                </div>
                <button style="margin-left: 270px; margin-bottom: 20px;" id="btnentrar" type="submit" class="btn btn-primary">Salvar Av. Clínica nutri.</button>
            </form>

        </div>


        
             <?php include_once 'html/rodape.php'; ?>
    </div>

</body>

</html>
