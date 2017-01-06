<?php
/*

Template Name: Full-width layout

*/

?>


<?php get_header(); ?>
		 <div class="page-content">
		 	<div class="inner-content">
		 		<div class="page-title">
		 			<h1><?php the_title();?></h1>
		 		</div>
		 			<div class="Blog">
		 				<?php if(have_posts()) : while(have_posts()) :the_post();?>
		 						 <p><?php the_content();?></p> 
		 				<?php endwhile; else:?>	
		 				   No post found.
		 				 <?php endif;?>	 			
		 			</div>
		 	</div>
		 </div>
<?php get_footer(); ?>





