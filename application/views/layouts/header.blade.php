<div class="navbar" id="header">

    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

    <img src="../img/logo.png">

    <div class="nav-collapse collapse" id="menu">

        <ul class="nav">
            <li><a href="../main"<?php if($link == 'main') {echo 'class="ativo"';} ?>>Principal</a></li>
            <li><a href="../about"<?php if($link == 'about') {echo 'class="ativo"';} ?>>Sobre Nós</a></li>
            <li><a href="../solutions"<?php if($link == 'solutions') {echo 'class="ativo"';} ?>>Soluções</a></li>
            <li><a href="../contact"<?php if($link == 'contact') {echo 'class="ativo"';} ?>>Contato</a></li>
            <li class="active">@yield('logout')</li>
        </ul>

    </div>

</div>