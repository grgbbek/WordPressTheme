<!DOCTYPE html>
<html dir="ltr" lang="zxx">

<head>
	<meta charset="utf-8">
	<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo bloginfo( 'site-icon' ) ?>">

	<?php if (is_singular() && pings_open(get_queried_object())): ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<?php endif;?>
	<?php wp_head(); ?>
</head>

<!-- body classes:  -->
<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
<!-- "gradient-background-header": applies gradient background to header -->
<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->

<body class="front-page">

	<!-- scrollToTop -->
	<!-- ================ -->
	<div class="scrollToTop circle"><i class="fa fa-angle-up"></i></div>

	<!-- page wrapper start -->
	<!-- ================ -->
	<div class="page-wrapper">
		<!-- header-container start -->
		<div class="header-container">
			<!-- header-top start -->
			<!-- classes:  -->
			<!-- "dark": dark version of header top e.g. class="header-top dark" -->
			<!-- "colored": colored version of header top e.g. class="header-top colored" -->
			<!-- ================ -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-3 col-sm-6 col-lg-8">
							<!-- header-top-first start -->
							<!-- ================ -->
							<div class="header-top-first clearfix">

								<ul class="list-inline top-header-info hidden-md-down">
									<?php
                                    $address = get_field('address', 'option');
                                    $opening_hour = get_field('opening_hour', 'option');
                                    if($address){
                                        echo '<li class="list-inline-item"><i class="fa fa-map-marker pr-1 pl-2"></i> '. $address .'</li>';
                                    }
                                    if($opening_hour){
                                        echo '<li class="list-inline-item"><i class="fa fa-clock-o pr-1 pl-2"></i> '. $opening_hour .'</li>';
                                    }
                                    ?>
								</ul>
							</div>
							<!-- header-top-first end -->
						</div>
						<div class="col-9 col-sm-6 col-lg-4">

							<!-- header-top-second start -->
							<!-- ================ -->
							<div id="header-top-second" class="clearfix">

								<!-- header top dropdowns start -->
								<!-- ================ -->
								<div class=" text-right">
									<ul class="social-links clearfix">
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
								<!--  header top dropdowns end -->
							</div>
							<!-- header-top-second end -->
						</div>
					</div>
				</div>
			</div>
			<!-- header-top end -->

			<!-- header start -->
			<!-- classes:  -->
			<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
			<!-- "fixed-desktop": enables fixed navigation only for desktop devices e.g. class="header fixed fixed-desktop clearfix" -->
			<!-- "fixed-all": enables fixed navigation only for all devices desktop and mobile e.g. class="header fixed fixed-desktop clearfix" -->
			<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
			<!-- "centered": mandatory class for the centered logo layout -->
			<!-- ================ -->
			<header class="header centered clearfix">
				<div class="container">
					<div class="row">

						<div class="col-md-2 hidden-md-down">
							<!-- header-first start -->
							<!-- ================ -->
							<div class="header-first clearfix hidden-md-down">

								<div id="logo" class="logo mt-2">
									<a href="<?php echo home_url(); ?>">
										<?php
                                        $logo = get_field('site_logo','option');
                                        if( !empty($logo) ): ?>
										<img id="logo_img" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
										<?php endif; ?>
									</a>
								</div>

							</div>
							<!-- header-first end -->
						</div>
						<?php
                        $email = get_field('email','option');
                        $phone = get_field('phone','option');
                        ?>
						<div class="col-lg-4 col-md-4 col-sm-6 col-12">
							<div class="header-info-box mt-3">
								<div class="header-info-icon"><i class="fa fa-envelope-o fa-fw"></i></div>
								<h6>Mail Us</h6>
								<p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="header-info-box mt-3">
								<div class="header-info-icon"><i class="fa fa-phone fa-fw"></i></div>
								<h6>Call Now</h6>
								<p><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 hidden-sm-down">
							<?php
                        if( have_rows('appointment_button', 'option') ):  while( have_rows('appointment_button', 'option') ): the_row();
                            $appointment_btn_label = get_sub_field('label');
                            $appointment_btn_link = get_sub_field('link');
                            if($appointment_btn_link){
                                echo '<a href="'. $appointment_btn_link .'"
                                class="btn btn-accent btn-lg btn-block header-btn text-uppercase mt-3 smooth-scroll">'. $appointment_btn_label .'</a>';
                            }
                        endwhile;  endif; ?>

						</div>
					</div>
				</div>
			</header>
			<div class="header header-menu">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12 col-md-12">
							<!-- header-second start -->
							<!-- ================ -->
							<div class="header-second d-lg-flex d-xl-flex clearfix">

								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- ================ -->
								<div class="main-navigation main-navigation--mega-menu  animated">
									<nav class="navbar navbar-expand-lg navbar-light p-0">
										<div class="navbar-brand clearfix hidden-lg-up">

											<!-- logo -->
											<div id="logo-mobile" class="logo">
												<a href="<?php echo home_url(); ?>">
													<?php if( !empty($logo) ): ?>
													<img id="logo-img-mobile" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
													<?php endif; ?>
												</a>
											</div>

										</div>

										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
											<span class="navbar-toggler-icon"></span>
										</button>

										<div class="collapse navbar-collapse" id="navbar-collapse-1">
											<!-- main-menu -->
											<?php wp_nav_menu(array(
                                                'theme_location' => 'header-menu',
                                                'menu' => 'Header Menu',
                                                'menu_class' => 'navbar-nav ml-xl-auto',
                                                'walker' => new Walker_Nav_Primary(),
                                                'container'=> false,
                                            ));?>
											<!-- main-menu end -->
										</div>
									</nav>
								</div>
								<!-- main-navigation end -->
							</div>
							<!-- header-second end -->
						</div>

					</div>
				</div>
			</div>
			<!-- header end -->
		</div>
		<!-- header-container end -->



		<?php 
		$enable_sticky = get_field('enable_sticky_buttons','option');
		if($enable_sticky == 'yes')
		{			
			echo '<div class="sticky__menu">';
			$sticky_buttons = get_field('sticky_buttons', 'option');
			if( $sticky_buttons )
			{
				echo '<ul class="sticky__menu-group">';				
				foreach($sticky_buttons as $btn){
					$st_icon = $btn['st_btn_icon'];
					$st_label = $btn['st_btn_label'];
					$st_link = $btn['st_btn_link'];
					echo '<li class="sticky__menu-item">
						<h4>
							<a href="'. $st_link .'">
								<span class="sticky__menu-icon">
									<img src="'.$st_icon['url'].'" alt="">
								</span>
								<span class="sticky__menu-text">'. $st_label .'</span>
							</a>
						</h4>
					</li>';
				}
				echo '</ul>';
			}
			echo '</div>';
		}
		?>
