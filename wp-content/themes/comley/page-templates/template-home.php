<?php
/*
Template Name: Home Page
*/
get_header();?>
<?php $front_placement=get_theme_mod('front_placement') ; ?> 
<?php  if($front_placement=='slider') { get_template_part('home', 'slider'); } else if($front_placement=='banner') { get_template_part('front', 'banner');  }?>
<!--banner-->
<section id="content" class="wow fadeInUp">
  <div class="container">
    <div class="row">
      <?php
      $paged = ( get_query_var('page') ) ? get_query_var('page') : 1; 
       $query_args = array(
      'post_type' => 'post',
      'posts_per_page' => 3,
      'order' => 'DESC'
     );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
  if ($the_query->have_posts() ) : ?>
      <article class="col-md-12">
        <div class="full-section wow fadeInUp">
          <?php while($the_query->have_posts()): $the_query->the_post(); 
                  get_template_part('template-parts/content', get_post_format() );
                 endwhile;
                 ?>
          <!--entry--> 
        </div>
        <!--full-section-->
      </article>
      <?php if ($the_query->max_num_pages > 1) {?>
         <div class="loadmore_post" max_page="<?php echo $the_query->max_num_pages?>" start_page="1"> 
         	<a class="btn" href="#"><?php esc_html_e('Load More Post', 'comley'); ?><i aria-hidden="true" class="fa fa-angle-double-down"></i><i class="fa fa-refresh fa-spin"></i></a>
         </div>
         <?php }?>
      <?php else: get_template_part('template-parts/content', 'none');  endif; ?>
    </div>
  </div>
</section>
<!--content-->
<?php get_footer(); ?>