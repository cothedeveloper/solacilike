<header class="banner" role="banner">
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 alignLogo">
		<ul class="list-inline">
			<li>
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/solaciHeader.png" alt="So Laci Like Logo" class="img-responsive" width="570" height="160" />
			</li>
		</ul>
	</div> <!--End of Image Div -->
</div><!--row div-->

<div class="row menuHeader textClass">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<nav id="mobileMenu"class="nav-main col-lg-offset-2 col-sm-offset-2 col-md-offset-2 col-xs-offset-2" role="navigation">
			<?php
			if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
			endif;
			?>
		</nav>
    </div>
  </div>
</header>

