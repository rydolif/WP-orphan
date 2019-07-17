<?php
	/**
		* Template name: index
	*/
 ?>

<?php get_header(); ?>

	<?php get_template_part( 'parts/nav' ); ?>

	<main class="main">

		<section class="hero" id="hero">
			<div class="container">
				<div class="hero__container">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero--bg.jpg" alt="" class="hero__bg">

					<div class="hero__block">
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="hero__logo">
                            <!-- <a class="hero__play" data-fancybox href="<?php the_field('modal-video'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png" alt="">
							</a> -->
						</div>
						<p>навчити дітей <br>жити - найважливіше <br>у <span>нашому навчанні</span></p>
					</div>

					<div class="hero__soc">
						<a href="<?php the_field('fb', 'option'); ?>" target="_blank">Facebook</a>
						<a href="<?php the_field('in', 'option'); ?>" target="_blank">Instagram</a>
					</div>

					<div class="hero__more more">
						<a href="#content">Більше<span></span></a>
					</div>

				</div>
			</div>
		</section>

		<section class="content" id="content">
			<div class="container">

				<h2><span>Ідея</span> створення фонду</h2>
				<p>
					Ми створили фонд ще на початку 90-тих, щоб у ті страшні часи допомогти найвразливішим – сиротам. Розуміння проблематики та шляхів допомоги ми отримали на власному досвіді. За кілька років виокремили найнужденнішу категорію сиріт – це підлітки. І зосередилися на допомозі їм.
					Довіра підлітків – наш головний пріоритет. Вони мають бути упевнені, що ми поряд, що виконаємо всі обіцянки, що допоможемо їм за будь-якої потреби. Так налагоджуються стосунки, ціна яких – краще життя, яке ми можемо подарувати. 
				</p>
				<p>
					Наша головна задача сьогодні – соціалізувати кожного і працювати з ним доти, доки він не знайде своє місе у житті. Та навіть коли все в його житті влаштовується, ми продовжуємо спілкуватися і бути поряд. 
					Наша місія – змінити долю дитини. Втримати її  від стрибка у прірву, до якого кожен готовий з моменту потрапляння у дитбудинок. Ми знаємо, що кожен з цих підлітків вартий кращого майбутнього. І робимо все, щоб вони його отримали. 
				</p>

			</div>
		</section>

		<section class="mision" id="mision">
			<div class="container">

				<div class="mision__container">
					<h2><span>Наша</span> <b>місія:</b></h2>
					<p>всебічно підготувати дитину <br>до самостійного життя після виходу з<br> інтернату.(дитбудинку)</p>
					<div class="mision__img mision__img--one">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mision.jpg" alt="">
						<div class="help__img help__img--one">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/1--active.jpg" alt="" class="help__active">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mision--one-before.jpg" alt="" class="help__active-no">
						</div>
					</div>
				</div>

				<div class="mision__container mision__container--two">
					<div class="mision__img mision__img--two">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mision--two.jpg" alt="">
						<div class="help__img help__img--three">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/3--active.jpg" alt="" class="help__active">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/3.jpg" alt="" class="help__active-no">
						</div>
					</div>
					<p>
						доброта та любов до дітей
						<br><br>
						віра в їхній потенціал
						<br><br>
						повага та розуміння особливостей<br> кожної дитини
						<br><br>
						інтелектуальна та емоціональна<br> підтримка.
					</p>
					<h2><span>Наші</span> <b>цінності</b></h2>
					<div class="help__img help__img--two">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/2--active.jpg" alt="" class="help__active">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mision--before.jpg" alt="" class="help__active-no">
					</div>
				</div>

			</div>
		</section>

		<section class="history" id="history">
			<div class="container">

				<div class="history__header">
					<p>
						Подивіться на ці обличчя. Щасливі, натхненні, радісні. Ми не розповімо вам, скільки болю стоїть за кожним із них. У цих дітей не було шансу на життя, яке вони мають зараз. Але вони повірили нам і завдяки програмі зараз займаються тим, про що мріяли і будують життя, на яке і не сподівалися.
					</p>
					<h2><b>Успішні</b> <span>історії</span></h2>
				</div>

				<div class="history__arrow">
					<div class="history__prev swiper-button-prev">Назад</div>
					<div class="history__next swiper-button-next">Далі</div>
					<span></span>
				</div>

				<div class="history__slider swiper-container">
					<div class="swiper-wrapper">

						<?php
							$args = array(
							'post_type' => 'history',
							'posts_per_page' => -1,
							);

							$query = new WP_Query( $args );

							while ( $query->have_posts() ): $query->the_post();

						?>

							<div class="history__slider_slide swiper-slide">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="">
								<div class="history__slider_content">
									<h3><?php the_title(); ?></h3>
									<?php the_content(); ?>
								</div>
							</div>

						<?php
							endwhile; wp_reset_postdata();
						?>

					</div>
				</div>

				<div class="history__btn">
					<p>Ти хочеш бути причетним до порятунку життя?</p>
					<a href="<?php echo get_home_url(); ?>/platizhka/" class="btn btn--red">Фондувати</a>
				</div>

			</div>
		</section>

		<section class="sos" id="sos">
			<div class="container">

				<div class="sos__header">

					<h2>SOS</h2>

					<div class="sos__pagination swiper-pagination"></div>

					<div>
						<div class="sos__prev swiper-button-prev">Назад</div>
						<div class="sos__next swiper-button-next">Далі</div>
						<span></span>
					</div>

				</div>

				<div class="sos__slider swiper-container">
					<div class="swiper-wrapper">

						<?php
							$args = array(
							'post_type' => 'sos',
							'posts_per_page' => -1,
							);

							$query = new WP_Query( $args );

							while ( $query->have_posts() ): $query->the_post();

						?>
							<div class="sos__slider_slide swiper-slide">
								<div class="sos__content">
									<h3><?php the_title(); ?></h3>
									<div class="sos__content_text">
										<?php the_content(); ?>
									</div>
									<!-- <p><b>Реквізити <?php the_field('requisite'); ?></b></p> -->
									<p>Цінуємо кожного!</p>
									<a href="#" class="btn <?php the_field('id'); ?>_open">Вартість проекту</a>
								</div>
								<div class="sos__info">
									<div class="sos__info_img">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sos1.jpg" alt="">
										<div class="sos__info_img--red"><b><?php the_field('filled'); ?></b> грн</div>
										<div class="sos__info_img--accent"><b><?php the_field('zibrano'); ?></b> грн</div>
									</div>
									<div class="sos__info_text">
										<b class="sos__info_accent">зібрано</b>
										<b class="sos__info_red">залишилось зібрати</b>
									</div>
								</div>
							</div>

							<div class="modal" id="<?php the_field('id'); ?>">

								<button class="close <?php the_field('id'); ?>_close" type="button">
									<span></span>
									<span></span>
								</button>

								<h2><b>Вартість</b> <span>проекту</span></h2>

								<table>
									<?php if( have_rows('list') ): ?>
										<?php while( have_rows('list') ): the_row(); 
											$name = get_sub_field('name');
											$number = get_sub_field('number');
											$price = get_sub_field('price');
											?>

											<tr>
												<th><?php echo $name; ?></th>
												<td><?php echo $number; ?></td>
												<td><span><?php echo $price; ?> грн</span></td>
											</tr>

										<?php endwhile; ?>
									<?php endif; ?>
								</table>

								<div class="modal__end">
									<span>Разом:</span>
									<b><?php the_field('final--price'); ?>грн</b>
								</div>

							</div>

						<?php
							endwhile; wp_reset_postdata();
						?>
					</div>
				</div>

				<div class="history__btn">
					<p>Ти необхідний сироті</p>
					<a href="<?php echo get_home_url(); ?>/platizhka/" class="btn btn--red">Фондувати</a>
				</div>

			</div>
		</section>

		<section class="progect" id="progect">
			<div class="container">

				<h2><b>Проекти</b> <span>фонду </span></h2>

				<div class="progect__list">
					<div class="progect__list_col">
						<?php
							$args = array(
								'post_type' => 'fond',
								'p' => '67'
							);

							$query = new WP_Query( $args );

							while ( $query->have_posts() ): $query->the_post();

						?>

						<div class="progect__item">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
							<h3><?php the_title(); ?></h3>
							<div class="progect__item_content">
								<div class="progect__item_header">
									<h3><b><?php the_title(); ?></b></h3>
									<a href="<?php the_permalink(); ?>">Детальніше</a>
								</div>
								<?php the_excerpt(); ?>
							</div>
						</div>

						<?php
							endwhile; wp_reset_postdata();
						?>

						<?php
							$args = array(
								'post_type' => 'fond',
								'p' => '68'
							);

							$query = new WP_Query( $args );

							while ( $query->have_posts() ): $query->the_post();

						?>

						<div class="progect__item">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
							<h3><?php the_title(); ?></h3>
							<div class="progect__item_content">
								<div class="progect__item_header">
									<h3><b><?php the_title(); ?></b></h3>
									<a href="<?php the_permalink(); ?>">Детальніше</a>
								</div>
								<?php the_excerpt(); ?>
							</div>
						</div>

						<?php
							endwhile; wp_reset_postdata();
						?>
					</div>
					<div class="progect__list_col">
						<?php
							$args = array(
								'post_type' => 'fond',
								'p' => '66'
							);

							$query = new WP_Query( $args );

							while ( $query->have_posts() ): $query->the_post();

						?>

						<div class="progect__item">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
							<h3><?php the_title(); ?></h3>
							<div class="progect__item_content">
								<div class="progect__item_header">
									<h3><b><?php the_title(); ?></b></h3>
									<a href="<?php the_permalink(); ?>">Детальніше</a>
								</div>
								<?php the_excerpt(); ?>
							</div>
						</div>

						<?php
							endwhile; wp_reset_postdata();
						?>
						<?php
							$args = array(
								'post_type' => 'fond',
								'p' => '64'
							);

							$query = new WP_Query( $args );

							while ( $query->have_posts() ): $query->the_post();

						?>

						<div class="progect__item">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
							<h3><?php the_title(); ?></h3>
							<div class="progect__item_content">
								<div class="progect__item_header">
									<h3><b><?php the_title(); ?></b></h3>
									<a href="<?php the_permalink(); ?>">Детальніше</a>
								</div>
								<?php the_excerpt(); ?>
							</div>
						</div>

						<?php
							endwhile; wp_reset_postdata();
						?>

						<?php
							$args = array(
								'post_type' => 'fond',
								'p' => '63'
							);

							$query = new WP_Query( $args );

							while ( $query->have_posts() ): $query->the_post();

						?>

						<div class="progect__item">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
							<h3><?php the_title(); ?></h3>
							<div class="progect__item_content">
								<div class="progect__item_header">
									<h3><b><?php the_title(); ?></b></h3>
									<a href="<?php the_permalink(); ?>">Детальніше</a>
								</div>
								<?php the_excerpt(); ?>
							</div>
						</div>

						<?php
							endwhile; wp_reset_postdata();
						?>
					</div>
				</div>

				<div class="history__btn">
					<p>Ти хочеш допомогти дитині-сироті отримати освіту?</p>
					<a href="<?php echo get_home_url(); ?>/platizhka/" class="btn btn--red">Фондувати</a>
				</div>

			</div>
		</section>
 
		<section class="realized" id="realized">
			<div class="container">

				<div class="realized__header">
					<h2><b>Реалізовані</b> <span>проекти</span></h2>
					<div>
						<div class="realized__prev swiper-button-prev">Назад</div>
						<div class="realized__next swiper-button-next">Далі</div>
						<span></span>
					</div>
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
													<p>' . the_field('text') . ' </p>
													<p>' . category_description() . '</p>
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

<!-- 		<section  class="video">

			<div class="youtube" data-embed="<?php the_field('video'); ?>">
				<div class="play-button">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/video.png" alt="">
					<p>не <span>будь</span> Байдужий</p>
				</div>
			</div>
		</section>
 -->
		<section  class="team" id="team">
			<div class="container">
				
				<h2><span>Наша</span> <b>команда</b></h2>

				<div class="team__slider swiper-container">
					<div class="swiper-wrapper">

						<?php
							$args = array(
							'post_type' => 'team',
							'posts_per_page' => -1,
							);

							$query = new WP_Query( $args );

							while ( $query->have_posts() ): $query->the_post();

						?>
							<div class="team__slider_slide swiper-slide">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="">
								<div class="team__slider_content">
									<h3><?php the_title(); ?></h3>
									<?php the_content(); ?> 
								</div>
							</div>

						<?php
							endwhile; wp_reset_postdata();
						?>

					</div>
				</div>

			</div>
		</section>

		<?php get_template_part( 'parts/help' ); ?>

		<?php get_template_part( 'parts/info' ); ?>

	</main>
	
	<?php get_template_part( 'parts/footer' ); ?>

<?php get_footer(); ?>