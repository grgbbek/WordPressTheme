<?php
/**
 * Template Name: FAQ
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
$faqBg = get_field('banner_image');
$faqTitle = get_field('banner_title');
$faqDesc = get_field('banner_desc');
?>
<div class="banner page-banner clear-translucent-bg pv-80"
    style="background-image:url('<?php echo $faqBg['url']; ?>'); background-position: 50% 30%;">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-7 text-left space-bottom">
                <?php
                if ($faqTitle) {
                    echo '<div class="title large_dark font-weight-bold">'.$faqTitle.'</div>';
                }
                if ($faqDesc) {
                    echo '<p class="text-left lead text-dark">'.$faqDesc.'</p>';
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
                $faqsTitle = get_field('faq_title');
                if($faqsTitle)
                {
                    echo '<h1 class="title text-left font-weight-bold" id="story">'. $faqsTitle .'<hr></h1>';
                }
                ?>
                <!-- accordion start -->
                <div id="accordion-faq" class="collapse-style-1 faqs" role="tablist" aria-multiselectable="true">
                    <?php
                    $counter = 0;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $faqs = new WP_Query(array(
                        'post_type' => 'faq',
                        'connected_items' => get_queried_object_id(),
                        'nopaging' => false,
                        'posts_per_page' => 6,
                        'order' => 'ASC',
                        'paged' => $paged,
                    ));
                    if ( $faqs->have_posts() ) : while ( $faqs->have_posts() ) : $faqs->the_post();
                        $counter ++;
                        $que = get_field('question');
                        $ans = get_field('answer');
                    ?>
                    <div class="card">
                        <div class="card-header" role="tab" id="heading_<?php echo $counter; ?>">
                            <h4 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordion-faq" href="#collapse_<?php echo $counter; ?>"
                                    class="collapsed" aria-expanded="true" aria-controls="collapse1">
                                    <?php echo $que; ?>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_<?php echo $counter; ?>" class="collapse" role="tabpanel" aria-labelledby="heading_<?php echo $counter; ?>">
                            <div class="card-block">
                                <?php echo $ans; ?>
                            </div>
                        </div>
                    </div>
                    <?php  endwhile; wp_reset_postdata(); endif; ?>
                </div>
                <!-- accordion end -->
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