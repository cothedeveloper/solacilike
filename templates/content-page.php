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



