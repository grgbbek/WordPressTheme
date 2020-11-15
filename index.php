<?php
/**
 * Template Name: Home
 *
 * Description:  The template for displaying Home Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capkon
 */
get_header();
?>

<!-- banner start -->
<!-- ================ -->
<div class="banner clearfix">

    <!-- slideshow start -->
    <!-- ================ -->
    <div class="slideshow">

        <!-- slider revolution start -->
        <!-- ================ -->
        <div class="slider-revolution-5-container">
            <div id="slider-banner-fullwidth" class="slider-banner-fullwidth rev_slider" data-version="5.0">
                <ul class="slides">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $sliders = new WP_Query(array(
                        'post_type' => 'slider',
                        'connected_items' => get_queried_object_id(),
                        'nopaging' => true,
                        'posts_per_page' => 4,
                        'order' => 'ASC',
                        'paged' => $paged,
                    ));
                    if ( $sliders->have_posts() ) : while ( $sliders->have_posts() ) : $sliders->the_post();
                    $banner_title = get_field('title');
                    $banner_desc = get_field('description');
                    ?>
                    <!-- slide 1 start -->
                    <!-- ================ -->
                    <li class="text-center" data-transition="random" data-slotamount="default"
                        data-masterspeed="default" data-title="">

                        <!-- main image -->
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="slidebg1" data-bgposition="center top"
                            data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

                        <!-- Transparent Background -->
                        <div class="tp-caption clear-translucent-bg" data-x="center" data-y="center" data-start="0"
                            data-transform_idle="o:1;" data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                            data-transform_out="o:0;s:600;" data-width="5000" data-height="5000">
                        </div>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption large_dark title large_bold_black text-left" data-x="left" data-y="80"
                            data-start="1000" data-width="650" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1150;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                            <?php echo $banner_title; ?>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption medium_dark hidden-xs text-left" data-x="left" data-y="220"
                            data-start="1300" data-width="750" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];sX:1;sY:1;s:800;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><?php echo $banner_desc; ?></div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption small_dark text-left" data-x="left" data-y="280" data-start="1600"
                            data-width="650" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];sX:1;sY:1;s:600;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                            <?php
                        $counter = 0;
                        if( have_rows('buttons') ):
                            while( have_rows('buttons') ) : the_row();
                                $slider_btn_label = get_sub_field('label');
                                $slider_btn_link = get_sub_field('link');
                                $slider_btn_style = get_sub_field('style');
                                if($counter != 0){
                                    echo '<span class="pl-1 pr-1">or</span>';
                                }
                            ?>
                            <a href="<?php echo $slider_btn_link; ?>"
                                class="btn btn-<?php echo $slider_btn_style; ?> margin-clear"><?php echo $slider_btn_label; ?></a>
                            <?php $counter++; endwhile; endif; ?>
                        </div>

                    </li>
                    <!-- slide 1 end -->
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
        <!-- slider revolution end -->

    </div>
    <!-- slideshow end -->

</div>
<!-- banner end -->

<div id="page-start"></div>

