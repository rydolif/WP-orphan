<?php
	/**
		* Template name: page
	*/
?>


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

		<section class="payment">
			<div class="payment__container container">

				<h2><?php the_title(); ?></h2>

				<form class="payment__liqpay" method="POST" action="/wp-content/themes/orphan/page/submitPayment.php">
					<div class="payment__liqpay_line">
						<input type="text" name="name" placeholder="Ваше Ім'я" required>
					</div>
					<div class="payment__liqpay_line">
						<input type="email" name="mail" placeholder="Ваша пошта" required>
					</div>
					<div class="payment__liqpay_line">
						<input type="tel" name="tel" placeholder="Ваш номер телефону" required>
					</div>
					<div class="payment__liqpay_line">
						<input type="text" name="price" placeholder="100" required>
					</div>
					<div class="payment__liqpay_line">
						<input type="checkbox" id="remember" name="checkbox" required>
						<label for="remember" class="checkbox">Я погоджуюсь з тим, що перераховуючи кошти за адресним призначенням платежу моє пожертвування повністю або частково може буде використано на інші статутні цілі в разі, якщо використання даних коштів за призначенням неможливо, в зв’язку з відміною проекту,  і поверненню не підлягає.</label>
					</div>
					<div class="payment__liqpay_line">
						<input type="checkbox" id="remember1" name="checkbox2" required>
						<label for="remember1" class="checkbox">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/policy.pdf" target="_blank">Приймаю умови Політики конфіденційності</a>
						</label>
					</div>
					<div class="payment__liqpay_line">
						<input type="submit" class="btn">
					</div>
				</form>

				<div class="payment__text">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>

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