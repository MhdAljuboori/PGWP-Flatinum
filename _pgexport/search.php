<?php
get_header(); ?>

<div class="container">
    <h2><?php _e( 'Search results for:', 'flatinum' ); ?> <?php echo esc_html( get_search_query( false ) ); ?></h2>
    <?php if ( have_posts() ) : ?>
        <?php $item_number = 0; ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-xs-12"> 
                <div class="thumbnail"> 
                    <div class="caption">
                        <a href="<?php echo esc_url( get_permalink() ); ?>"><h3><?php the_title(); ?></h3></a> 
                        <?php the_excerpt( ); ?>                                     
                    </div>                                 
                </div>                             
            </div>
            <?php $item_number++; ?>
            <?php if( $item_number % 1 == 0 ) echo '<div class="clearfix visible-xs-block visible-sm-block visible-md-block visible-lg-block"></div>'; ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>            

<?php get_footer(); ?>