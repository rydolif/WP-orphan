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
<!-- 				<form method="POST" accept-charset="utf-8" action="https://www.liqpay.ua/api/3/checkout">
				  <input type="hidden" name="data" value="eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXlkb25hdGUiLCJwdWJsaWNfa2V5IjoiaTk2NDQwODcyNTA5IiwiYW1vdW50IjoiNSIsImN1cnJlbmN5IjoiVUFIIiwiZGVzY3JpcHRpb24iOiLQnNC+0Lkg0YLQvtCy0LDRgCIsInR5cGUiOiJkb25hdGUiLCJsYW5ndWFnZSI6InJ1In0=" />
				  <input type="hidden" name="signature" value="QyLu5Z93E7b8ejpdmuKK+VpYIZk=" />
				  <button style="border: none !important; display:inline-block !important;text-align: center !important;padding: 7px 20px !important;
				    color: #fff !important; font-size:16px !important; font-weight: 600 !important; font-family:OpenSans, sans-serif; cursor: pointer !important; border-radius: 2px !important;
				    background: rgb(122,183,43) !important;"onmouseover="this.style.opacity='0.5';" onmouseout="this.style.opacity='1';">
				    <img src="https://static.liqpay.ua/buttons/logo-small.png" name="btn_text"
				      style="margin-right: 7px !important; vertical-align: middle !important;"/>
				    <span style="vertical-align:middle; !important">Оплатить 5 UAH</span>
				  </button>
				</form> -->
								
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