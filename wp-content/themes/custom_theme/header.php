<?php
/**
 * Header
 *
 * @package WordPress
 * @subpackage custom_theme
 * @author Studio TEM
 */
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="author" content="Studio TEM" />

    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
    />

	<?php wp_head() ?>

</head>
<body <?php body_class() ?>>
	<?php do_action( 'wp_body_open' ); ?>


    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_site_url(); ?>">

                <?php $logo = get_field( 'logo', 'option' ); ?>
                <?php if ( $logo ) : ?>
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                <?php endif; ?>

            </a>
            <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                    class="collapse navbar-collapse cus-font-inter"
                    id="navbarSupportedContent"
            >
                <!-- <ul class="navbar-nav mx-auto text-2" id="myList">
                    <li class="nav-item px-3">
                        <a class="nav-link active " href="<?php the_field('home_url', 'option'); ?>">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link"  href="<?php the_field('about_url', 'option'); ?>">About</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="<?php the_field('works_url', 'option'); ?>">Works</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="<?php the_field('services_url', 'option'); ?>">Services</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="<?php the_field('contact_url', 'option'); ?>">Contact</a>
                    </li>
                </ul> -->


                <?php wp_nav_menu( array( 
                    'menu_class' => 'navbar-nav mx-auto text-2', 
                    'menu_id' => 'myList',
                    'container' => 'ul', 
                    'add_link_class' => 'nav-link', 
                    )); ?>


                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?php the_field('button_url', 'option'); ?>">
                            <button type="button" class="start-btn cus-color">
                            <?php the_field('button_text', 'option'); ?>
                            </button>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>