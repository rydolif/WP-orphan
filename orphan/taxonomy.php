<?php get_header(); ?>

	<?php get_template_part( 'parts/nav-page' ); ?>

	<main class="main">

		<div class="container">
			<div class="breadcrumbs">
				<a href="<?php echo get_home_url(); ?>">Головна</a>
				<span>›</span>
				<span>Реалізовані проекти</span>
			</div>
		</div>

		<section class="page--hero">
			<div class="page--hero__container container">

				<div class="page--hero__text">
					<h2><?php single_term_title(); ?></h2>
					<?php echo term_description(); ?>
				</div>

				<div class="page--hero__img">
					<?php print apply_filters( 'taxonomy-images-queried-term-image', '' ); ?>
				</div>

			</div>
		</section>

		<section class="page--article">
			<div class="container">

				<h2>Звіти</h2>
				<div class="page--article__list">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


						<div class="page--article__item">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
							<h3><?php the_title(); ?> </h3>
							<div class="page--article__content">
								<h3><?php the_title(); ?> </h3>
								<?php the_excerpt(); ?> 
								<a href="<?php the_permalink(); ?>">Детальніше</a>
							</div>
						</div>

					<?php endwhile; ?>
					<?php endif; ?>

					<?php wptuts_pagination(); ?>


				</div>
			</div>
		</section>

		<?php get_template_part( 'parts/help' ); ?>

		<?php get_template_part( 'parts/info' ); ?>
		
	</main>
	
	<?php get_template_part( 'parts/footer-page' ); ?>


<?php get_footer(); ?>