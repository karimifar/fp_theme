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
	

<p>Zoje</p>
<?php else:?>
<p>Farde</p>
<?php endif ?>
<?php endwhile; endif; ?>


<div class="feat-row-y">
    <div class= "container">
        <div class="row">
            <div class="col-md-5 feat-col feat-img">
                <img src="https://www.fathersplaybook.org/assets/img/fin-icon.png">
            </div>
            <div class="col-md-7 feat-col feat-text">
                <h1>Financial Calculator</h1>
                <p>Planning ahead for your growing baby can bring about overwhelming, confusing, and scary feelings. It is difficult to know upfront what is needed and how much everything will cost. Our app’s Financial Calculator makes this easy for you. In our app, we will help you choose which items to buy for your new arrival, provide an estimate of what everything will cost, and inform you on how much money to set aside per month before your child is born.</p>
            </div>
        </div>
    </div>
</div>
<div class="triangle triangle-b"></div>

<div class="feat-row-w">
    <div class= "container">
        <div class="row">
            
            <div class="col-md-7 feat-col feat-text">
                <h1>Financial Calculator</h1>
                <p>Planning ahead for your growing baby can bring about overwhelming, confusing, and scary feelings. It is difficult to know upfront what is needed and how much everything will cost. Our app’s Financial Calculator makes this easy for you. In our app, we will help you choose which items to buy for your new arrival, provide an estimate of what everything will cost, and inform you on how much money to set aside per month before your child is born.</p>
			</div>
			<div class="col-md-5 feat-col feat-img">
                <img src="https://www.fathersplaybook.org/assets/img/fin-icon.png">
            </div>
        </div>
    </div>
</div>

<div class="triangle triangle-t"></div>
<div class="feat-row-y">
    <div class= "container">
        <div class="row">
            <div class="col-md-5 feat-col feat-img">
                <img src="https://www.fathersplaybook.org/assets/img/fin-icon.png">
            </div>
            <div class="col-md-7 feat-col feat-text">
                <h1>Financial Calculator</h1>
                <p>Planning ahead for your growing baby can bring about overwhelming, confusing, and scary feelings. It is difficult to know upfront what is needed and how much everything will cost. Our app’s Financial Calculator makes this easy for you. In our app, we will help you choose which items to buy for your new arrival, provide an estimate of what everything will cost, and inform you on how much money to set aside per month before your child is born.</p>
            </div>
        </div>
    </div>
</div>
<div class="triangle triangle-b"></div>
<div class="feat-row-w">
    <div class= "container">
        <div class="row">
            
            <div class="col-md-7 feat-col feat-text">
                <h1>Financial Calculator</h1>
                <p>Planning ahead for your growing baby can bring about overwhelming, confusing, and scary feelings. It is difficult to know upfront what is needed and how much everything will cost. Our app’s Financial Calculator makes this easy for you. In our app, we will help you choose which items to buy for your new arrival, provide an estimate of what everything will cost, and inform you on how much money to set aside per month before your child is born.</p>
			</div>
			<div class="col-md-5 feat-col feat-img">
                <img src="https://www.fathersplaybook.org/assets/img/fin-icon.png">
            </div>
        </div>
    </div>
</div>

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
		
        <?php if( have_rows('team')): ?>

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
			
		
		
		<?php 
		endwhile;
		endif;
	 	?>
		</div>

	</div>
	

<?php
wp_enqueue_script( 'page-features', get_template_directory_uri() . "/assets/js/page-features.js", array("jquery"));

// get_sidebar();
get_footer();

?>
