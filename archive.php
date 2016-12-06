<?php get_header(); ?>

      <div class="archives-header">
        <h1><?php wp_title(''); ?></h1>
      </div>

<div class="page-container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="section group">  

            <div class="col span_6_of_12">

                <p><?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
                <?php endif; ?></p>

            </div>

            <div class="col span_6_of_12">

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <p><em>
                by <?php the_author(); ?> 
                on <?php echo the_time('l, F jS, Y');?>
                in <?php the_category( ', ' ); ?>.<br>
                <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                </em></p>

                <?php the_excerpt(); ?><a href="<?php the_permalink(); ?>"><button>Read More</button></a>

            </div>

        </div>

        <br><hr><br>

        <?php endwhile; else: ?>

        <div class="page-header">
            <h1 class="page-title"><?php _e( 'Oh no!', 'sell-your-thing' ); ?></h1>
        </div>

        <p><?php _e( 'No content is appearing for this page!', 'sell-your-thing' ); ?></p>
         
         <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>></div> 

        <?php endif; ?>

        <p>&nbsp;</p>

            <div class="pagination">

                <?php the_posts_pagination( array( 
                'mid_size' => 2,
                'type' => 'list',
                )); ?>

            </div>

        <p>&nbsp;</p><p>&nbsp;</p>

</div>

<?php get_footer(); ?>