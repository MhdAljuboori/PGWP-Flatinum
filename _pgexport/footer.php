
        </main>
        <footer class="">
            <div class="footer" style="background-color:<?php echo get_theme_mod( 'primary_backgroud_color' ); ?>;">
                <div class="container">
                    <?php if ( is_active_sidebar( 'footer_bar' ) ) : ?>
                        <div class="row">
                            <?php dynamic_sidebar( 'footer_bar' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="copyright-footer" style="background-color:<?php echo get_theme_mod( 'dark_primary_backgroud_color' ); ?>;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7"> 
                            <p><?php if( get_theme_mod( 'footer_company_name' ) ) : ?><span><?php echo get_theme_mod( 'footer_company_name', __( 'Company Name' ) ); ?></span><?php endif; ?> &copy; <?php echo date("Y") ?></p> 
                        </div>
                        <div class="col-md-5">
                            <ul class="social-links pull-right">
                                <?php if( get_theme_mod( 'footer_fb_link' ) ) : ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_theme_mod( 'footer_fb_link' ) ); ?>"><i class="fa fa-facebook-square"></i></a>
                                    </li>
                                <?php endif; ?>
                                <?php if( get_theme_mod( 'footer_tw_link' ) ) : ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_theme_mod( 'footer_tw_link' ) ); ?>"><i class="fa fa-twitter-square"></i></a>
                                    </li>
                                <?php endif; ?>
                                <?php if( get_theme_mod( 'footer_google_link' ) ) : ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_theme_mod( 'footer_google_link' ) ); ?>"><i class="fa fa-google-plus-square"></i></a>
                                    </li>
                                <?php endif; ?>
                                <?php if( get_theme_mod( 'footer_linkedin_link' ) ) : ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_theme_mod( 'footer_linkedin_link' ) ); ?>"><i class="fa fa-linkedin-square"></i></a>
                                    </li>
                                <?php endif; ?>
                                <?php if( get_theme_mod( 'footer_vimo_link' ) ) : ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_theme_mod( 'footer_vimo_link' ) ); ?>"><i class="fa fa-vimeo-square"></i></a>
                                    </li>
                                <?php endif; ?>
                                <?php if( get_theme_mod( 'footer_pintrest_link' ) ) : ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_theme_mod( 'footer_pintrest_link' ) ); ?>"><i class="fa fa-pinterest-square"></i></a>
                                    </li>
                                <?php endif; ?>
                                <?php if( get_theme_mod( 'footer_youtube_link' ) ) : ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_theme_mod( 'footer_youtube_link' ) ); ?>"><i class="fa fa-youtube-square"></i></a>
                                    </li>
                                <?php endif; ?>
                                <?php if( get_theme_mod( 'footer_instagram_link' ) ) : ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_theme_mod( 'footer_instagram_link' ) ); ?>"><i class="fa fa-instagram"></i></a>
                                    </li>
                                <?php endif; ?>
                                <?php if( get_theme_mod( 'footer_behance_link' ) ) : ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_theme_mod( 'footer_behance_link' ) ); ?>"><i class="fa fa-behance-square"></i></a>
                                    </li>
                                <?php endif; ?>
                            </ul>                             
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <?php wp_footer(); ?>
    </body>
</html>
