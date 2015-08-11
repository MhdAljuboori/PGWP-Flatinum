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
                            the_post_thumbnail( 'large', array(
                          'class' => 'attachment-large wp-post-image'
                        ) );
                        }
                         ?>                                 
                    <div class="caption"> 
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_date(); ?> <?php _e( 'by', 'flatinum' ); ?> <?php the_author(); ?> <?php _e( '-', 'flatinum' ); ?> <a href="#comments"><span><?php printf( _nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'flatinum' ), number_format_i18n( get_comments_number() ), get_the_title() ); ?></span></a></p> 
                        <p><?php the_content(); ?></p> 
                    </div>                                 
                </div>
                <?php comments_template( 'comments.php' ); ?>                             
            </div>
            <?php $item_number++; ?>
            <?php if( $item_number % 1 == 0 ) echo '<div class="clearfix visible-md-block visible-lg-block"></div>'; ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>            

<?php get_footer(); ?>