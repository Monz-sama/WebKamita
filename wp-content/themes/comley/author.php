<?php get_header(); ?>  
 <!--banner--><section id="content" class="wow fadeInUp">
    <div class="container">
      <div class="row">
      <header class="page-header"><br />
     <h1 class="page-title author"><?php printf( __( 'Author Archives: %s', 'comley'), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1><br />
                </header>
          <?php if(have_posts()): ?>
          <article class="col-md-8 col-sm-8 col-xs-12"> 
          <div class="left-section wow fadeInUp">
               <?php while(have_posts()): the_post(); 
                 get_template_part('template-parts/content', get_post_format());
                 endwhile;
                ?>
            <!--entry--> 
          </div>
          <!--left-section-->
          <nav>
             <ul class="pagination wow fadeInUp">
              <a href="#" aria-label="Previous" class="prev"> <span aria-hidden="true"><?php previous_posts_link(__('&laquo; Previous', 'comley')); ?></span> </a> <a href="#" aria-label="Next" class="next"> <span aria-hidden="true"><?php next_posts_link(__('Next &raquo;', 'comley')); ?></span> </a>
            </ul>
          </nav>
        </article>
          <?php else: get_template_part('template-parts/content', 'none'); endif; ?>
        <aside class="col-md-4 col-sm-4 col-xs-12">
        <?php get_sidebar(); ?>
        </aside>
      </div>
    </div>
  </section>
  <!--content-->
  <?php get_footer(); ?>