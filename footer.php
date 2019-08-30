<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fathers_app
 */

?>





</body>

<?php if (is_page_template('page-home.php')): ?>
</html>
<?php else : ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p>2019 © All rights reserved <br>The Father’s Playbook app is developed by The University of Texas at Austin. The Texas Safe Babies team at The University of Texas Health Science Center Tyler and the SAGA team at UT Austin.</p>
                <div class="logos">
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/safe-babies.png" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/uthne-bw.png" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/ut-austin.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-4 g-play">
                <a href="https://play.google.com/store/apps/details?id=com.sagalabs.fathersplaybook&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img src="<?php bloginfo('template_url'); ?>/assets/img/google-play-badge.svg" alt=""></a>
                
            </div>
        </div>
    </div>
</footer>
<?php endif ?>
<?php wp_footer(); ?>
