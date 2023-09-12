<?php
/**
 * Template Name: Aboutpage
 *
 * @package WordPress
 * @subpackage custom_theme
 * @author Studio TEM
 */

get_header(); ?>


    <section class="section about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div>
                        <p class="cus-text-sm">About Us</p>

                        <h2 class="title">
                            <?php echo get_field('about_title'); ?>
                        </h2>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <p class="about-text-2 pb-4">
                        <?php echo removeFirstP(get_field('about_description')); ?>
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
                            
        <?php if( get_field('banner_image') ): ?>    
            <img
                src="<?php the_field('banner_image'); ?>"
                alt="About"
                class="img-fluid"
            />
        <?php endif; ?>

        </div>
    </section>

    <!-- Markup for Brand section  -->

    <section class="cus-bg-secondary logo-section">
        <div class="container">
            <h6 class="sub-title"><?php echo get_field('business_title'); ?></h6>

            <div class="">
                <div class="logo-carousel-container">
                    <div class="logo-gradient-l"></div>
                    <div class="logo-gradient-r"></div>

                    <div class="logo-carousel">
                        <div class="d-flex align-items-center">
                        <?php if( have_rows('sliders') ): ?>
   
                        <?php while( have_rows('sliders') ): the_row(); 
                            $slider_image = get_sub_field('slider_image');
                            ?>

                            <img src="<?php echo esc_url($slider_image['url']); ?>" alt="<?php echo esc_attr($slider_image['alt']); ?>" class="logo-item"/>
                            
                            <?php echo wp_get_attachment_image( $slider_image, 'full' ); ?>
                        <?php endwhile; ?>
                        
                        <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Markup for count down section -->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div>
                        <h2 class="title"><?php echo get_field('achiev_title') ?></h2>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <p class="about-text-2">
                        <?php echo removeFirstP(get_field('achiev_description')) ?>
                    </p>
                </div>
            </div>

            <!-- Count down  -->

            <div class="row section">
                <div class="col-12 col-md-4 position-relative pb-md-0 pb-3">
                    <div>
                        <div class="vertical-line"></div>
                        <h2 class="about-count-down pb-4"><?php echo get_field('total_project'); ?>+</h2>

                        <h6 class="sub-title pb-2"><?php echo get_field('project_title') ?></h6>

                        <p class="about-text-2">
                            <?php echo removeFirstP(get_field('project_description')) ?>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 position-relative pb-md-0 pb-3">
                    <div>
                        <div class="vertical-line"></div>

                        <h2 class="about-count-down pb-4"><?php echo get_field('total_client'); ?>+</h2>

                        <h6 class="sub-title pb-2"><?php echo get_field('client_title') ?></h6>

                        <p class="about-text-2">
                            <?php echo removeFirstP(get_field('client_description')) ?>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div>
                        <h2 class="about-count-down pb-4"><?php echo get_field('total_country'); ?>+</h2>

                        <h6 class="sub-title pb-2"><?php echo get_field('country_title') ?></h6>

                        <p class="about-text-2">
                            <?php echo removeFirstP(get_field('country_description')) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Markup for team section -->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div>
                        <h2 class="title"><?php echo get_field('team_title') ?></h2>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <p class="text-2">
                        <?php echo removeFirstP(get_field('team_description')) ?>
                    </p>
                </div>
            </div>

            <div class="row py-4">

            <?php if( have_rows('details') ): ?>
   
                <?php while( have_rows('details') ): the_row(); ?>


                <div class="col-12 col-md-4">
                <div>

                <?php
                    $image = get_sub_field('image');
                    $name = get_sub_field('name');
                    $designation = get_sub_field('designation');
                    if( !empty($image) ): ?>

                        <img src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>" />

                    <?php endif; ?>

                        <div class="py-4">
                            <h6 class="sub-title pt-3"><?php echo $name; ?></h6>
                            <p class="text-2"><?php echo $designation; ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            
            <?php endif; ?>
            
                <!-- <div class="col-12 col-md-4">
                    <div>
                        <img
                            src="/public/images/about/team/team-1.png"
                            alt="TEAM PICTURE"
                        />

                        <div class="py-4">
                            <h6 class="sub-title pt-3">Joy</h6>
                            <p class="text-2">Sales and Marketing</p>
                        </div>
                    </div>
                </div> -->
                
            </div>
        </div>
    </section>

    <!--Markup for Customer Plan -->

    <section class="section cus-bg-secondary">
        <div class="text-center text-capitalize py-4 container">
            <h3 class="title mb-2 px-md-5">
                <?php echo get_field('title'); ?>
            </h3>

            <p class="text-2">
                <?php echo get_field('description'); ?>
            </p>

            <div class="pt-4">
                <a href="<?php echo get_field('button_url'); ?>">
                    <button type="button" class="cus-btn cus-bg-main text-white">
                        Contact Us
                    </button>
                </a>
            </div>
        </div>
    </section>


<?php
get_footer();
