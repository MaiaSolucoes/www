<section class="row">
    <header class="span3">
        <a href="<?php echo URL::base(); ?>" id="link_img"><img alt="Maia Soluções" src="<?php echo URL::base(); ?>/img/maia-solucoes-em-ti.png"></a>
    </header>
    <nav class="offset1 span6 downset1">
        <ul class="nav nav-pills">
            <li><a href="<?php echo URL::base(); ?>/" <?php if($link == 'main') {echo 'style="color: #000"';} ?>>Principal</a></li>
            <li><a href="<?php echo URL::base(); ?>/about" <?php if($link == 'about') {echo 'style="color: #000"';} ?>>Sobre Nós</a></li>
            <li><a href="<?php echo URL::base(); ?>/solutions" <?php if($link == 'solutions') {echo 'style="color: #000"';} ?>>Soluções</a></li>
            <li><a href="<?php echo URL::base(); ?>/contact" <?php if($link == 'contact') {echo 'style="color: #000"';} ?>>Contato</a></li>
        </ul>
    </nav>
</section>