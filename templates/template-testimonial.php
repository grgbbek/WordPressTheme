<?php
/**
 * Template Name: Testimonial
 *
 * Description:  The template for displaying FAQ Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capkon
 */
get_header(); ?>

<!-- banner start -->
<!-- ================ -->
<?php
$testimonialBg = get_field('banner_image');
$testimonialTitle = get_field('banner_title');
$testimonialDesc = get_field('banner_desc');
?>
<div class="banner page-banner clear-translucent-bg pv-80"
    style="background-image:url('<?php echo $testimonialBg['url']; ?>'); background-position: 50% 30%;">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-7 text-left space-bottom">
                <?php
                if ($testimonialTitle) {
                    echo '<div class="title large_dark font-weight-bold">'.$testimonialTitle.'</div>';
                }
                if ($testimonialDesc) {
                    echo '<p class="text-left lead text-dark">'.$testimonialDesc.'</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->


<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-lg-12">
                <?php
                $diariesTitle = get_field('diaries_title');
                $diariesContent = get_field('diaries_content');
                if($diariesTitle)
                {
                    echo '<h1 class="title text-left font-weight-bold" id="story">'. $diariesTitle .'<hr></h1>';
                }
                if($diariesContent)
                {
                    echo '<p>'. $diariesContent .'</p>';
                }
                $testimonialTitle = get_field('testimonial_title');
                $testimonialDesc = get_field('testimonial_desc');
                if($testimonialTitle)
                {
                    echo '<h1 class="title text-left font-weight-bold" id="story">'. $testimonialTitle .'<hr></h1>';
                }
                if($testimonialDesc)
                {
                    echo '<p>'. $testimonialDesc .'</p>';
                }
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $testimonails = new WP_Query(array(
                    'post_type' => 'testimonial',
                    'connected_items' => get_queried_object_id(),
                    'nopaging' => false,
                    'posts_per_page' => 6,
                    'order' => 'ASC',
                    'paged' => $paged,
                ));
                if ( $testimonails->have_posts() ) : while ( $testimonails->have_posts() ) : $testimonails->the_post();
                    $testimonialName = get_field('name');
                    $testimonialText = get_field('testimonial_text');
                    $testimonialAddress = get_field('testimonial_address');
                    $testimonialImage = get_field('testimonial_image');
                    $testimonialRating = get_field('testmonial_rating');

                    echo '<div class="row testimonial-box">';
                        if($testimonialImage)
                        {
                            echo '<div class="col-md-2 client-img">
                            <img src="'. $testimonialImage['url'] .'" alt="">
                        </div>';
                        }
                        if($testimonialImage)
                        {
                            echo '<div class="col-md-10 client-review">';
                        }else{
                            echo '<div class="col-md-12 client-review">';
                        }
                            if($testimonialName)
                            {
                                echo '<div class="testimonial-name">'. $testimonialName .'</div>';
                            }
                            if($testimonialText)
                            {
                                echo '<div class="testimonial-content">'. $testimonialText .'</div>';
                            }
                            if($testimonialAddress)
                            {
                                echo '<div class="testimonial-info">'. $testimonialAddress .'</div>';
                            }
                            if($testimonialRating)
                            {
                                echo '<div class="rating">';
                                switch($testimonialRating){
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
                            }
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                 endwhile; wp_reset_postdata(); endif; ?>
            </div>
            <!-- main end -->
        </div>
    </div>
</section>
<!-- main-container end -->

<!-- booking section start -->
<!-- ================ -->
<?php echo get_template_part( 'templates/section', 'info' ); ?>
<!-- booking section end -->

<?php get_footer(); ?>