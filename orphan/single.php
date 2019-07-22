
<?php get_header(); ?>

	<?php get_template_part( 'parts/nav-page' ); ?>

	<main class="main">

		<div class="container">
			<div class="breadcrumbs">
				<a href="<?php echo get_home_url(); ?>">Головна</a>
				<span>›</span>
				<span><?php the_title(); ?></span>
			</div>
		</div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section class="page--hero">
				<div class="container">

					<h2><?php the_field('title'); ?></h2>
					<?php the_content(); ?>

					
					<div class="history__arrow">
						<div class="gallery__prev swiper-button-prev">Назад</div>
						<div class="gallery__next swiper-button-next">Далі</div>
						<span></span>
					</div>
					<?php if( have_rows('gallery') ): ?>
						<div class="gallery__slider swiper-container">
							<div class="swiper-wrapper">

								<?php while( have_rows('gallery') ): the_row(); 
									$img = get_sub_field('img');
								?>
									
									<div class="gallery__slider_slide swiper-slide">
										<img src="<?php echo $img; ?>" alt="">
									</div>

								<?php endwhile; ?>

							</div>
						</div>
					<?php endif; ?>

				</div>
			</section>

			<section class="page--post">
				<div class="container">
					<?php the_field('video'); ?>
						
					<?php if( have_rows('file') ): ?>
						<div class="page--post__btn">
							<?php while( have_rows('file') ): the_row(); 
								$link = get_sub_field('link');
								$name = get_sub_field('name');
							?>
								<?php if( $link ): ?>

									<a href="<?php echo $link; ?>" class="btn"><?php echo $name; ?></a>
									
								<?php endif; ?>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</section>

		<?php endwhile; ?>
		<?php endif; ?>

		<?php if( have_rows('list') ): ?>
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

								<h3><b><span>Анкета</span></b> Волонтера БФ <b>«Orphan Education Club»</b></h3>

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