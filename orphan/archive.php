<?php get_header(); ?>

	<?php get_template_part( 'parts/nav-page' ); ?>

	<main class="main">

		<div class="container">
			<div class="breadcrumbs">
				<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
			</div>
		</div>
 
		<section class="realized" id="realized">
			<div class="container">

				<div class="realized__header">
					<h2><b>Реалізовані</b> <span>проекти</span></h2>
					<!-- <div>
						<div class="realized__prev swiper-button-prev">Назад</div>
						<div class="realized__next swiper-button-next">Далі</div>
						<span></span>
					</div> -->
				</div>

				<div class="realized__slider swiper-container">
 
						<?php 

							/* вывод списка рубрик */
							$args = array(
								'parent' => 0,
								'hide_empty' => 0,
								'exclude' => '', // ID рубрики, которую нужно исключить
								'number' => '0',
								'orderby' => 'count',
								'order' => 'DESC',
								'taxonomy' => 'project-cat', // таксономия, для которой нужны изображения
								'pad_counts' => true
							);
							$catlist = get_categories($args); // получаем список рубрик
							echo '<div class="swiper-wrapper">'; 
							foreach($catlist as $categories_item){

								// получаем данные из плагина Taxonomy Images
								$terms = apply_filters('taxonomy-images-get-terms', '', array(
									'taxonomy' => 'project-cat' // таксономия, для которой нужны изображения
									));

								if (!empty($terms)){
									foreach((array)$terms as $term){
										if ($term->term_id == $categories_item->term_id){
											// выводим изображение рубрики
											print 
												'<div class="realized__slider_slide swiper-slide">
													<h3>' . $categories_item->cat_name . '</h3>'
													. wp_get_attachment_image($term->image_id, 'thumbnail'); 
								                    echo '<div class="realized__slider_content">
													<h3>' . $categories_item->cat_name . '</h3>
													<p>' . term_description() . '</p>
													<a href="' . esc_url(get_term_link($term, $term->taxonomy)) . '">Детальніше</a>
												</div></div>';
											}
										}
									}
								}
							echo '</div>';
						?>


				</div>

			</div>
		</section>

		<?php get_template_part( 'parts/help' ); ?>

		<?php get_template_part( 'parts/info' ); ?>
		
	</main>
	
	<?php get_template_part( 'parts/footer-page' ); ?>


<?php get_footer(); ?>