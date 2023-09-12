<?php
/**
 * Template Name: Contactpage
 *
 * @package WordPress
 * @subpackage custom_theme
 * @author Studio TEM
 */

get_header(); ?>

    <!--Markup for contact form-->

    <section class="section">
        <div class="container">
            <div class="mb-5 py-md-4">
                <p class="cus-text-sm">Contact us</p>

                <h2 class="title">Send Us a message!</h2>

                <p class="about-text-2">
                    Fill out the contact form or send an email to:
                    <span class="cus-color">business@crazygraph.com</span>
                </p>
            </div>

            <form>
                <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                        <div class="d-flex flex-column gap-3">
                            <label for="name" class="sub-title">Name</label>

                            <input
                                class="cus-input"
                                type="text"
                                placeholder="Fill your full name"
                            />
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="d-flex flex-column gap-3">
                            <label for="name" class="sub-title"
                            >Phone Number (Optional)</label
                            >

                            <input
                                class="cus-input"
                                type="text"
                                placeholder="Fill your phone number"
                            />
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="d-flex flex-column gap-3">
                            <label for="name" class="sub-title">Email</label>

                            <input
                                class="cus-input"
                                type="text"
                                placeholder="Fill your email address"
                            />
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="d-flex flex-column gap-3">
                            <label for="name" class="sub-title">Subject</label>

                            <input
                                class="cus-input"
                                type="text"
                                placeholder="What are you looking for"
                            />
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="d-flex flex-column gap-3">
                            <label for="name" class="sub-title">Message</label>

                            <input
                                class="cus-input cus-msg-input"
                                type="text"
                                placeholder="Fill your message"
                            />
                        </div>
                    </div>
                </div>

                <div class="py-5">
                    <button type="button" class="start-btn cus-color" href="#">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </section>

    <div class="container">
        <hr />
    </div>

<?php
get_footer();
