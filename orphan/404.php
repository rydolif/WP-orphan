<?php get_header(); ?>

	<?php get_template_part( 'parts/nav-page' ); ?>
	<main class="main">

		<div class="container">
			<div class="breadcrumbs">
				<a href="<?php echo get_home_url(); ?>">Головна</a>
				<span>-</span>
				<span>Нажаль данна сторінка не знайдена!</span>
			</div>
		</div>

		<section class="page--hero">
			<div class="container">

				<div class="page--hero__page">

					<h2>Нажаль данна сторінка не знайдена!</h2>
					<a href="<?php echo get_home_url(); ?>" class="btn">Головна</a>

				</div>

			</div>
		</section>

		<?php get_template_part( 'parts/info' ); ?>
		
	</main>

	<?php get_template_part( 'parts/footer-page' ); ?>


<?php get_footer(); ?>