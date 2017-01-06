<?php get_header(); ?>
		 <div class="page-content">
		 	<div class="inner-content frontpage-inner">
		 	<section>
		 		<div class="flexslider">
		 			<ul class="slides">
		 			<?php
		 				query_posts(array('posts_per_page'=>3, 'category_name'=>'Featured'));
		 				if(have_posts()) : while(have_posts()) : the_post();
		 			?>
		 				<li class="featured-post">
		 				<?php the_post_thumbnail('slider-image'); ?>
		 				<div class="caption">
		 					<a href="#" class="slider-title"><?php the_title();?></a>
		 					<?php the_excerpt(); ?>
		 					<a href="<?php the_permalink();?>" class="btn">Read More!</a>
		 				</div>
		 			</li>
		 			<?php
		 				endwhile; endif;
		 				wp_reset_query();
		 			?>
		 			</ul>
		 		</div>
		 	</section>

		 		<div class="featured">
		 			<div class="col-1-3">
		 				<div class="feature">
		 				<?php dynamic_sidebar('hw-1');?>
		 				</div>
		 			</div>
		 			<div class="col-1-3">
		 				<div class="feature">
		 				<?php dynamic_sidebar('hw-2');?>
		 				</div>
		 			</div>
		 			<div class="col-1-3">
		 				<div class="feature">
		 					<?php dynamic_sidebar('hw-3');?>
		 				</div>
		 			</div>
		 		</div>
		 		<div class="blog">
		 			<div class="contentleft" id="frontpage-left">
		 				<div class="frontpage-title"><h1>Latest Posts</h1></div>
		 					<div class="latest-posts">
		 					<?php query_posts('posts_per_page=4');
		 						while(have_posts()) : the_post();
		 					;?>
		 							<div class="col-1-2">
		 								<div class="latest-post">

		 									<h1 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
		 										<div class="fontpage_thumbnail">
		 											<?php the_post_thumbnail('medium-thumbnail');?>
		 										</div>
		 										<?php the_excerpt();?>
		 									
		 								</div>
		 							</div>

		 				<?php endwhile; wp_reset_query();?>
		 					</div><!-- enf of latest posts-->
		 			</div><!-- enf of contentleft-->
		 				<div class="contentright">
		 					<?php get_sidebar();?>
		 				</div>
		 		</div>
		 				<div class="clearfix"></div>
			 </div><!-- inner content-->
		</div><!-- Page content-->

<?php get_footer(); ?>





