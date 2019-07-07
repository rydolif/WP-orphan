
<?php get_header(); ?>

	<?php get_template_part( 'parts/top-line' ); ?>

	<?php get_template_part( 'parts/header-page' ); ?>

	
	<main class="blog">

		<section class="title">
			<div class="container">
				<div class="title__selection">
					<h1>Блог</h1>
				</div>
			</div>
		</section>
		
		<section class="articles">
			<div class="container">
				
				<div class="articles__list">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div class="articles__item">
							
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} else { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.png" alt="<?php the_title(); ?>" class="article__img" />
							<?php } ?>

							<h4>“<?php the_title(); ?>”</h4>

							<?php the_excerpt(); ?>

							<div class="">
								<time datetime="1969-07-16">
									<?php echo get_the_date('Y-m-d'); ?>
								</time>
								<a href="<?php the_permalink(); ?>">Подробнее</a>
							</div>

						</div>

					<?php endwhile; ?>
					<?php endif; ?>

					<?php wptuts_pagination(); ?>

				</div>

			</div>
		</section>

	</main>

<?php get_footer(); ?>