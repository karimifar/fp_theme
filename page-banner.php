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
			<?php if (have_rows('items')):?>
			<div class="thankful">
				<p>
					<?php echo $highlight_intro ?>                   
				</p>
				<div class="sponsors d-flex">
					<?php
						while(have_rows('items')): the_row();
					?>
					<p><?php echo get_sub_field('item')?></p>
					<?php endwhile; ?>
				</div>
			</div>
			<?php endif; ?>

		</div>
		
		<?php if( have_rows('team') ): ?>
			<div class="col-md-4 team-col">
				<h2>THE TEAM</h2>

			<?php 
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
				
			<?php endwhile; ?>
			</div>
		<?php endif ?>

		<?php if( have_rows('side_links') ): ?>
			<div class="col-md-4 team-col" >
				<?php 
					while(have_rows('side_links')): the_row();
				?>

				<a href= <?php echo get_sub_field("link_url")?> target="_blank">
					<div class="link-row <?php if( get_sub_field("disable")==1){echo "inactive";}?>">
						<p class="link-text"><span><?php echo get_sub_field("link_icon")?></span>  <?php echo get_sub_field("link_text")?> </p>
						
					</div>
				</a>
				<?php if( get_sub_field("disable")==1): ?>
					<p class="inactive-text">Coming soon!</p>
				<?php endif?>
				<?php endwhile; ?>
			</div>
		<?php endif ?>

	</div>

	<div class="row sponsor-row">
									
	</div>
<?php endif?>

</div> <!-- container -->
</div> <!-- wrapper (from header.php) -->

<?php


// get_sidebar();
get_footer();

?>
