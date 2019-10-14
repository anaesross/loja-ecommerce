<?php include_once("variaveis.php");?>
<!--MENU-->
<header class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img style="width: 10%;padding:10px" src="assets/images/logo.png"/>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <?php
                if(isset($usuario) && $usuario != ""){
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Olá <?php echo $usuario['nome'];?></a>
                </li>
            <?php }else{?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar</a>
                </li>
            </ul>
            <?php } ?>
        </div>
    </nav>
</header>
<!--FIM MENU-->
