<!--SUB MENU-->
<div class="container-fluid">
    <hr style="background-color:orange">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                    if(isset($categorias) && $categorias != []){ //se existir categorias mostra o foreach
                ?>
                <?php 
                    foreach($categorias as $categoria){ //laço para todas as categorias existentes.
                ?>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $categoria;?></a>
                        </li>
                    </ul>
                <?php } ?>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
              </form>
                    <?php }else{
                        echo "Não possuímos categorias"; //senao possuir categorias
                    }
                    ?>
            </div>
        </nav>                
    </div>
<!--FIM SUBMENU-->