<!-- section start -->
<!-- ================ -->
<?php
$below_banner_title = get_field('below_banner_title');
$below_banner_form = get_field('below_banner_form');
if($below_banner_form):
?>
<section class="light-bg pv-30 clearfix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 tailored-option">
                <div class="tailored-option-inner">
                    <?php
                    if($below_banner_title)
                    {
                        echo '<h1 class="title section_title font-weight-bold text-center">'. $below_banner_title .'<hr></h1>';
                    }
                    if($below_banner_form)
                    {
                        echo '<div class="contact-form">'. $below_banner_form .'</div>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- section end -->


<!-- why capkon section start -->
<!-- ================ -->
<section class="light-gray-bg pv-80 clearfix">
    <div class="container">
        <div class="row">
            <?php
                $img_text_title = get_field('img_text_title');
                $img_text_content = get_field('img_text_content');
                $img_text_img = get_field('img_text_image');
                ?>
            <div class="col-lg-6">
                <img src="<?php echo $img_text_img['url']; ?>" alt="" class="img-fluid mt-md-3 w-100">
            </div>
            <div class="col-lg-6 pt-lg-4 pt-md-5">
                <?php
                    if($img_text_title){
                        echo '<h1 class="title section_title font-weight-bold text-left">'. $img_text_title .'<hr></h1>';
                    }
                    if ($img_text_content) {
                        echo '<p class="large text-left">'. $img_text_content .'</p>';
                    }
                    ?>
                <?php if( have_rows('img_text_button') ):  while( have_rows('img_text_button') ): the_row();
                    $img_text_btn_label = get_sub_field('label');
                    $img_text_btn_link = get_sub_field('link');
                    $img_text_btn_style = get_sub_field('style');
                    if($img_text_btn_link){
                        echo '<a href="'. $img_text_btn_link .'" class="btn btn-'. $img_text_btn_style .' btn-lg text-uppercase margin-clear">'. $img_text_btn_label .'</a>';
                    }
                    endwhile;  endif; ?>
            </div>

        </div>
    </div>
</section>
<!-- why capkon section end -->


<!-- services section start -->
<!-- ================ -->
<section class="light-bg pv-80 clearfix">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-8">
                <?php
                    $service_sub_title = get_field('service_sub_title');
                    $service_title = get_field('service_title');
                    $service_desc = get_field('service_desc');
                    if ($service_sub_title) {
                        echo '<h4 class="sub-title text-center">'.$service_sub_title.'</h4>';
                    }
                    if ($service_title) {
                        echo '<h1 class="title font-weight-bold text-center">'.$service_title.'<hr></h1>';
                    }
                    if ($service_desc) {
                        echo '<p class="large text-center">'. $service_desc .'</p>';
                    }
                    ?>
            </div>
        </div>
        <div class="row">
            <?php if( have_rows('service_types') ):
                    while( have_rows('service_types') ): the_row();
                    $title = get_sub_field('title');
                    $desc = get_sub_field('description');
                    $icon = get_sub_field('icon');
                    $link = get_sub_field('link');
                    ?>
            <div class="col-md-4">
                <div class="services_box">
                    <div class="service_icon">
                        <img src="<?php echo $icon['url']; ?>" alt="">
                    </div>
                    <h3 class="service_title"><?php echo $title; ?></h3>
                    <p class="service_desc"><?php echo $desc; ?></p>
                    <a href="<?php echo $link; ?>" class="btn-md-link">Learn More<i
                            class="fa fa-chevron-right pl-10"></i></a>
                </div>
            </div>
            <?php endwhile;  endif; ?>
        </div>
    </div>
</section>
<!-- services section end -->


<!-- testimonials section -->
<!-- ================ -->
<section class="light-gray-bg pv-100 ">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-10">
                <?php
                        $testimonial_sub_title = get_field('testimonial_sub_title');
                        $testimonial_title = get_field('testimonial_title');
                        if ($testimonial_sub_title) {
                            echo '<h4 class="sub-title text-center">'.$testimonial_sub_title.'</h4>';
                        }
                        if ($testimonial_title) {
                            echo '<h1 class="title font-weight-bold text-center">'.$testimonial_title.'<hr></h1>';
                        }
                    ?>
                <br>
            </div>
        </div>
    </div>
    <div class="space-bottom">
        <div class="slick-carousel content-slider">
            <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $testimonials = new WP_Query(array(
                        'post_type' => 'testimonial',
                        'connected_items' => get_queried_object_id(),
                        'nopaging' => true,
                        'posts_per_page' => 3,
                        'order' => 'ASC',
                        'paged' => $paged,
                    ));
                    if ( $testimonials->have_posts() ) : while ( $testimonials->have_posts() ) : $testimonials->the_post();
                    $testimonial_name = get_field('name');
                    $testimonial_desc = get_field('testimonial_text');
                    $testimonial_rating = get_field('testmonial_rating');
                    ?>
            <div>
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-10">
                            <div class="testimonial text-center">

                                <div class="testimonial-body">
                                    <blockquote>
                                        <p class="lead text-dark"><?php echo $testimonial_desc; ?></p>
                                    </blockquote>
                                    <div class="testimonial-info-1">- <?php echo $testimonial_name; ?></div>
                                    <div class="rating">
                                        <?php
                                            switch($testimonial_rating){
                                                case '5':
                                                    echo '<div class="fa fa-star"></div>
                                                    <div class="fa fa-star"></div>
                                                    <div class="fa fa-star"></div>
                                                    <div class="fa fa-star"></div>
                                                    <div class="fa fa-star"></div>';
                                                break;
                                                case "4":
                                                    echo '<div class="fa fa-star"></div>
                                                    <div class="fa fa-star"></div>
                                                    <div class="fa fa-star"></div>
                                                    <div class="fa fa-star"></div>';
                                                break;
                                                case '3':
                                                    echo '<div class="fa fa-star"></div>
                                                    <div class="fa fa-star"></div>
                                                    <div class="fa fa-star"></div>';
                                                break;
                                                case '2':
                                                    echo '<div class="fa fa-star"></div>
                                                    <div class="fa fa-star"></div>';
                                                break;
                                                case '1':
                                                    echo '<div class="fa fa-star"></div>';
                                                break;
                                            }
                                            ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
    <?php
        $testimonialBtnLabel = get_field('testimonial_btn_label');
        $testimonialBtnLink = get_field('testimonial_btn_link');
        if($testimonialBtnLink)
        {
            echo '
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <a href="'. $testimonialBtnLink .'" class="btn btn-accent btn-lg btn-block text-uppercase margin-clear">'. $testimonialBtnLabel .'</a>
                    </div>
                </div>
            </div>
            ';
        }
        ?>


</section>
<!-- testimonials section end -->


<!-- cta section start -->
<!-- ================ -->
<?php $cta_bg_image = get_field('cta_bg_image'); ?>
<section class="accent-translucent-bg pv-100"
    style="background-image:url('<?php echo $cta_bg_image['url']; ?>');background-position: 50% 50%;">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8 text-center">
                <?php
                        $cta_sub_title = get_field('cta_sub_title');
                        $cta_title = get_field('cta_title');
                        $cta_desc = get_field('cta_description');
                        if ($cta_sub_title) {
                            echo '<h4 class="sub-title text-center text-white">'.$cta_sub_title.'</h4>';
                        }
                        if ($cta_title) {
                            echo '<h1 class="title font-weight-bold text-white text-center">'.$cta_title.'<hr></h1>';
                        }
                        if ($cta_desc) {
                            echo '<p class="text-white large text-center mb-2">'. $cta_desc .'</p>';
                        }
                       if( have_rows('cta_button') ):  while( have_rows('cta_button') ): the_row();
                        $cta_btn_label = get_sub_field('label');
                        $cta_btn_link = get_sub_field('link');
                        if($img_text_btn_link){
                            echo '<a href="'. $cta_btn_link .'" class="btn btn-white-transparent btn-lg text-uppercase">'. $cta_btn_label .'</a>';
                        }
                        endwhile;  endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- cta section end -->


<!-- lenders section start -->
<!-- ================ -->
<section class="light-gray-bg pv-80 clearfix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 pt-lg-4 pt-md-5">
                <?php
                        $lender_sub_title = get_field('lender_sub_title');
                        $lender_title = get_field('lender_title');
                        $lender_desc = get_field('lender_desc');
                        $lender_img = get_field('lender_image');
                        if ($lender_sub_title) {
                            echo '<h4 class="sub-title text-center text-white">'.$lender_sub_title.'</h4>';
                        }
                        if ($lender_title) {
                            echo '<h1 class="title section_title font-weight-bold text-center">'.$lender_title.'<hr></h1>';
                        }
                        if ($lender_desc) {
                            echo '<p class="text-white large text-center mb-2">'. $lender_desc .'</p>';
                        }
                        if ($lender_img) {
                            echo '<img src="'. $lender_img['url'] .'" class="lender-img img-fluid" alt="">';
                        }
                        ?>

            </div>

        </div>
    </div>
</section>
<!-- lenders section end -->


<!-- quick contact section start -->
<!-- ================ -->
<?php echo get_template_part( 'templates/section', 'info' );?>
<!-- quick contact section end -->

<?php get_footer(); ?>