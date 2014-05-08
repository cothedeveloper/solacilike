



<div id="moveTriangle"><ul class="list-inline text-center"><li><img src="<?php bloginfo('template_directory'); ?>/assets/img/triangle.png" alt="Upside Down Triangle"  class="img-responsive " width="60px" height="60px"/></li></ul></div>
<div class="mainContent ">

<!--  <h1>
    <?php echo roots_title(); ?>
  </h1>
-->

<?php while (have_posts()) : the_post(); ?>
 <?php the_post_thumbnail(); ?>

  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>


</div>
<div class="row">

</div>



