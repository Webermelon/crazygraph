<?php
/**
 * Footer
 *
 * @package WordPress
 * @subpackage custom_theme
 * @author Studio TEM
 */
?>

    <?php wp_footer() ?>

<!--Markup for footer  -->

<section class="section footer">
    <div class="container text-capitalize">
        <div class="row justify-content-between">

        <?php if( have_rows('footer_column', 'option') ): ?>

            <?php while( have_rows('footer_column', 'option') ) : the_row(); ?>

                <div class="col-12 col-md-4">
                    <div>
                        <h6 class="cus-color fs-6 mb-4"><?php the_sub_field('title'); ?></h6>

                        <div class="sub-title">
                            <p ><?php the_sub_field('description'); ?></p>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        <?php endif; ?>

        </div>

        <div>
            <div class="row justify-content-md-between pt-5">
                <div class="col-12 col-md-4">
                    <p>© crazygraph 2023</p>
                </div>
                <div class="col-md-4 col-12">
                    <div class="row">
                        <div class="col-3 col-md-3"><a href="<?php the_field('facebook_url', 'option'); ?>">Facebook</a></div>
                        <div class="col-1 col-md-1">-</div>
                        <div class="col-3 col-md-3"><a href="<?php the_field('twitter_url', 'option'); ?>">Twitter</a></div>
                        <div class="col-1 col-md-1">-</div>
                        <div class="col-4 col-md-4"><a href="<?php the_field('instagram_url', 'option'); ?>">Instagram</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"
></script>

<script src="<?php echo get_template_directory_uri().'/JS/main.js'; ?>"></script>

</body>
</html>
