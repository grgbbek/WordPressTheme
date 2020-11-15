<?php
/**
 * Template Name: About
 *
 * Description:  The template for displaying About Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capkon
 */
get_header(); ?>

<!-- banner start -->
<!-- ================ -->
<?php
$aboutBg = get_field('banner_image');
$aboutTitle = get_field('banner_title');
$aboutDesc = get_field('banner_desc');
?>
<div class="banner page-banner clear-translucent-bg pv-80"
    style="background-image:url('<?php echo $aboutBg['url']; ?>'); background-position: 50% 30%;">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-7 text-left space-bottom">
                <?php
                if ($aboutTitle) {
                    echo '<div class="title large_dark font-weight-bold">'.$aboutTitle.'</div>';
                }
                if ($aboutDesc) {
                    echo '<p class="text-left lead text-dark">'.$aboutDesc.'</p>';
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
            <div class="main col-lg-8 order-lg-2 ml-xl-auto">
                <?php
                $storyTitle = get_field('story_title');
                $storyContent = get_field('story_content');
                if($storyTitle)
                {
                    echo '<h1 class="title text-left font-weight-bold" id="story">'. $storyTitle .'<hr></h1>';
                }
                if ($storyContent) {
                    echo $storyContent;
                }
                ?>
                <hr>

                <?php
                $teamTitle = get_field('team_title');
                if($teamTitle)
                {
                    echo '<h1 class="title text-left font-weight-bold" id="leadership">'. $teamTitle .'<hr></h1>';
                }
                ?>
                <div class="team-member-box">
                    <?php
                    $teamName = get_field('team_name');
                    $teamPosition = get_field('team_position');
                    $teamContent = get_field('team_content');
                    $teamProfileLink = get_field('team_profile_link');
                    if($teamName)
                    {
                        echo '<div class="team-member-name"><a href="'. $teamProfileLink .'">'. $teamName .'</a></div>';
                    }
                    if($teamPosition)
                    {
                        echo '<div class="team-member-info">'. $teamPosition .'</div>';
                    }
                    ?>
                    <div class="team-member-content">
                        <?php
                        if($teamContent)
                        {
                            echo $teamContent;
                        }
                        if($teamProfileLink)
                        {
                            echo '<div class="center-block"><a href="'. $teamProfileLink .'">View Profile</a></div>';
                        }
                        ?>
                    </div>
                </div>
                <hr>

                <?php
                $officeTitle = get_field('office_title');

                if($officeTitle)
                {
                    echo '<h1 class="title text-left font-weight-bold" id="office">'. $officeTitle .'<hr></h1>';
                }
                ?>

                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 choose-us-block">
                        <?php
                        if(have_rows('office_information')):
                            while(have_rows('office_information')): the_row();
                            $off_info_icon = get_sub_field('office_info_icon');
                            $off_info_title = get_sub_field('office_info_title');
                            $off_info_data = get_sub_field('office_info_data');

                            echo '<p class="mb-0"><span class="fa '. $off_info_icon .'">&nbsp;</span><strong>'. $off_info_title .'</strong></p>
                            <p>'. $off_info_data .'</p>';
                        ?>

                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
            <!-- main end -->

            <!-- sidebar start -->
            <!-- ================ -->
            <aside class="col-lg-4 col-xl-4 order-lg-1">
                <div class="sidebar">
                    <div class="block clearfix">
                        <nav>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#story">Capkon Story</a></li>
                                <li class="nav-item "><a class="nav-link smooth-scroll" href="#leadership">Leadership Team</a></li>
                                <li class="nav-item "><a class="nav-link smooth-scroll" href="#office">Our Offices</a></li>
                                <li class="nav-item "><a class="nav-link" href="<?php echo site_url('testimonials'); ?>">Testimonials</a></li>
                                <li class="nav-item "><a class="nav-link" href="<?php echo site_url('faqs'); ?>">FAQs</a></li>

                            </ul>
                        </nav>
                    </div>

                </div>
            </aside>
            <!-- sidebar end -->
        </div>
    </div>
</section>
<!-- main-container end -->


<!-- booking section start -->
<!-- ================ -->
<?php echo get_template_part( 'templates/section', 'info' ); ?>
<!-- booking section end -->

<?php get_footer(); ?>