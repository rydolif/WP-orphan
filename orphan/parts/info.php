		
	<section class="info" id="info">
		<div class="info__container container">

			<div class="info__col">
				<a href="<?php echo get_home_url(); ?>" class="info__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer--logo.png" alt="">
				</a>
				<div class="info__soc">
					<a href="<?php the_field('fb', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer--fb.png" alt="">
					</a>
					<a href="<?php the_field('in', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer--in.png" alt="">
					</a>
				</div>
			</div>

			<div class="info__col info__form">
				<h3>Напишіть <span>нам</span></h3>

				<?php echo do_shortcode( '[contact-form-7 id="36" title="Контактная форма 1"]' ); ?>

			</div>

			<div class="info__col info__info">
				<h3>Контакти</h3>
				<p><?php the_field('place', 'option'); ?></p>
				<p>
					<a href="tel:<?php the_field('tel1', 'option'); ?>"><?php the_field('tel1', 'option'); ?></a>
					<a href="tel:<?php the_field('tel2', 'option'); ?>"><?php the_field('tel2', 'option'); ?></a>
					<a href="tel:<?php the_field('tel3', 'option'); ?>"><?php the_field('tel3', 'option'); ?></a>
				</p>
				<p>
					<a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a>
				</p>
				
			</div>
			
		</div>
	</section>