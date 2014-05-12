<footer class="content-info container-fluid " role="contentinfo">
<div class="row text-center">
<a href="#" class="scrollToTop hidden-sm"><p class="moveScrollText">Back To Top</p></a><!--Controlled by jQuery-->


<div class="col-sm-1 col-sm-offset-10 col-xs-1 col-xs-offset-10 moveAnchor blackBorder text-center visible-sm">


<ul class="list-inline  ">
<li>
<a href="#">
<img src="<?php bloginfo('template_directory'); ?>/assets/img/black-cross.svg" alt="black cross"  class="img-responsive " width="100" height="100" />
</a>
</li>
<li><strong>BACK</strong></br>   
TO TOP</p></li>
</ul>
</div>
</div>
	
	
	<div class="row ">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footerText">

			<ul class="list-inline">
			
			<li><?php previous_post_link('%link ','<span class="glyphicon glyphicon-arrow-left"></span>'); ?></li>
		
			<li><h4><b>NAVIGATE</b></h4></li>
		
			<li> <?php next_post_link('%link ','<span class="glyphicon glyphicon-arrow-right"></span>'); ?> </li>
			</ul>
<img src="<?php bloginfo('template_directory'); ?>/assets/img/squiggly.png" id="pullUp" alt="Squiggly Line" width="100px" height="50px">
		</div><!--footerText coulumn-->


	</div><!--End of Row-->





	  <div class="borderTop row">
		<div class="footerText col-lg-12 col-md-12 col-sm-12">
			<?php display_Social_Icons(); ?>
	        
		    <?php dynamic_sidebar('sidebar-footer'); ?>
		    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
		</div><!--footerText-->
	  </div><!--border Top-->
</footer>

<?php wp_footer(); ?>
