<?php require_once('includes/header.php'); ?>

<div class="contacts">
	<div class="container">
		<h2 class="h2 h2_dark">Наши контакты</h2>
		<div class="contacts__inner">
			<div class="contacts__items">
				<div class="contacts__item"></div>
				<div class="contacts__item"></div>
				<div class="contacts__item"></div>
				<div class="contacts__item"></div>
			</div>
			<div class="mape">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A76178fbf383c6ff2c94613f08dc6b945ab6397d189d4652defa67306d3b1b562&amp;width=100%25&amp;height=340&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
			<div class="form__title-block">
				<span class="form__title">Есть вопросы?</span>
				<span class="form__descr">Свяжитесь с нами через форму обратной связи</span>
			</div>
			<div class="form_for_inner_page">
				<form action="#" method="post" class="form1">
					<div class="form_for_inner_page_box">
						<label for="uname" class="for_input">Ваше ФИО:<i>*</i></label>
						<span class="input input_theme_rosa"><input type="text" class="input__control" id="uname" name="uname" placeholder="Василий" required></span> 
					</div>
					<div class="form_for_inner_page_box">
						<label for="phone" class="for_input">Телефон:<i>*</i></label>
						<span class="input input_theme_rosa"><input type="tel" id="phone" class="input__control js-phone" name="phone" placeholder="+7(___)___-__-__" required></span>
					</div>
					<div class="form_for_inner_page_box last_box">
						<label for="email" class="for_input">E-mail:<i>*</i></label>
						<span class="input input_theme_rosa"><input type="email" id="email" class="input__control" name="email" placeholder="vasiliy@mail.ru" required></span> 
					</div>
					<div class="clear"></div>
					<label for="textmessage" class="for_input for_input_margintop">Комментарий:<i>*</i></label>
					<textarea name="message" id="textmessage" class="message message_theme_rosa" placeholder="Текст комментария"></textarea>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- <?php require_once('includes/popup.php'); ?> -->
<?php require_once('includes/footer.php'); ?>

	
</body>
</html>