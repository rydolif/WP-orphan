<?php
	/**
		* Template name: page
	*/
?>


<?php get_header(); ?>

	<?php get_template_part( 'parts/nav-page' ); ?>

	<main class="main">

		<div class="container">
			<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
		</div>

		<section class="content">
			<div class="container">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</section>


		<section class="page--mision">
			<div class="container">
				<h2><b>Наша</b> місія</h2>
				<p>
					<b>Допомогти</b> дітям-сиротам, випускникам інтернатів та дитячих будинків <br><b>знайти своє місце в житті і реалізувати свій потенціал</b>
				</p>
			</div>
		</section>

		<?php get_template_part( 'parts/info' ); ?>
		
	</main>
	
	<?php get_template_part( 'parts/footer-page' ); ?>


<?php get_footer(); ?>