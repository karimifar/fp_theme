<?php
/**
 * Template Name: Home Page
 *
 *
 * @package fathers_app
 * @since fathers_app 1.0
 */
wp_enqueue_style( 'home-style', get_template_directory_uri() . "/assets/css/home.css", array('fathers_app-style') );
wp_enqueue_style( 'home-style-responsive', get_template_directory_uri() . "/assets/css/home-responsive.css", array('fathers_app-style') );
get_header();

?>



        <div id="trapezoid"></div>

        <div class="container home-container">
            <div id="home-row" class="row">
                <!-- <img src="./assets/img/icon.svg"> -->
                <!-- <h1>Fathers Playbook App</h1> -->
                <div class="col-md-8 intro-col">
                    
                    <?php
                    while ( have_posts() ) :
                        
                        the_post();
                    ?>
                        <h1><?php the_title() ?></h1>
                    <?php
                        the_content();

                    endwhile; // End of the loop.
                    ?>
                </div>
                <div class="col-md-4">

                    <?php

                        // check if the repeater field has rows of data
                        if( have_rows('home_bullets') ):

                            // loop through the rows of data
                            while ( have_rows('home_bullets') ) : the_row();
          
                                $icon = get_sub_field('icon');
                                $content = get_sub_field('bullet-text');
                                $link = get_sub_field('bullet_id');
                    ?>
                                <a href = <?php echo "/features#".$link?>>
                                <div class="home-bullet">
                                    <?php if($icon):?>
                                        <div class="bullet-icon"><img src="<?php echo $icon['url'] ?>"></div>
                                    <?php endif ?>
                                    <span class="bullet-text"><?php echo $content ?></span>
                                </div>
                                </a>
                        
                            <?php  endwhile;

                        else : 
                        
                        endif;

                    ?>

                </div>
                
            </div> <!-- home-row -->

            <div class="row justify-content-center dl-row">
                <div class="text-center">
                    <a id="g-play-link" href='https://play.google.com/store/apps/details?id=com.sagalabs.fathersplaybook&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img  alt='Get it on Google Play' src='<?php bloginfo('template_url'); ?>/assets/img/google-play-badge.svg'/></a>
                    <p>*Apple iOS and Spanish/English bilingual versions coming soon!*</p>
                </div>
            </div>

        
	

<?php
wp_enqueue_script( 'page-features', get_template_directory_uri() . "/assets/js/page-home.js", array("jquery"));

get_footer();
?>