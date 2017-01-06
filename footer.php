
<div class="site-footer">
	<p class="copyrights">
		Wordpress Development<span style="font-size:15px;font-family:sans-serif">&copy;</span>
	</p>
	<div class="footer-menu">
		<?php wp_nav_menu(array('theme_location'=>'footer-menu'));?>
    </div>
</div><!--End of site footer-->

<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.flexslider.js"></script>
<script type="text/javascript">
	jQuery(window).load(function(){
		jQuery('.flexslider').flexslider({
			animation:"slide"
		});
	});
</script>

	<?php wp_footer();?>	
</body>
</html>





        

