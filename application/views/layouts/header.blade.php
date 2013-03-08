<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>

<a href="<?php echo URL::base(); ?>" id="link_img">
	<img src="<?php echo URL::base(); ?>/img/logo.png">
</a>

<div class="nav-collapse collapse" id="menu">

	<ul class="nav">
		<li><a href="<?php echo URL::base(); ?>/" <?php if($link == 'main') {echo 'style="color: #000"';} ?>>Principal</a></li>
		<li><a href="<?php echo URL::base(); ?>/about" <?php if($link == 'about') {echo 'style="color: #000"';} ?>>Sobre Nós</a></li>
		<li><a href="<?php echo URL::base(); ?>/solutions" <?php if($link == 'solutions') {echo 'style="color: #000"';} ?>>Soluções</a></li>
		<li><a href="<?php echo URL::base(); ?>/contact" <?php if($link == 'contact') {echo 'style="color: #000"';} ?>>Contato</a></li>
		<li <?php echo 'style="color: #000"'; ?>>@yield('logout')</li>
	</ul>

</div>
