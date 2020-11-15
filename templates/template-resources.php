<?php
/**
 * Template Name: Resources
 *
 * Description:  The template for displaying Resources Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capkon
 */
get_header(); ?>

<!-- banner start -->
<!-- ================ -->
<?php
$resourceBg = get_field('banner_image');
$resourceTitle = get_field('banner_title');
$resourceDesc = get_field('banner_desc');
?>
<div class="banner page-banner clear-translucent-bg pv-80"
    style="background-image:url('<?php echo $resourceBg['url']; ?>'); background-position: 50% 30%;">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-7 text-left space-bottom">
                <?php
                if ($resourceTitle) {
                    echo '<div class="title large_dark font-weight-bold">'.$resourceTitle.'</div>';
                }
                if ($resourceDesc) {
                    echo '<p class="text-left lead text-dark">'.$resourceDesc.'</p>';
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
                <h1 class="title text-left font-weight-bold">Free Resources
                    <hr>
                </h1>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 15%">Title</th>
                                <th>Description</th>
                                <th style="width: 11%;">Authored By</th>
                                <th style="width: 10%;">Total Pages</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $resources = new WP_Query(array(
                                    'post_type' => 'resource',
                                    'connected_items' => get_queried_object_id(),
                                    'nopaging' => false,
                                    'posts_per_page' => 6,
                                    'order' => 'ASC',
                                    'paged' => $paged,
                                ));
                                if ( $resources->have_posts() ) : while ( $resources->have_posts() ) : $resources->the_post();
                                    $resourceTitle = get_field('resource_title');
                                    $resourceContent = get_field('resources_desc');
                                    $resourceAuthor = get_field('authored_by');
                                    $resourcePages = get_field('total_pages');
                                    $resourceDoc = get_field('document');
                                    echo $resourceDoc;
                                    echo '<tr>
                                    <td>1</td>
                                    <td><a href="'.$resourceDoc['url'].'" target="_blank">'.$resourceTitle.'</a></td>
                                    <td>'.$resourceContent.'</td>
                                    <td>'.$resourceAuthor.'</td>
                                    <td>'.$resourcePages.'</td>
                                </tr>';
                                endwhile; wp_reset_postdata(); endif; ?>
                        </tbody>
                    </table>
                </div>
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