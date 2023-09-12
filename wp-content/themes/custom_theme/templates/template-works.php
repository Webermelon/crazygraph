<?php
/**
 * Template Name: Workpage
 *
 * @package WordPress
 * @subpackage custom_theme
 * @author Studio TEM
 */

get_header(); ?>


<section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <div>
              <a href="/single-work-view.html">
                <p class="cus-text-sm">Our Works</p>
              </a>

              <h2 class="title">
                <?php echo get_field('title'); ?>
              </h2>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <p class="about-text-2 pb-4">
                <?php echo removeFirstP(get_field('description')); ?>
            </p>

          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">

        <?php if( get_field('image') ): ?>    
            <img
                src="<?php the_field('image'); ?>"
                alt="About"
                class="img-fluid pb-4"
            />
        <?php endif; ?>

        <div class="ml-md-4 position-relative works-ml">
          <div class="vertical-line-works"></div>
          <p class="cus-text-sm text-pink">FEATURED</p>
          <h5 class="sub-title-2 mb-4">
            <?php echo get_field('featured_title'); ?>
          </h5>

          <p class="text-2 mb-4">
          <?php echo removeFirstP(get_field('featured_description')); ?>
          </p>

          <a href="<?php echo get_field('button_url'); ?>"><p class="cus-color cus-text-sm">Read Full Case study</p></a>
        </div>

        <!-- Projects -->

        <div class="row align-items-center gap-3 gap-md-0 py-md-5 py-3">
          <div class="col-12 col-md-5 order-2 order-md-1 me-md-auto">
            <div>
              <h5 class="sub-title-2 mb-4">
                <?php echo get_field('wd_title'); ?>
              </h5>

              <p class="text-2 mb-4">
                <?php echo removeFirstP(get_field('wd_description')); ?>
              </p>

              <a href="<?php echo get_field('wd_button_url'); ?>"><p class="cus-color cus-text-sm"><?php echo get_field('wd_button_text'); ?></p></a>
            </div>
          </div>
          <div class="col-12 col-md-7 order-1 order-md-2">
            <div>
              <div class="position-relative">
                            <?php if( get_field('wd_image') ): ?>
                                <img src="<?php the_field('wd_image'); ?>" alt="PROJECT IMAGE" />
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
        <!-- Project Two-->

        <div class="row align-items-center gap-3 gap-md-0 py-md-5 py-3">
          <div class="col-12 col-md-7">
            <div>
              <div class="position-relative">
                            <?php if( get_field('wd_image2') ): ?>
                                <img src="<?php the_field('wd_image2'); ?>" alt="PROJECT IMAGE" />
                            <?php endif; ?>
                <div class="line-right d-md-block d-none">
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
              <?php echo get_field('wd_title2'); ?>
              </h5>

              <p class="text-2 mb-4">
              <?php echo removeFirstP(get_field('wd_description2')); ?>
              </p>

              <a href="<?php echo get_field('wd_button_url2'); ?>"><p class="cus-color cus-text-sm"><?php echo get_field('wd_button_text2'); ?></p></a>
            </div>
          </div>
        </div>
        <!-- Project three -->

        <div class="row align-items-center gap-3 gap-md-0 py-md-5 py-3">
          <div class="col-12 col-md-5 order-2 order-md-1 me-md-auto">
            <div>
              <h5 class="sub-title-2 mb-4">
                <?php echo get_field('wd_title3'); ?>
              </h5>

              <p class="text-2 mb-4">
              <?php echo removeFirstP(get_field('wd_description3')); ?>
              </p>

              <a href="<?php echo get_field('wd_button_url3'); ?>"><p class="cus-color cus-text-sm"><?php echo get_field('wd_button_text3'); ?></p></a>
            </div>
          </div>
          <div class="col-12 col-md-7 order-1 order-md-2">
            <div>
              <div class="position-relative">
                            <?php if( get_field('wd_image3') ): ?>
                                <img src="<?php the_field('wd_image3'); ?>" alt="PROJECT IMAGE" />
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

        <!-- Project four -->

        <div class="row align-items-center gap-3 gap-md-0 py-md-5 py-3">
          <div class="col-12 col-md-7">
            <div>
              <div class="position-relative">
                            <?php if( get_field('wd_image4') ): ?>
                                <img src="<?php the_field('wd_image4'); ?>" alt="PROJECT IMAGE" />
                            <?php endif; ?>
                <div class="line-right d-md-block d-none">
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
                <?php echo get_field('wd_title4'); ?>
              </h5>

              <p class="text-2 mb-4">
              <?php echo removeFirstP(get_field('wd_description4')); ?>
              </p>

              <a href="<?php echo get_field('wd_button_url4'); ?>"><p class="cus-color cus-text-sm"><?php echo get_field('wd_button_text4'); ?></p></a>
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
