<?php
if(get_option('thread_comments')){
  wp_enqueue_script('comment-reply');
}
/*------------------NAVIGATION FUNCTION----------*/
add_theme_support('menus');
 function set_menu_areas(){
 	register_nav_menu('main-menu','Primary Menu');

  register_nav_menu('footer-menu','Footer Menu');
 }
 add_action('init','set_menu_areas');

/*-------------------FOOTER FUNCTION--------------*/

  function footer_menu(){
 	register_nav_menu('footer','footer Navigation');
 }
 add_action('init','footer_menu');

/*-------------------THEME SUPPORT FUNCTIONS---------*/

 add_theme_support( 'custom-background' );

 add_theme_support('post-thumbnails');
 add_image_size('small-thumbnail',180,120,true);
 add_image_size('banner-image',1002,210,true);
 add_image_size('medium-image',267,200,true);
 add_image_size('slider-image',1000,350,true);
 add_theme_support( 'custom-color' );
 add_theme_support('html5',array('search-form')); 

/*-------------------SIDEBAR FUNCTIONS----------*/
register_sidebar(array(
    'id'=>'right sidebar',
    'name'=>'Right Sidebar',
    'before_wigets'=>'<div class="the-wiget">',
    'after_wigets'=>'</div>',
    'before_title'=>'<h2>',
    'after_title'=>'</h2>',
  ));
register_sidebar(array(
    'id'=>'hw-1',
    'name'=>'Home widget 1',
    'before_wigets'=>'<div class="home-wiget">',
    'after_wigets'=>'</div>',
    'before_title'=>'<h2>',
    'after_title'=>'</h2>',
  ));
register_sidebar(array(
    'id'=>'hw-2',
    'name'=>'Home widget 2',
    'before_wigets'=>'<div class="home-wiget">',
    'after_wigets'=>'</div>',
    'before_title'=>'<h2>',
    'after_title'=>'</h2>',
  ));
register_sidebar(array(
    'id'=>'hw-3',
    'name'=>'Home widget 3',
    'before_wigets'=>'<div class="home-wiget">',
    'after_wigets'=>'</div>',
    'before_title'=>'<h2>',
    'after_title'=>'</h2>',
  ));
//CUCTOM EXCERPT LENGTH
function custom_excerpt_length(){
  return 25;
}
add_filter('excerpt_length','custom_excerpt_length');

/*function the_comments($comments,$args,$depth){
  $GLOBALS['comment'] = $comment;
  ?>

    <li <?php comment_class(); ?> >
    <div id="comment-<?php comment_ID(); ?>">
     <header class="comment_header">
        <?php echo get_avatar($comment,$size='48'); ?>

        <?php printf(__('<cite class="fn">%s</cite>'),get_comment_author_link()); ?>
          <div class="comment-meta commentmetadata">
           on <?php comment_date(); ?> at <?php comment_time(); ?>
           <?php edit_comment_link(__('(Edit)'),' ','')?></div>
      </header>

      <?php if ($comment->comment_approved=='0') : ?>
      <div class="awating-moderation">Your comment is awating moderation.</div>
      <?php endif; ?>

      <?php comment_text() ?>

      <div class="reply">
        <?php comment_reply_link(array_merge($args,array('depth'=>$depth, 'max_depth'=>$args['max_depth'])))?>
      </div>
    </div>
<?php }*/

 ?>