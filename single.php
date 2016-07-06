<?php get_header(); ?>

<div class="page-container">

  <div class="section group">

    <div class="col span_8_of_12">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php
      $thumbnail_id = get_post_thumbnail_id(); 
      $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
      $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);                
      ?>

      <div class="page-header">
        <h1><?php the_title(); ?></h1>
      </div>      

      <p class="post-by"><em>
        by <?php the_author(); ?> 
        on <?php echo the_time('l, F jS, Y');?>
        <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
      </em></p>

      <?php the_content(); ?>

      <?php
        $defaults = array(
          'before'           => '<p>' . __( 'Pages:', 'sell-your-thing-free' ),
          'after'            => '</p>',
          'link_before'      => '',
          'link_after'       => '',
          'next_or_number'   => 'number',
          'separator'        => ' ',
          'nextpagelink'     => __( 'Next page', 'sell-your-thing-free' ),
          'previouspagelink' => __( 'Previous page', 'sell-your-thing-free' ),
          'pagelink'         => '%',
          'echo'             => 1
        );
       
              wp_link_pages( $defaults );
      ?>
      
      <hr>

      <p><em>
        Posted in <?php the_category( ', ' ); ?>.  
        <?php the_tags( 'Tagged with: ', ', ', '<br />' ); ?>
      </em></p>

      <hr>

      <?php if ( ! dynamic_sidebar( 'end-post') ): ?>
      <?php endif; ?>

      <br><br>

      <?php comments_template(); ?>
      <?php paginate_comments_links() ?>

      <?php endwhile; else: ?>

      <div class="page-header">
        <h1>Oh no!</h1>
      </div>

      <p>No content is appearing for this page!</p>

      <?php endif; ?>

    </div>

    <div class="col span_4_of_12">
      <?php get_sidebar( 'blog' ); ?>
    </div>

  </div>

</div>

<?php get_footer(); ?>