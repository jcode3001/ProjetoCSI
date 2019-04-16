<div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-secondary navbar-dark p-1">
                    <a class="btn btn-secondary navbar-brand" href="index.php">HOME</a>
                    <a class="btn btn-secondary navbar-brand" href="#">QUEM SOMOS</a>
            <?php 
                if(!$_SESSION["login"]){
             ?>

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


            <?php 
                }else{
                    echo '<a class="btn btn-secondary navbar-brand">'.$_SESSION["login"]."</a>";
                } 
            ?>

                </div>

            </div>
        </div>
        <nav id="teste" class="navbar navbar-dark" style="background-color:#3b884d;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span> <i class="fas fa-carrot animated rubberBand" style="font-size: 30px; color: #c78713"></i> &nbsp; <i class="fas fa-apple-alt animated rubberBand" style="font-size: 30px; color: #d83838"></i> &nbsp; <i class="fas fa-cheese animated rubberBand" style="font-size: 30px; color: #ccc624"></i> </span>
            </button>

              <div> 
                <img src="img/icons8-checked-user-male-26.png" alt=""> <b> Bem vindo(a):</b> <?php echo "<i>"  .$_SESSION["login"] . "</i>" ; ?> <a style="text-decoration: none;" href="logout.php">&nbsp;<img id="logout" src="img/icons8-sair-24.png" alt=""></a> 
             </div>
        </nav>
