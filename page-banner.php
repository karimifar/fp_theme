<?php
/**
 * Template Name: With Banner
 *
 *
 * @package fathers_app
 */
wp_enqueue_style( 'page-banner-style', get_template_directory_uri() . "/assets/css/page-banner.css", array('fathers_app-style') );
wp_enqueue_style( 'page-banner-responsive', get_template_directory_uri() . "/assets/css/page-banner-responsive.css", array('fathers_app-style') );

get_header();
?>
<?php 
	$banner = get_field('banner_image');
	$highlight_intro = get_field('intro');
	if ( have_posts() ) : the_post();
?>
<div class="banner">
	<img src="<?php echo $banner['url']?>">
	<div class="overlay"></div>
</div>

<div class="container about-container">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<div id="about-row" class="row">
		<div class="col-md-8 text-col">

			<?php the_content() ?>

			<div class="thankful">
				<p>
					<?php echo $highlight_intro ?>                   
				</p>
				<div class="sponsors d-flex">
					<?php if(have_rows('items')): 
						while(have_rows('items')): the_row();
					?>
					<p><?php echo get_sub_field('item')?></p>
					<?php endwhile; endif; ?>
				</div>
			</div>
			

		</div>
		

		<div class="col-md-4 team-col">
			<h2>THE TEAM</h2>

		<?php if( have_rows('team') ):
			while(have_rows('team')): the_row();
		?>


			<h3><?php echo get_sub_field('team-title')?></h3>
			<ul>
				<?php if(have_rows('member_name')): 
					while(have_rows('member_name')): the_row();
				?>
				<li><?php echo get_sub_field('name')?> </li>
				<?php endwhile; endif; ?>
			</ul>
			
		
		
		<?php 
		endwhile;
		endif;
	 	?>
		</div>

	</div>

	<div class="row sponsor-row">
									
	</div>
<?php endif?>

<?php

// get_sidebar();
get_footer();

?>
