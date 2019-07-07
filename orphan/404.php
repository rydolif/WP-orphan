
<?php get_header(); ?>

	<?php get_template_part( 'parts/top-line' ); ?>

	<?php get_template_part( 'parts/header' ); ?>

	<div class="bg--hero"></div>

	<section class="hero section">

		<div class="parallax parallax--circle--white parallax--sped-seven parallax--position-seven"></div>
		<div class="parallax parallax--circle--light parallax--sped-four parallax--position-six"></div>
		<div class="parallax parallax--circle--white parallax--sped-five parallax--position-five"></div>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--sped-five parallax--position-four parallax--width-norm">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/percent.png" alt="" class="parallax parallax--num-left">

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">

					<h1>Нет такой страницы</h1>

					<a href="<?php echo get_home_url(); ?>" class="btn hero__btn">Вернутся на главную</a>

				</div>

			</div>

		</div>
	</section>

<?php get_footer('curse'); ?>