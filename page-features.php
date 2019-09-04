<?php
/**
 * Template Name: Features page
 *
 *
 * @package fathers_app
 */
wp_enqueue_style( 'page-features-style', get_template_directory_uri() . "/assets/css/page-features.css", array('fathers_app-style') );
wp_enqueue_style( 'page-features-responsive', get_template_directory_uri() . "/assets/css/page-features-responsive.css", array('fathers_app-style') );

get_header();
?>



<?php if(have_rows('feature')):
while(have_rows('feature')): the_row();
$rowIndex = get_row_index();
?>

	<?php if($rowIndex % 2 ===0):?>
		
		<div id=<?php echo get_sub_field('id')?> class="feat-row-w feat-row">
			<div class= "container">
				<div class="row">
					
					<div class="col-md-7 feat-col feat-text">
						<h1><?php echo get_sub_field('feature_title')?></h1>
						<?php echo get_sub_field('feature_description')?>
					</div>
					<div class="col-md-5 feat-col feat-img">
						<img src=<?php echo get_sub_field('feature_image')['url']?>>
					</div>
				</div>
			</div>
		</div>

	<?php else:?>

		<?php if($rowIndex !== 1):?><div class="triangle triangle-t"></div><?php endif ?>
		<div id=<?php echo get_sub_field('id')?> class="feat-row-y feat-row">
			<div class= "container">
				<div class="row">
					<div class="col-md-5 feat-col feat-img">
						<img src=<?php echo get_sub_field('feature_image')['url']?>>
					</div>
					<div class="col-md-7 feat-col feat-text">
						<h1><?php echo get_sub_field('feature_title')?></h1>
						<?php echo get_sub_field('feature_description')?>
					</div>
				</div>
			</div>
		</div>
		<div class="triangle triangle-b"></div>

	<?php endif ?>

<?php endwhile; endif; ?>



<?php
wp_enqueue_script( 'page-features', get_template_directory_uri() . "/assets/js/page-features.js", array("jquery"));

// get_sidebar();
get_footer();

?>
