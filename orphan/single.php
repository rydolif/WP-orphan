
<?php get_header(); ?>

	<?php get_template_part( 'parts/top-line' ); ?>

	<?php get_template_part( 'parts/header-page' ); ?>


	<main class="article_2">

		<section class="title">
			<div class="container title__container">
				<div class="title__selection">
					<h1>Блог</h1>
				</div>

				<h2>“<?php the_title(); ?>”</h2>
				<time datetime="1969-07-16">
					<?php echo get_the_date('Y-m-d'); ?>
				</time>
			</div>
		</section>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<section class="article">
				<div class="container">
					<div class="article__container">

						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.png" alt="<?php the_title(); ?>" class="article__img" />
						<?php } ?>

						<div class="article__wrap">
							<?php the_content(); ?>
						</div>

					</div>
				</div>

			</section>

		<?php endwhile; ?>
		<?php endif; ?>

	</main>


<?php get_footer(); ?>