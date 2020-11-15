<?php
/**
 * Template Name: Services
 *
 * Description:  The template for displaying Services Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capkon
 */
get_header(); ?>

<!-- banner start -->
<!-- ================ -->
<?php
$serviceBg = get_field('banner_image');
$serviceTitle = get_field('banner_title');
$serviceDesc = get_field('banner_desc');
?>
<div class="banner page-banner clear-translucent-bg pv-80"
    style="background-image:url('<?php echo $serviceBg['url']; ?>'); background-position: 50% 30%;">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-7 text-left space-bottom">
                <?php
                if ($serviceTitle) {
                    echo '<div class="title large_dark font-weight-bold">'.$serviceTitle.'</div>';
                }
                if ($serviceDesc) {
                    echo '<p class="text-left lead text-dark">'.$serviceDesc.'</p>';
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
                    $counter = 0;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $services = new WP_Query(array(
                        'post_type' => 'service',
                        'connected_items' => get_queried_object_id(),
                        'nopaging' => false,
                        'posts_per_page' => 6,
                        'order' => 'ASC',
                        'paged' => $paged,
                    ));
                    if ( $services->have_posts() ) : while ( $services->have_posts() ) : $services->the_post();
                        $counter++;
                        $serviceTitle = get_field('service_title');
                        $displayedContent = get_field('displayed_content');
                        $hiddenContent = get_field('hidden_content');
                        $serviceImage = get_field('service_image');
                        $serviceLink = get_field('normal_link'); ?>
                        <div class="row service-box">
                            <div class="col-md-<?php echo $serviceImage?'10':'12'; ?> service-content">
                                <?php
                                if($serviceTitle)
                                {
                                    echo '<h1 class="title text-left font-weight-bold" id="story">'. $serviceTitle .'<hr></h1>';
                                }
                                if($displayedContent)
                                {
                                    echo '<div class="service-content">'. $displayedContent .'</div>';
                                }
                                ?>
                            </div>
                            <?php if($serviceImage)
                            {
                                echo '<div class="col-md-2 service-img"><img src="'. $serviceImage['url'] .'" alt=""></div>';
                            }
                            if($hiddenContent)
                            {
                                echo '
                                <div class="col-md-12">
                                    <div class="collapse service-content" id="collapseLoan'. $counter .'">
                                        '. $hiddenContent .'
                                    </div>
                                </div>
                                <a class="btn collapsed btn-animated learn_more_link" data-toggle="collapse" href="#collapseLoan'. $counter .'" aria-expanded="false" aria-controls="collapseContent">Continue Reading <i class="fa fa-plus"></i></a>
                                ';
                            }
                            if($serviceLink)
                            {
                                echo '<a href="'. $serviceLink .'" class="btn btn-animated learn_more_link" target="_blank">Continue Reading <i class="fa fa-angle-right"></i></a>';
                            }
                            ?>
                        </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
            <!-- main end -->
        </div>
    </div>
</section>
<!-- main-container end -->

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

<!-- booking section start -->
<!-- ================ -->
<?php echo get_template_part( 'templates/section', 'info' ); ?>
<!-- booking section end -->

<?php get_footer(); ?>