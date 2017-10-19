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
?>
<div class="left-section wow fadeInUp">
  <?php if (post_password_required() || is_attachment() || ! has_post_thumbnail()) {
		//return;
	} else {
		the_post_thumbnail('page-thumbnail', array( 'alt' => get_the_title(),'class'=> "img-responsive"));		
		} ?>
    <?php the_content(); ?>  
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
<!--entry--> 