
<?php get_header(); ?>

	<?php get_template_part( 'parts/nav-page' ); ?>

	<main class="main">

		<div class="container">
			<div class="breadcrumbs">
				<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
			</div>
		</div>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section class="page--hero">
				<div class="page--hero__container container">

					<div class="page--hero__text">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>

					<div class="page--hero__img">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
					</div>

				</div>
			</section>
		<?php endwhile; ?>
		<?php endif; ?>

		<?php if( have_rows('file') ): ?>
			<?php while( have_rows('list') ): the_row(); 
				$form = get_sub_field('form');
			?>
				<?php if( $form ): ?>

					<section class="page--mision">
						<div class="container">
							<h2><b>Наша</b> місія</h2>
							<p>
								<b>Допомогти</b> дітям-сиротам, випускникам інтернатів та дитячих будинків <br><b>знайти своє місце в житті і реалізувати свій потенціал</b>
							</p>
						</div>
					</section>

					<section class="page--form">
						<div class="container">

							<h3><b><span>Анкета</span></b> Волонтера МБФ <b>«Orphan Education Club»</b></h3>

							<div class="page--form__form">
								<?php echo $form; ?>
							</div>

						</div>
					</section>

				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php get_template_part( 'parts/help' ); ?>

		<?php get_template_part( 'parts/info' ); ?>
		
	</main>
	
	<?php get_template_part( 'parts/footer-page' ); ?>


<?php get_footer(); ?>