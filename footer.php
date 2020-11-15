<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
<!-- ================ -->
<footer id="footer" class="clearfix ">

    <!-- .footer start -->
    <!-- ================ -->
    <div class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="row justify-content-end border-bottom">
                    <div class="col-md-4">
                        <ul class="social-links circle animated-effect-1 text-right">
                            <?php
                            $facebook = get_field('facebook_link', 'option');
                            $instagram = get_field('instagram_link', 'option');
                            $linkedin = get_field('linkedin_link', 'option');
                            $youtube = get_field('youtube_link', 'option');
                            $twitter = get_field('twitter_link', 'option');
                            $skype = get_field('skype_link', 'option');
                            if($facebook){
                                echo '<li class="facebook"><a href="'. $facebook .'" target="_blank"><i class="fa fa-facebook"></i></a></li>';
                            }
                            if($instagram){
                                echo '<li class="instagram"><a href="'. $instagram .'" target="_blank"><i class="fa fa-instagram"></i></a></li>';
                            }
                            if($linkedin){
                                echo '<li class="linkedin"><a href="'. $linkedin .'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
                            }
                            if($youtube){
                                echo '<li class="youtube"><a href="'. $youtube .'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
                            }
                            if($twitter){
                                echo '<li class="twitter"><a href="'. $twitter .'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
                            }
                            if($skype){
                                echo '<li class="skype"><a href="'. $skype .'" target="_blank"><i class="fa fa-skype"></i></a></li>';
                            }
                        ?>
                        </ul>
                    </div>
                </div>
                <div class="row border-bottom">
                    <div class="col-lg-3">
                        <?php
                        if ( function_exists( 'dynamic_sidebar' )) {
                            ob_start();
                            dynamic_sidebar( 'footer_col_1st' );
                            $widgetContent = ob_get_contents();
                            ob_end_clean();
                            $sidebar_corrected_ul = str_replace('<ul id="menu-footer-1st-column-menu" class="menu">', '<ul id="menu-footer-1st-column-menu" class="nav flex-column footer_widget">', $widgetContent);
                            echo $sidebar_corrected_ul;
                        }
                        ?>
                    </div>
                    <div class="col-lg-3">
                        <?php
                        if ( function_exists( 'dynamic_sidebar' )) {
                            ob_start();
                            dynamic_sidebar( 'footer_col_2nd' );
                            $widgetContent = ob_get_contents();
                            ob_end_clean();
                            $sidebar_corrected_ul = str_replace('<ul id="menu-footer-2nd-column-menu" class="menu">', '<ul id="menu-footer-2nd-column-menu" class="nav flex-column footer_widget">', $widgetContent);
                            echo $sidebar_corrected_ul;
                        }
                        ?>
                    </div>
                    <div class="col-lg-3">
                        <?php
                        if ( function_exists( 'dynamic_sidebar' )) {
                            ob_start();
                            dynamic_sidebar( 'footer_col_3rd' );
                            $widgetContent = ob_get_contents();
                            ob_end_clean();
                            $sidebar_corrected_ul = str_replace('<ul id="menu-footer-3rd-column-menu" class="menu">', '<ul id="menu-footer-3rd-column-menu" class="nav flex-column footer_widget">', $widgetContent);
                            echo $sidebar_corrected_ul;
                        }
                        ?>
                    </div>
                    <div class="col-lg-3">
                        <?php
                        if ( function_exists( 'dynamic_sidebar' )) {
                            ob_start();
                            dynamic_sidebar( 'footer_col_4th' );
                            $widgetContent = ob_get_contents();
                            ob_end_clean();
                            $sidebar_corrected_ul = str_replace('<ul id="menu-footer-4th-column-menu" class="menu">', '<ul id="menu-footer-4th-column-menu" class="nav flex-column footer_widget">', $widgetContent);
                            echo $sidebar_corrected_ul;
                        }
                        ?>
                    </div>
                </div>
                <div class="row justify-content-center border-bottom">
                    <div class="col-md-8 pt-5 pb-4 text-center">
                        <?php $additional_text = get_field('additional_text','option'); ?>
                        <p><?php echo $additional_text; ?></p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12 pt-5 text-center">
                        <?php
                        $crd_text = get_field('crd_text','option');
                        $cld_text = get_field('cld_text','option');

                        if($crd_text){
                            echo '<h5 class="title">Credit Representative Details</h5>';
                            echo $crd_text;
                        }
                        if($cld_text){
                            echo '<h5 class="title">Credit Licence Details</h5>';
                            echo $cld_text;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer end -->

    <!-- .subfooter start -->
    <!-- ================ -->
    <div class="subfooter">
        <div class="container">
            <div class="subfooter-inner">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <?php
                        $copyright = get_field('copyright','option');
                        if($copyright){
                            echo $copyright;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .subfooter end -->

</footer>
<!-- footer end -->
</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->

<?php wp_footer(); ?>
<script>
    $('p:empty').remove();
</script>
</body>

</html>