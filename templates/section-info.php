<section class="light-bg pv-80 border-top clearfix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 pt-lg-4 pt-md-5">
                <h1 class="title section_title font-weight-bold text-center">Do you need any Assistance in your loan?<hr></h1>
                <p class="large text-center mb-2">We are here to help you.</p>
            </div>
        </div>
        <div class="row mt-4">
            <?php
            $email = get_field('email','option');
            $phone = get_field('phone','option');
            ?>
            <?php
            if( have_rows('appointment_button', 'option') ):  while( have_rows('appointment_button', 'option') ): the_row();
                $appointment_btn_title = get_sub_field('title');
                $appointment_btn_label = get_sub_field('label');
                $appointment_btn_link = get_sub_field('link');
                if($appointment_btn_link){
                    echo '<div class="col-md-3">
                    <h3 class="title font-weight-bold text-center">'. $appointment_btn_title .'</h3>
                    <a href="'. $appointment_btn_link .'" class="btn btn-accent btn-lg btn-block text-uppercase margin-clear">'. $appointment_btn_label .'</a>
                </div>';
                }
            endwhile;  endif; ?>

            <?php
            if($phone){
                echo '<div class="col-md-2 text-center">
                <h3 class="title font-weight-bold text-center">Call us now</h3>
                <a href="tel:'. $phone .'" class="btn-md-link ancor-link">'. $phone .'</a>
            </div>';
            }
            if($email){
                echo '<div class="col-md-4 text-center">
                <h3 class="title font-weight-bold text-center">Email us at:</h3>
                <a href="mailto:'. $email .'" class="btn-md-link ancor-link">'. $email .'</a>
            </div>';
            }
            ?>

            <?php
            if( have_rows('enquery_button', 'option') ):  while( have_rows('enquery_button', 'option') ): the_row();
                $enquery_btn_title = get_sub_field('title');
                $enquery_btn_label = get_sub_field('label');
                $enquery_btn_link = get_sub_field('link');
                if($appointment_btn_link){
                    echo '<div class="col-md-3">
                    <h3 class="title font-weight-bold text-center">'. $enquery_btn_title .'</h3>
                    <a href="'. $enquery_btn_link .'" class="btn btn-accent btn-lg btn-block text-uppercase margin-clear">'. $enquery_btn_label .'</a>
                </div>';
                }
            endwhile;  endif; ?>
        </div>
    </div>
</section>