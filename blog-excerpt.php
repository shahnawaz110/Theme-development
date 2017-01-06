<?php
/*
Template Name: Blog

*/
?>


<?php get_header(); ?>
		 <div class="page-content">
		 	<div class="inner-content">
		 		<div class="page-title">
		 			<h1>Blog</h1>
		 		</div>
		 		    <div class="contentleft">
		 			<div class="Blog">
		 				<?php query_posts('posta_per_page=-1');
		 				while(have_posts()) : the_post();?>
		 				<div class="post <?php if(has_post_thumbnail()){?>
		 						has-thumbnail <?php } ?>">
		 					 <div class="post-thumbnail">
		 					 	<?php the_post_thumbnail('small-thumbnail');?>
		 					 </div>
		 					<h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		 					<div class="author">
		 							In <?php the_category('&nbsp;/&nbsp');?>by
		 								<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"> 
		 								<?php the_author();?>
		 								</a>
		 								 on the <?php the_time('dS, F ,Y');?></div><!--End of Author-->
		 								 
		 								 <p><?php the_excerpt();?></p>
		 								 <div class="tags">
		 							<?php the_tags('Tags :','&nbsp/&nbsp');?>
		 						</div>
		 							<div class="btn"><a href="<?php the_permalink();?>">Read More --></a></div>
		 				</div><!--End of Post-->	 
		 							<?php endwhile; wp_reset_query(); ?>
		 				</div><!--End of Blog-->
		 			</div><!--End of Content Left-->
		 					<div class="contentright">
		 					<?php get_sidebar();?>
		 			</div>
		 			<div class="clearfix"></div>	
			 </div>
		</div>

<?php get_footer(); ?>





