<?php
/**
 * Template Name: Home Page
 *
 *
 * @package fathers_app
 * @since fathers_app 1.0
 */

get_header();

?>



<div id="trapezoid"></div>

        <div class="container home-container">
            <div id="home-row" class="row">
                <!-- <img src="./assets/img/icon.svg"> -->
                <!-- <h1>Fathers Playbook App</h1> -->
                <div class="col-md-8 intro-col">
                    <h1>Father's Playbook</h1>
                    <?php
                    while ( have_posts() ) :
                        
                        the_post();
                        the_content();

                    endwhile; // End of the loop.
                    ?>
                </div>
                <div class="col-md-4">
                    <?php get_sidebar() ?>
                    <div class="home-bullet">
                        <div class="bullet-icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/fin-icon.png"></div>
                        <span class="bullet-text">Financial planning for the baby</span>
                    </div>
                    <div class="home-bullet">
                        <div class="bullet-icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/help-icon.png"></div>
                        <span class="bullet-text">Help with understanding what your partner is going through</span>
                    </div>
                    <div class="home-bullet">
                        <div class="bullet-icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/pregnancy-icon.png"></div>
                        <span class="bullet-text">Info on how to support her during the pregnancy</span>
                    </div>
                    <div class="home-bullet">
                        <div class="bullet-icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/heart-icon.png"></div>
                        <span class="bullet-text">Tips on taking care of yourself</span>
                    </div>
                    <div class="home-bullet">
                        <div class="bullet-icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/edu-icon.png"></div>
                        <span class="bullet-text">Help with understanding medical terms</span>
                    </div>

                </div>
                
            </div>

            <div class="row justify-content-center dl-row">
                <div class="text-center">
                    <a id="g-play-link" href='https://play.google.com/store/apps/details?id=com.sagalabs.fathersplaybook&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img  alt='Get it on Google Play' src='<?php bloginfo('template_url'); ?>/assets/img/google-play-badge.svg'/></a>
                    <p>*Apple iOS and Spanish/English bilingual versions coming soon!*</p>
                </div>
            </div>

        </div>
	</div>
	

<?php
// get_footer();
