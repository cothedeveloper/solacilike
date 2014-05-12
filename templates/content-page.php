<div class="mainContent row">
<!--  <h1>
    <?php echo roots_title(); ?>
  </h1>
-->
	<?php while (have_posts()) : the_post(); ?>
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
	<?php endwhile; ?>
</div><!--EndofMainContent Row-->
<div class="row">
	<ul class="list-inline text-center"><li><?php dynamic_sidebar('sidebar-spotify'); ?></li></ul>
</div>



