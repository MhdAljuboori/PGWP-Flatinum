<?php
get_header(); ?>

<div class="container text-center page-not-found">
    <h1><i class="fa fa-frown-o"></i> <?php _e( '404 !', 'flatinum' ); ?></h1>
    <h3><?php _e( 'Page Not Found !', 'flatinum' ); ?></h3>
    <p><?php _e( 'Go back to', 'flatinum' ); ?> <a>
            <?php _e( 'home', 'flatinum' ); ?>
        </a> <?php _e( 'page', 'flatinum' ); ?></p>
</div>            

<?php get_footer(); ?>