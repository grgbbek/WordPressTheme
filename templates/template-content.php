<?php
/**
 * Template Name: Content
 *
 * Description:  The template for displaying Content Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capkon
 */
get_header(); ?>

<?php
$Bg = get_field('banner_image');
$Title = get_field('banner_title');
$Desc = get_field('banner_desc');
?>
<div class="banner page-banner clear-translucent-bg pv-80"
    style="background-image:url('<?php echo $Bg['url']; ?>'); background-position: 50% 30%;">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-7 text-left space-bottom">
                <?php
                if ($Title) {
                    echo '<div class="title large_dark font-weight-bold">'.$Title.'</div>';
                }
                if ($Desc) {
                    echo '<p class="text-left lead text-dark">'.$Desc.'</p>';
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
            <div class="main col-12 space-bottom">
                <div class="row justify-content-center pb-4 pt-3">
                    <div class="col-lg-12 pt-lg-0 pt-md-5">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; else: ?>
                        <div><?php _e('Sorry, this page does not exist.'); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- main end -->
        </div>
    </div>
</section>
<!-- main-container end -->

<?php get_footer(); ?>