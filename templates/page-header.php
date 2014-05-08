<!--I will use this code to control the feature which is displayed on this page 
     I will need to echo the content on this page. All the HTML.  SHould be fun!-->
<?php


if ( is_page_template('template-custom.php')) {
 query_posts( array ( 'category_name' => 'Featured'));

   

?>
<div class="page-header">
<div>
<div class="musicHeader">
<?php while (have_posts()) : the_post();  posts_nav_link(' &#183; ', 'previous page', 'next page'); ?>

<div class="row">
<!--I set the Post URL for Pinterest. Description from thumbnail is posted to Pinterest-->
<?php $postURL=wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); $postURL=urlencode($postURL);?>
<h5><?php echo get_the_date(); ?></h5>
<h4><b> New Music:</b></h4>
<h4> <?php echo get_the_title();  ?></h4>
<ul class="list-inline "><li><img src="<?php bloginfo('template_directory'); ?>/assets/img/greendot.png" alt="Green Dot"  class="img-responsive " width="20px" height="20px"/></li></ul>


<ul class="list-inline slight "><li>
   <div class="view view-first">
                       <div class=""> <?php the_post_thumbnail( array(565,509), array('class' => 'img-responsive')); ?></div>
                    <div class="mask">
                        <h2><?php echo get_post(get_post_thumbnail_id())->post_title; ?> </h2>
                        <p><?php $description=get_post(get_post_thumbnail_id())->post_excerpt; echo $description; ?></p>
                        <a href="<?php echo get_permalink(); ?>" class="info">Read More</a>
                        
      
                      
            
                    </div><!--MASK-->
                               <!--Pinterest Plugin--><div class="row pinIt ">
                 				<div class="col-lg-offset-9 col-md-offset-8 col-sm-offset-8 col-xs-offset-8">
                 <a href="http://www.pinterest.com/pin/create/button/
        ?url=<?php echo $postURL; ?>
        &media=<?php echo $postURL; ?>
        &description=<?php echo urlencode($description);?>"
        data-pin-do="buttonPin"
        data-pin-config="above">

    </a>
    						</div>
    					</div><!--End of Pin plugin-->

                    
   </div><!--view view first-->  
</li></ul>  
<div class=" col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10">
		<p ><?php echo the_excerpt(); ?></p>     
		</div>
	</div><!--row-->
		<div class="row">
		
		</div>
		
	</div><!--music header-->
</div><!--empy div-->


<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); 
endwhile; 


} else {
    // This is not a homepage other code goes here for seperate pages
    
}



?>






<?php wp_reset_query(); ?>

</div><!--page Header-->