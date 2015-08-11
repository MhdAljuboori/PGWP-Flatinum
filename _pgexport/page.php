<?php
get_header(); ?>

<div class="container">
    <?php if ( have_posts() ) : ?>
        <?php $item_number = 0; ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-md-12"> 
                <div class="thumbnail single-post">
                    <?php 
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'large' );
                        }
                         ?>                                 
                    <div class="caption"> 
                        <h1><?php the_title(); ?></h1> 
                        <p><?php the_content(); ?></p> 
                    </div>                                 
                </div>                             
            </div>
            <?php $item_number++; ?>
            <?php if( $item_number % 1 == 0 ) echo '<div class="clearfix visible-md-block visible-lg-block"></div>'; ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>            

<?php get_footer(); ?>