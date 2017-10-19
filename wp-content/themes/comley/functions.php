<?php
/**
 * Return url with Google Fonts.
 *
 * @return string Google fonts URL for the theme.
 */
function comley_google_web_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = array( 'latin', 'latin-ext' );
	$fonts = apply_filters( 'pre_google_web_fonts', $fonts );
	foreach ( $fonts as $key => $value ) {
		$fonts[ $key ] = $key . ':' . implode( ',', $value );
	}
	/* translators: To add an additional character subset specific to your language, translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'comley');
	if ( 'cyrillic' == $subset ) {
		array_push( $subsets, 'cyrillic', 'cyrillic-ext' );
	} elseif ( 'greek' == $subset ) {
		array_push( $subsets, 'greek', 'greek-ext' );
	} elseif ( 'devanagari' == $subset ) {
		array_push( $subsets, 'devanagari' );
	} elseif ( 'vietnamese' == $subset ) {
		array_push( $subsets, 'vietnamese' );
	}
	$subsets = apply_filters( 'subsets_google_web_fonts', $subsets );
	if ( $fonts ) {
		$fonts_url = add_query_arg(
			array(
				'family' => urlencode( implode( '|', $fonts ) ),
				'subset' => urlencode( implode( ',', array_unique( $subsets ) ) ),
			),
			'//fonts.googleapis.com/css'
		);
	}
	return apply_filters( 'google_web_fonts_url', $fonts_url );
}
/**
 * Return Google fonts and sizes
 *
 * @return array Google fonts and sizes.
 */
function comley_additional_fonts( $fonts ) {
	/* translators: If there are characters in your language that are not supported by Noto Serif, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'comley' ) ) {
		$fonts['Open Sans'] = array('300italic' => '300italic','400italic'=>'400italic','600italic'=>'600italic','700italic'=>'700italic','800italic'=>'800italic','400'       => '400','300'=> '300','600'=> '600','700'=> '700','800'=> '800');
	}if ( 'off' !== _x( 'on', 'Oswald font: on or off', 'comley')){
		$fonts['Oswald'] = array('400'=>'400','300'=> '300','700'=>'700');
	}if ( 'off' !== _x( 'on', 'Great Vibes font: on or off', 'comley')){
		$fonts['Great Vibes'] = array();
	}
	return $fonts;
}
add_filter('pre_google_web_fonts', 'comley_additional_fonts');
// Register Comley script and css 
       function comley_scripts() {
		wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array('jquery'),'3.3.5',true);
		 wp_enqueue_script('flexslider_jquery', get_template_directory_uri() .'/js/flexslider.js', array('jquery'),true );
        wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.js', array('jquery'),'0.1.4',true);
        wp_enqueue_script('comley-custom-script', get_template_directory_uri().'/js/custom.js', array('jquery'),'',true);
        wp_localize_script( 'comley-custom-script', 'comley_wp_ajax_url', admin_url( 'admin-ajax.php' ) );  
        wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
		wp_enqueue_style('comley-style', get_stylesheet_uri());
        wp_enqueue_style('comley-responsive', get_template_directory_uri().'/css/responsive.css' );
        wp_enqueue_style('flexslider_css', get_template_directory_uri() . '/css/flexslider.css' );
		wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css',array(), '4.4.0','all');
        wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css');
        // Load the HTML5 Shiv.
		wp_enqueue_script('html5shiv', get_template_directory_uri().'/js/html5shiv.js', array(), '3.7.2' );
	    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
        //Respond.js for IE8 support of HTML5 elements and media queries
        wp_enqueue_script('comley-respond', get_template_directory_uri().'/js/respond.js', array('jquery'), '1.4.2' );
        wp_script_add_data('comley-respond', 'conditional', 'lt IE 8');
		wp_enqueue_style('comley-google-fonts', comley_google_web_fonts_url(), array(), null, 'all' );       
		if (is_page() && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'comley_scripts');
/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Comley
 */
function comley_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'comley' ),
		'id'            => 'sidebar-one',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'comley' ),
		'before_widget' => '<section id="%1$s" class="widget wow fadeInUp %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'comley_widgets_init');
require get_template_directory() . '/admin/template-tags.php';
require get_template_directory() . '/admin/comleypro/class-customize.php';
require get_template_directory() . '/admin/customizer.php';
require get_template_directory() . '/admin/custom_header.php';
require get_template_directory() . '/admin/custom_css.php';
/* takes user input from the customizer and outputs linked social media icons */
function comley_social_media_icons() {
    $social_sites = comley_customizer_social_media_array();
    /* any inputs that aren't empty are stored in $active_sites array */
    foreach($social_sites as $social_site) {
        if( strlen( get_theme_mod( $social_site ) ) > 0 ) {
            $active_sites[] = $social_site;
        }
    }
    /* for each active social site, add it as a list item */
        if ( ! empty( $active_sites ) ) {
            echo "<div class='social-media-icons social'>";
            foreach ( $active_sites as $active_site ) {
	            /* setup the class */
		        $class = 'fa fa-' . $active_site;
                if ( $active_site == 'email' ) {
   ?>
                         <a class="email" target="_blank" href="mailto:<?php echo antispambot(is_email( get_theme_mod( $active_site ) ) ); ?>">
                            <i class="fa fa-envelope" title="<?php _e('email icon', 'comley'); ?>"></i>
                        </a>
                 <?php } else { ?>
                         <a class="<?php echo $active_site; ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( $active_site) ); ?>">
                            <i class="<?php echo esc_attr( $class ); ?>" title="<?php printf( __('%s icon', 'comley'), $active_site ); ?>"></i>
                        </a>
                 <?php
                }
            }
            echo "</div>";
        }
}
function comley_load_more_posts()
{
	$the_query = new WP_Query( array('posts_per_page' =>3,'paged'=>$_POST['paged'] ) );
		while($the_query->have_posts()) : $the_query->the_post();?>
		 <?php 
		 if(get_theme_mod('blog_posts_layouts')=='gridlayout' && get_theme_mod('blog_layouts')=='blogfullwidth'){
	$classes = array(
		'col-md-4',
		'col-sm-4',
		'col-xs-12',
		'blog-col'
	);
}elseif(get_theme_mod('blog_posts_layouts')=='gridlayout' && get_theme_mod('blog_layouts')=='blogwithrightsidebar'){
	$classes = array(
		'col-md-6',
		'col-sm-6',
		'col-xs-12',
		'blog-col'
	);
}elseif(get_theme_mod('blog_posts_layouts')=='gridlayout' && get_theme_mod('blog_layouts')=='blogwithleftsidebar'){
	$classes = array(
		'col-md-6',
		'col-sm-6',
		'col-xs-12',
		'blog-col'
	);
}elseif(get_theme_mod('blog_posts_layouts')=='gridlayout')
{
	$classes = array(
		'col-md-6',
		'col-sm-6',
		'col-xs-12',
		'blog-col'
	);
	
}else 
{
	$classes='';
}
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
     <?php the_excerpt(); echo '<p><a class="btn btn-default" href="'.esc_url(get_permalink()).'">'.__('Continue Reading', 'comley').'</a></p>'; ?>
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
		<?php endwhile;
	die; // here we exit the script and even no wp_reset_query() required!
}
add_action( 'wp_ajax_comley_load_more_posts', 'comley_load_more_posts');
add_action( 'wp_ajax_nopriv_comley_load_more_posts', 'comley_load_more_posts');
?>