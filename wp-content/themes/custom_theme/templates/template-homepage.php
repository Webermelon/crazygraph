<?php
/**
 * Template Name: Homepage
 *
 * @package WordPress
 * @subpackage custom_theme
 * @author Studio TEM
 */

get_header(); ?>

    <!-- Markup for Hero section -->

    <section class="container hero-section my-4">
        <div
            class="row justify-content-md-between justify-content-center align-items-md-center"
        >
            <div class="col-12 col-md-6">
                <div class="text-capitalize">
                    <div>
                        <div class="position-relative">
                            <h1 class="mb-0"><?php echo get_field('banner_title_one'); ?></h1>

                            <div class="position-absolute curb-line">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="248"
                                    height="13"
                                    viewBox="0 0 248 13"
                                    fill="none"
                                >
                                    <path
                                        d="M1.7915 6.52727C5.21607 0.490909 9.49677 0.490909 14.6336 6.52727C19.1516 11.1091 23.4323 11.1091 27.4757 6.52727C30.9003 1.94545 35.181 1.94545 40.3178 6.52727C45.2712 10.7818 49.5519 10.7818 53.1599 6.52727C56.5845 2.27273 60.8652 2.27273 66.002 6.52727C71.9731 12.1636 76.2538 12.1636 78.8441 6.52727C82.2687 0.890909 86.5494 0.890909 91.6862 6.52727C96.3923 11.2182 100.673 11.2182 104.528 6.52727C107.953 1.83636 112.234 1.83636 117.37 6.52727C122.467 11.1455 126.748 11.1455 130.213 6.52727C133.637 1.90909 137.918 1.90909 143.055 6.52727C148.374 11.4727 152.654 11.4727 155.897 6.52727C159.321 1.58182 163.602 1.58182 168.739 6.52727C174.405 12.4909 178.685 12.4909 181.581 6.52727C185.006 0.563636 189.286 0.563636 194.423 6.52727C199.027 11.2545 203.308 11.2545 207.265 6.52727C210.69 1.8 214.97 1.8 220.107 6.52727C225.165 11.1091 229.446 11.1091 232.949 6.52727C236.374 1.94545 240.655 1.94545 245.792 6.52727"
                                        stroke="#8A3EFF"
                                        stroke-width="3.49843"
                                        stroke-linecap="round"
                                    />
                                </svg>
                            </div>
                        </div>
                        <h1 class="mb-0"><?php echo get_field('banner_title_two'); ?></h1>

                        <div class="position-relative">
                            <h1 class="my-0"><?php echo get_field('banner_title_three'); ?></h1>
                            <div class="position-absolute state-line">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="275"
                                    height="25"
                                    viewBox="0 0 275 25"
                                    fill="none"
                                >
                                    <path
                                        d="M1.18238 16.7133C33.6405 4.39764 133.71 -11.614 274.325 22.8648"
                                        stroke="#F62C84"
                                        stroke-width="3.49843"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <p class="py-2">
                        <?php echo get_field('banner_description'); ?>
                    </p>

                    <a href="<?php echo get_field('button_url'); ?>">

                    <button
                        type="button"
                        class="cus-btn cus-bg-main text-white"
                    >
                        <?php echo get_field('button_text'); ?>
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6">

                <?php
                $image = get_field('banner_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

                <!--<img src="<?php /*echo get_template_directory_uri().'/public/images/hero.png'; */?>" alt="HERO " />-->
            </div>
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
    <!-- Markup for count down section -->

    <section class="section">
        <div class="container my-md-5 my-2">
            <div class="text-capitalize text-center">
                <h4 class="sub-title mb-3"><?php echo get_field('work_title'); ?></h4>
                <p class="text-2">
                    <?php 
                        $work_description = get_field('work_description');
                        $stripped_text = str_replace(array('<p>','</p>'),'',$work_description);
                        echo $stripped_text;
                    ?>
                </p>
            </div>

            <div
                class="d-flex justify-content-md-evenly flex-md-row flex-column px-md-5 px-3 my-md-5 mx-md-5 mt-5 justify-content-center gap-md-0 gap-2"
            >
                <div class="d-flex gap-2">
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="25"
                            height="25"
                            viewBox="0 0 25 25"
                            fill="none"
                        >
                            <path
                                d="M12.7915 22.5C18.2915 22.5 22.7915 18 22.7915 12.5C22.7915 7 18.2915 2.5 12.7915 2.5C7.2915 2.5 2.7915 7 2.7915 12.5C2.7915 18 7.2915 22.5 12.7915 22.5Z"
                                fill="#101010"
                            />
                            <path
                                d="M8.5415 12.5L11.3715 15.33L17.0415 9.67004"
                                stroke="#29EF7F"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>

                    <div>
                        <p>
                            <span class="count-down"><?php echo get_field('total_year'); ?>+</span>
                            <span class="count-down fw-normal"> Years</span>
                        </p>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="25"
                            height="25"
                            viewBox="0 0 25 25"
                            fill="none"
                        >
                            <path
                                d="M12.7915 22.5C18.2915 22.5 22.7915 18 22.7915 12.5C22.7915 7 18.2915 2.5 12.7915 2.5C7.2915 2.5 2.7915 7 2.7915 12.5C2.7915 18 7.2915 22.5 12.7915 22.5Z"
                                fill="#101010"
                            />
                            <path
                                d="M8.5415 12.5L11.3715 15.33L17.0415 9.67004"
                                stroke="#29EF7F"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>

                    <div>
                        <p>
                            <span class="count-down"><?php echo get_field('total_clients'); ?>+</span>
                            <span class="count-down fw-normal"> Clients</span>
                        </p>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="25"
                            height="25"
                            viewBox="0 0 25 25"
                            fill="none"
                        >
                            <path
                                d="M12.7915 22.5C18.2915 22.5 22.7915 18 22.7915 12.5C22.7915 7 18.2915 2.5 12.7915 2.5C7.2915 2.5 2.7915 7 2.7915 12.5C2.7915 18 7.2915 22.5 12.7915 22.5Z"
                                fill="#101010"
                            />
                            <path
                                d="M8.5415 12.5L11.3715 15.33L17.0415 9.67004"
                                stroke="#29EF7F"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>

                    <div>
                        <p>
                            <span class="count-down"><?php echo get_field('total_achievement'); ?>+</span>
                            <span class="count-down fw-normal"> Achievement</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Markup for recent work section   -->

    <section class="section our-work">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div>
                        <h2 class="title"><?php echo get_field('rw_title'); ?></h2>
                        <a href="<?php echo get_field('view_all_url'); ?>"><p class="cus-text-sm">View All</p></a>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <p class="text-2">
                        <?php 
                            echo removeFirstP(get_field('rw_description'));
                        ?>
                    </p>
                </div>
            </div>

            <!-- Project one -->

            <div class="row align-items-center gap-3 gap-md-0 py-md-5 py-3">
                <div class="col-12 col-md-7">
                    <div>
                        <div class="position-relative">

                            <?php if( get_field('wd_image') ): ?>
                                <img src="<?php the_field('wd_image'); ?>" alt="PROJECT IMAGE" />
                            <?php endif; ?>

                            <div class="line d-md-block d-none">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="116"
                                    height="2"
                                    viewBox="0 0 116 2"
                                    fill="none"
                                >
                                    <path d="M0.791504 1H115.792" stroke="#8A3EFF" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 p-md-5">
                    <div>
                        <h5 class="sub-title-2 mb-4">
                            <?php echo get_field('wd_title'); ?>
                        </h5>

                        <p class="text-2 mb-4">
                            <?php
                                echo removeFirstP(get_field('wd_description'));
                            ?>
                        </p>

                        <a href="<?php echo get_field('wd_button_url'); ?>"><p class="cus-color cus-text-sm"><?php echo get_field('wd_button_text'); ?></p></a>
                    </div>
                </div>
            </div>

            <!-- Project Two-->
            <div class="row align-items-center gap-3 gap-md-0 py-md-5 py-3">
                <div
                    class="col-12 col-md-5 order-2 order-md-1 pt-md-5 pb-md-5 pr-md-5"
                >
                    <div>
                        <h5 class="sub-title-2 mb-4">
                            <?php echo get_field('wd_title2'); ?>
                        </h5>

                        <p class="text-2 mb-4">
                            <?php
                                echo removeFirstP(get_field('wd_description2'));
                            ?>
                        </p>

                        <a href="<?php echo get_field('wd_button_url2'); ?>"><p class="cus-color cus-text-sm"><?php echo get_field('wd_button_text2'); ?></p></a>
                    </div>
                </div>
                <div class="col-12 col-md-7 order-1 order-md-2">
                    <div>
                        <div class="position-relative">

                            <?php if( get_field('wd_image2') ): ?>
                                <img src="<?php the_field('wd_image2'); ?>" alt="PROJECT IMAGE" />
                            <?php endif; ?>

                            <div class="line-left d-md-block d-none">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="116"
                                    height="2"
                                    viewBox="0 0 116 2"
                                    fill="none"
                                >
                                    <path d="M0.791504 1H115.792" stroke="#8A3EFF" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project three -->

            <div class="row align-items-center gap-3 gap-md-0 py-md-5 py-3">
                <div class="col-12 col-md-7">
                    <div>
                        <div class="position-relative">

                            <?php if( get_field('wd_image3') ): ?>
                                <img src="<?php the_field('wd_image3'); ?>" alt="PROJECT IMAGE" />
                            <?php endif; ?>

                            <div class="line d-md-block d-none">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="116"
                                    height="2"
                                    viewBox="0 0 116 2"
                                    fill="none"
                                >
                                    <path d="M0.791504 1H115.792" stroke="#8A3EFF" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 p-md-5">
                    <div>
                        <h5 class="sub-title-2 mb-4">
                            <?php echo get_field('wd_title3'); ?>
                        </h5>

                        <p class="text-2 mb-4">
                            <?php
                                echo removeFirstP(get_field('wd_description3'));
                            ?>
                        </p>

                        <a href="<?php echo get_field('wd_button_url3'); ?>"><p class="cus-color cus-text-sm"><?php echo get_field('wd_button_text3'); ?></p></a>
                    </div>
                </div>
            </div>

            <div class="text-center py-md-5 py-2">
                <a href="<?php echo get_field('view_all_url'); ?>">
                    <button type="button" class="cus-btn cus-text-sm">
                        View All
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Markup for  Top notch  section -->

    <section class="section top-notch">
        <div class="container">
            <div class="row my-4">
                <div class="col-12 col-md-6 mb-5">
                    <div>
                        <h2 class="title"><?php echo get_field('s_title'); ?></h2>
                        <a href="<?php echo get_field('s_button_url'); ?>"><p class="cus-text-sm cus-color">Go to Services</p></a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <p class="text-2">
                        <?php
                            echo removeFirstP(get_field('s_description'));
                        ?>
                    </p>
                </div>
            </div>

            <div class="row align-items-center m-0 p-0">


   <?php if( have_rows('sevice_details') ): ?>
    
            <?php
            $num = 0;
            $class = "";
            
            while( have_rows('sevice_details') ): the_row(); 
            
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $button_url = get_sub_field('button_url');

            $b_color = "#fff6fa";
            if($num % 2 == 0){
                $b_color = "even";
            }
            $num++;
            ?>

                            
                <div class="col-12 col-md-4 m-0 p-0 top-notch-item" style="background-color:<?php echo $b_color; ?>;">
                    <div class="py-5 px-4">

                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" alt="ARROW" class="mb-4"/>
                    

                        <p class="sub-title-2">
                            <?php echo $title ?>
                            <?php echo $class ?>
                        </p>

                        <p class="cus-color cus-text-sm">More</p>
                    </div>
                </div>

            <?php endwhile; ?>
   
   <?php endif; ?>
                
            </div>
        </div>
    </section>

    <!-- Markup for  testimonial  section -->

    <section class="section testimonial">
        <div class="container">
            <div class="row py-md-4 py-1">
                <div class="col-12 col-md-5 mb-4">
                    <div>
                        <h4 class="title">
                            <?php echo get_field('t_title'); ?>
                        </h4>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <p class="text-2">
                        <?php
                            echo removeFirstP(get_field('t_description'));
                        ?>
                    </p>
                </div>
            </div>



            <!-- <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>

            </div> -->

            <div >
                <div class="row align-items-center py-5 ">
                    <div class="col-12 col-md-6 text-center testi-img">
                        <div class="img-box position-relative ">
                            <!-- <div class="circle"></div> -->
                            


                            <div class="img-box-inner">
                                <img src="<?php echo get_template_directory_uri().'/public/images/profile-2.png'; ?>" alt="PROFILE" />
                            </div>

                            <div class="profile-svg position-absolute ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="148" height="148" viewBox="0 0 148 148" fill="none">
                                    <g opacity="0.3">
                                        <path d="M0 0H4V4H0V0Z" fill="#C4C4C4"/>
                                        <path d="M24 0H28V4H24V0Z" fill="#C4C4C4"/>
                                        <path d="M48 0H52V4H48V0Z" fill="#C4C4C4"/>
                                        <path d="M72 0H76V4H72V0Z" fill="#C4C4C4"/>
                                        <path d="M96 0H100V4H96V0Z" fill="#C4C4C4"/>
                                        <path d="M120 0H124V4H120V0Z" fill="#C4C4C4"/>
                                        <path d="M144 0H148V4H144V0Z" fill="#C4C4C4"/>
                                        <path d="M0 24H4V28H0V24Z" fill="#C4C4C4"/>
                                        <path d="M24 24H28V28H24V24Z" fill="#C4C4C4"/>
                                        <path d="M48 24H52V28H48V24Z" fill="#C4C4C4"/>
                                        <path d="M72 24H76V28H72V24Z" fill="#C4C4C4"/>
                                        <path d="M96 24H100V28H96V24Z" fill="#C4C4C4"/>
                                        <path d="M120 24H124V28H120V24Z" fill="#C4C4C4"/>
                                        <path d="M144 24H148V28H144V24Z" fill="#C4C4C4"/>
                                        <path d="M0 48H4V52H0V48Z" fill="#C4C4C4"/>
                                        <path d="M24 48H28V52H24V48Z" fill="#C4C4C4"/>
                                        <path d="M48 48H52V52H48V48Z" fill="#C4C4C4"/>
                                        <path d="M72 48H76V52H72V48Z" fill="#C4C4C4"/>
                                        <path d="M96 48H100V52H96V48Z" fill="#C4C4C4"/>
                                        <path d="M120 48H124V52H120V48Z" fill="#C4C4C4"/>
                                        <path d="M144 48H148V52H144V48Z" fill="#C4C4C4"/>
                                        <path d="M0 72H4V76H0V72Z" fill="#C4C4C4"/>
                                        <path d="M24 72H28V76H24V72Z" fill="#C4C4C4"/>
                                        <path d="M48 72H52V76H48V72Z" fill="#C4C4C4"/>
                                        <path d="M72 72H76V76H72V72Z" fill="#C4C4C4"/>
                                        <path d="M96 72H100V76H96V72Z" fill="#C4C4C4"/>
                                        <path d="M120 72H124V76H120V72Z" fill="#C4C4C4"/>
                                        <path d="M144 72H148V76H144V72Z" fill="#C4C4C4"/>
                                        <path d="M0 96H4V100H0V96Z" fill="#C4C4C4"/>
                                        <path d="M24 96H28V100H24V96Z" fill="#C4C4C4"/>
                                        <path d="M48 96H52V100H48V96Z" fill="#C4C4C4"/>
                                        <path d="M72 96H76V100H72V96Z" fill="#C4C4C4"/>
                                        <path d="M96 96H100V100H96V96Z" fill="#C4C4C4"/>
                                        <path d="M120 96H124V100H120V96Z" fill="#C4C4C4"/>
                                        <path d="M144 96H148V100H144V96Z" fill="#C4C4C4"/>
                                        <path d="M0 120H4V124H0V120Z" fill="#C4C4C4"/>
                                        <path d="M24 120H28V124H24V120Z" fill="#C4C4C4"/>
                                        <path d="M48 120H52V124H48V120Z" fill="#C4C4C4"/>
                                        <path d="M72 120H76V124H72V120Z" fill="#C4C4C4"/>
                                        <path d="M96 120H100V124H96V120Z" fill="#C4C4C4"/>
                                        <path d="M120 120H124V124H120V120Z" fill="#C4C4C4"/>
                                        <path d="M144 120H148V124H144V120Z" fill="#C4C4C4"/>
                                        <path d="M0 144H4V148H0V144Z" fill="#C4C4C4"/>
                                        <path d="M24 144H28V148H24V144Z" fill="#C4C4C4"/>
                                        <path d="M48 144H52V148H48V144Z" fill="#C4C4C4"/>
                                        <path d="M72 144H76V148H72V144Z" fill="#C4C4C4"/>
                                        <path d="M96 144H100V148H96V144Z" fill="#C4C4C4"/>
                                        <path d="M120 144H124V148H120V144Z" fill="#C4C4C4"/>
                                        <path d="M144 144H148V148H144V144Z" fill="#C4C4C4"/>
                                    </g>
                                </svg>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div
                            id="myCarousel"
                            class="carousel slide"
                            data-bs-interval="5000"
                            data-bs-ride="carousel"
                        >
                            <div class="carousel-inner">

                                <div class="carousel-item testi-item active" data-img="<?php echo get_template_directory_uri().'/public/images/profile-2.png'; ?>">
                                    <div class="text-center text-md-start pt-md-0 pt-4">
                                        <div class="mb-4">
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                        </div>

                                        <p class="mb-4 text-2">
                                            I would definitely recommend Crazygraph. The team's
                                            understanding of our business goals, and ability to
                                            support in the long term is an extremely valuable part of
                                            the relationship
                                        </p>

                                        <div class="pt-3">
                                            <h5 class="fw-bold client-name">AR Shakir</h5>
                                            <p class="client-designation">CEO GetNextDesign</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item testi-item" data-img="<?php echo get_template_directory_uri().'/public/images/profile-1.png'; ?>">
                                    <div class="text-center text-md-start pt-md-0 pt-4">
                                        <div class="mb-4">
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                        </div>

                                        <p class="mb-4 text-2">
                                            I would definitely recommend Crazygraph. The team's
                                            understanding of our business goals, and ability to
                                            support in the long term is an extremely valuable part of
                                            the relationship
                                        </p>

                                        <div class="pt-3">
                                            <h5 class="fw-bold client-name">Test</h5>
                                            <p class="client-designation">CEO GetNextDesign</p>
                                        </div>
                                    </div>
                                </div>





                                <!-- <div class="carousel-item testi-item active" data-img="<?php echo get_template_directory_uri().'/public/images/profile-2.png'; ?>">
                                    <div class="text-center text-md-start pt-md-0 pt-4">
                                        <div class="mb-4">
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                        </div>

                                        <p class="mb-4 text-2">
                                            I would definitely recommend Crazygraph. The team's
                                            understanding of our business goals, and ability to
                                            support in the long term is an extremely valuable part of
                                            the relationship
                                        </p>

                                        <div class="pt-3">
                                            <h5 class="fw-bold client-name">AR Shakir</h5>
                                            <p class="client-designation">CEO GetNextDesign</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item testi-item" data-img="<?php echo get_template_directory_uri().'/public/images/profile-1.png'; ?>">
                                    <div class="text-center text-md-start pt-md-0 pt-4">
                                        <div class="mb-4">
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                            <img src="<?php echo get_template_directory_uri().'/public/images/star-1.png'; ?>" alt="PROFILE" />
                                        </div>

                                        <p class="mb-4 text-2">
                                            I would definitely recommend Crazygraph. The team's
                                            understanding of our business goals, and ability to
                                            support in the long term is an extremely valuable part of
                                            the relationship
                                        </p>

                                        <div class="pt-3">
                                            <h5 class="fw-bold client-name">Test</h5>
                                            <p class="client-designation">CEO GetNextDesign</p>
                                        </div>
                                    </div>
                                </div> -->


                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between my-5">
                    <div class="">
                        <!-- <div>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="122"
                            height="23"
                            viewBox="0 0 122 23"
                            fill="none"
                          >
                            <circle
                              cx="12.0897"
                              cy="11.5"
                              r="10.9337"
                              stroke="#848484"
                              stroke-width="0.728916"
                            />
                            <circle cx="12.0896" cy="11.5002" r="7.65361" fill="#8A3EFF" />
                            <circle
                              cx="77.6921"
                              cy="11.5001"
                              r="10.9337"
                              stroke="#848484"
                              stroke-width="0.728916"
                              data-bs-target="#carouselExampleDark"
                              data-bs-slide-to="0"
                              class="active"
                              aria-current="true"
                              aria-label="Slide 1"
                            />
                            <circle
                              cx="44.8908"
                              cy="11.5001"
                              r="10.9337"
                              stroke="#848484"
                              stroke-width="0.728916"
                            />
                            <circle
                              cx="110.493"
                              cy="11.5001"
                              r="10.9337"
                              stroke="#848484"
                              stroke-width="0.728916"
                            />
                          </svg>
                        </div> -->
                    </div>

                    <div class="d-flex gap-5">
                        <div>
                            <button
                                type="button"
                                class="border-0 bg-white"
                                data-bs-target="#myCarousel"
                                data-bs-slide="prev"
                            >
                                <span class="visually-hidden"> prev </span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="32"
                                    height="32"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill="none"
                                        stroke="#888888"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="m15 5l-6 7l6 7"
                                    />
                                </svg>
                            </button>
                        </div>

                        <div>
                            <button
                                type="button"
                                class="border-0 bg-white"
                                data-bs-target="#myCarousel"
                                data-bs-slide="next"
                            >
                                <span class="visually-hidden"> next </span>

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="32"
                                    height="32"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill="none"
                                        stroke="#888888"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="m9 5l6 7l-6 7"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <!--Markup for Customer Plan -->

    <section class="section cus-bg-secondary">
        <div class="text-center text-capitalize py-4 container">
            <h3 class="title mb-2 px-md-5">
                <?php echo get_field('con_title'); ?>
            </h3>

            <p class="text-2">
                <?php echo get_field('con_description'); ?>
            </p>

            <div class="pt-4">
                <a href="<?php echo get_field('con_button_url'); ?>">
                    <button type="button" class="cus-btn cus-bg-main text-white">
                        Contact Us
                    </button>
                </a>
            </div>
        </div>
    </section>

<?php
get_footer();
