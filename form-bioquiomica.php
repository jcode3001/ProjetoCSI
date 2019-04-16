<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Dietpro</title>

    <?php 
    include_once 'head.php';
    include_once 'verificaLogin.php';
    ?>

</head>

<body>

    <div id="fundoSistemaInterno" class="container">

        <?php 
        include_once "html/barra_nav.php";
        include_once "html/barra_lateral.php";
        ?>

        <h4 id="menuNutricionista">Avaliação Bioquímica &nbsp; <img id="microscopio" src="img/icons8-microsc%C3%B3pio-96.png" alt=""></h4>


        <div id="form-Bio">
            <form method="post" action="cadastroBioquimica.php">
                <div class="form-row">
                    <div id="form-Bio1" class="form-group col-md-3">
                        <h5>Dados &nbsp; <img id="serginga" src="img/icons8-seringa-96.png" alt=""> <br> Bioquímicos : <img id="gotaDeSangue" src="img/icons8-gota-de-sangue-96.png" alt=""></h5> <img id="tuboDeEnsaio" src="img/icons8-tubo-de-ensaio-96.png" alt="">
                    </div>
                    <div id="form-Bio2" class="form-group col-md-9">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="14" placeholder="" name="bioquimica"></textarea>
                    </div>
                </div>
                <button style="margin-left: 315px; margin-top: 25px;" id="btnentrar" type="submit" class="btn btn-primary">Salvar Bioquímica</button>
            </form>

        </div>

         <?php include_once 'html/rodape.php'; ?>
    </div>

</body>

</html>
