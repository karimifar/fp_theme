<?php
/**
 * The main template file
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
                    <p>About to be a Dad and trying to make sense of pregnancy, what to do, and where to start? The Father’s Playbook app is here to help. This app is developed for guys to help them understand pregnancy and prepare them for after the baby comes.</p>
                </div>
                <div class="col-md-4">
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
	

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
