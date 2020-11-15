<?php
/**
 * Template Name: Contact
 *
 * Description:  The template for displaying Contact Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capkon
 */
get_header(); ?>


<!-- banner start -->
<!-- ================ -->
<?php
$contactBg = get_field('banner_image');
$contactTitle = get_field('banner_title');
$contactDesc = get_field('banner_desc');
?>
<div class="banner page-banner clear-translucent-bg pv-80"
    style="background-image:url('<?php echo $contactBg['url']; ?>'); background-position: 50% 30%;">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-7 text-left space-bottom">
                <?php
                if ($contactTitle) {
                    echo '<div class="title large_dark font-weight-bold">'.$contactTitle.'</div>';
                }
                if ($contactDesc) {
                    echo '<p class="text-left lead text-dark">'.$contactDesc.'</p>';
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
                <div class="row">
                    <div class="col-lg-8">
                        <?php
                        $contactTitle = get_field( 'contact_form_title' );
                        $contactDesc = get_field( 'contact_form_desc_' );
                        $contactForm = get_field( 'contact_form_7' );
                        if ($contactTitle) {
                            echo '<h1 class="title font-weight-bold text-left">'. $contactTitle .'<hr></h1>';
                        }
                        if($contactDesc)
                        {
                            echo '<p>'. $contactDesc .'</p>';
                        }
                        if ($contactForm) {
                            echo '<div class="contact-form">'. $contactForm .'</div>';
                        }
                        ?>
                    </div>
                    <div class="col-lg-4">
                        <?php
                        $contact_info = get_field('enable_contact_info');
                        if ($contact_info) : ?>
                            <h1 class="title font-weight-bold text-left">Contact Us<hr></h1>
                            <?php
                            if($contact_info && in_array( 'address', $contact_info ))
                            {
                                echo '<div class="contact-page-info">
                                <div class="contact_icon">
                                    <img src="'.CP_IMG.'/marker.png" alt="">
                                </div>
                                <div class="contact__info">
                                    <strong>Location: </strong><br>
                                    8/95 Bell St. Coburg VIC 3058, Australia
                                </div>
                            </div>';
                            }
                            if($contact_info && in_array( 'email', $contact_info ))
                            {
                                echo '<div class="contact-page-info">
                                <div class="contact_icon">
                                    <img src="'.CP_IMG.'/mail.png" alt="">
                                </div>
                                <div class="contact__info">
                                    <strong>Email: </strong><br>
                                    <a href="mailto:prakash@capkonmelbourne.com.au">prakash@capkonmelbourne.com.au</a>
                                </div>
                            </div>';
                            }
                            if($contact_info && in_array( 'phone', $contact_info ))
                            {
                                echo '<div class="contact-page-info">
                                <div class="contact_icon">
                                    <img src="'.CP_IMG.'/phone.png" alt="">
                                </div>
                                <div class="contact__info">
                                    <strong>Phone: </strong><br>
                                    <a href="tel:61434400958"> +61 434 400 958</a>
                                </div>
                            </div>';
                            }
                            ?>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- main end -->
        </div>
    </div>
</section>
<!-- main-container end -->

<!-- map section start -->
<!-- ================ -->
<section class="light-bg padding-clear clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div style="padding:25% 0 0 0;position:relative;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3155.0676747581733!2d144.96325411521943!3d-37.74155653768781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad644b43831488f%3A0x462e0139567b3f99!2s8%2F95%20Bell%20St%2C%20Coburg%20VIC%203058%2C%20Australia!5e0!3m2!1sen!2snp!4v1595420950461!5m2!1sen!2snp" frameborder="0"
                        style="position:absolute;top:0;left:0;width:100%;height:100%;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- map section end -->

<!-- quick contact section start -->
<!-- ================ -->
<?php echo get_template_part( 'templates/section', 'info' );?>
<!-- quick contact section end -->

<?php get_footer(); ?>