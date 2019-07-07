
	<div class="modal" id="order">
		<form action="sendmail.php" class="form" method="post">

			<button class="close order_close" type="button">
				<span></span>
				<span></span>
			</button>

			<h3>Оставьте заявку, <br>мы свяжемся с Вами</h3>
			<input type="hidden" name="subject" value="Узнать подробнее!">

			<div class="">
				<input type="text" name="name" placeholder="Имя" required>
			</div>
			<div class="">
				<input type="tel" name="phone" required placeholder="Телефон">
			</div>
			<div class="">
				<button type="submit" class="btn" name="submit">Отправить</button>
			</div>
			<p>Нажимая на кнопку, вы даете согласие <br>на обработку своих <a href="#" target="_blank">персональных данных</a></p>

		</form>
	</div>

	<div class="modal" id="thanks">
		<button class="close thanks_close" type="button">
			<span></span>
			<span></span>
		</button>
		<h3>Спасибо <br>за доверие!</h3>
		<p>Мы обязательно с вами свяжемся!</p>
	</div>
