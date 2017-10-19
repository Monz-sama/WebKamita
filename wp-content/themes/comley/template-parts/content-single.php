<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Comley
 * @since Comley 1.0
 */
 $classes = array(
		'col-md-12',
		'col-sm-12',
		'col-xs-12',
		'blog-col'
	);
?>
<div id="post-<?php the_ID(); ?>" <?php  post_class($classes); ?>>
  <header class="entry-header wow fadeInUp">
    <h1 class="entry-title">
      <?php comley_post_title(); ?>
    </h1>
    <div class="entry-meta">  <?php _e('by', 'comley'); ?> 
      <?php the_author_posts_link() ?>
     <?php the_time('l,F j, Y') ?>
    </div>    
    <!--entry-meta-->    
  </header>
  <div class="entry-summary wow fadeInUp">
    <?php comley_post_thumbnail(); ?>
     <?php the_content();?>
     <?php
     wp_link_pages( array(
				'next_text' => '<span class="meta-nav alignright" aria-hidden="true">' . __( '', 'comley' ) . '</span> ' .
					'<span class="screen-reader-text alignright">' . __( 'Next:', 'comley') . '</span> ' .
					'<span class="post-title alignright">'.__('Next &raquo;', 'comley').'</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '', 'comley' ) . '</span> ' .
					'<span class="screen-reader-text alignleft">' . __( 'Previous:', 'comley' ) . '</span> ' .
					'<span class="post-title alignleft">'.__('&laquo; Previous', 'comley').'</span>',
			) );
	 ?>
     </div>  
  <!--entry-summary-->
  <div class="entry-footer"> 
  <div class="post-tag">  <span class="Posted"> <?php _e('Posted in:', 'comley'); ?></span>
    <?php the_category();?>
    <div class="tag">
      <?php the_tags(); ?>
    </div>
</div>
    <div class="comment">
      <ul class="social-share">
        <li class="facebook"> 
          <!--fb--> 
          <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php _e('Share this post on Facebook!', 'comley')?>"><i class="fa fa-facebook-f"></i></a> </li>
        <li class="twitter"> 
          <!--twitter--> 
          <a target="_blank" href="http://twitter.com/home?status=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>: <?php the_permalink(); ?>" title="<?php _e('Share this post on Twitter!', 'comley')?>"><i class="fa fa-twitter"></i></a> </li>
        <li class="google-plus"> 
          <!--g+--> 
          <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="<?php _e('Share this post on Google Plus!', 'comley')?>"><i class="fa fa-google-plus"></i></a> </li>
        <li class="pinterest"> 
          <!--Pinterest--> 
          <a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink();?>&media=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>&description=<?php the_title();?> on <?php bloginfo('name'); ?> <?php echo site_url()?>" class="pin-it-button" count-layout="horizontal" title="<?php _e('Share on Pinterest','comley') ?>"><i class="fa fa-pinterest-p"></i></a> </li>
      </ul><span class="shaprater">/</span>
    <a href="<?php comments_link(); ?>">  <?php comments_number(__('0 Comments','comley'), __('1 Comment', 'comley'), __('% Comments', 'comley')); ?></a>
    </div>
    <div style="clear:both;"></div>    
  </div>  
</div>
<!--entry--> 