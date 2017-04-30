
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/header-top.php'); ?>

<div class="bread_menu bread_menu_bg_img">
	<ul class="bread_menu__menu">
		<li class="bread_menu__link "><a href="/" class="bread_menu__link_bg">Главная</a></li>
		<li class="bread_menu__link"><span>Гарантия</span></li>
	</ul>
</div>

<div class="service-wrap">
	<div class="container relative">
		<a href="#" class="order_curcle_innerpage">
			<span class="order_curcle__text toppadding">On-line</span>
			<span class="order_curcle__text">заявка</span>
		</a>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h2 class="h2 h2_dark">Гарантия</h2>
			</div>
			<div class="clearfix"></div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="service-box service-box__view">
					<span>«ПТО Галвент» обеспечивает гарантии высокого качества:</span>
					<div class="service-box__inner">
						<ul>
							<li><span>материалов и оборудования, использованных в производстве конвейеров;</span></li>
							<li><span>произведённых конвейерных систем;</span></li>
							<li><span>монтажных и сборочных работ.</span></li>
							<li><span>Благодаря мощному производственному потенциалу, высокой квалификации сотрудников, постоянному контролю качества на всех этапах производственного процесса мы можем гарантировать бесперебойную работу оборудования в течение 24 месяцев!
							</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form__title">
					<h2 class="h2 h2_dark">Есть вопросы?</h2>
					<span>Свяжитесь с нами через форму обратной связи</span>
				</div>
			</div>
			<div class="clearfix"></div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form__wrap">
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
							<div class="but__wrap">
								<a href="#" class="button button__view"><span class="button__view_ico button__view_ico2"></span><span class="button__view_txt button__view_txt3">отправить</span></a>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
</div>

<?php require_once('includes/footer.php'); ?>

</body>
</html>