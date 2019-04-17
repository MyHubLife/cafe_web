<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<?php require_once "views/head.php"; ?>
	</head>
	<body>
		<?php require_once "views/header.php"; ?>
		<article>
			<div id="wrapper">
				<span class="Name">
					<a href="index.php">
						<img src="img/aladdin.png">
					</a>
				</span><br>
				<div id="Fon">
					<span class="Sub_Name">
						<h1>Контакты</h1>
						<p>г. Киев, Подлесная 5/21<br>
						Тел: +38(093)605-44-15<br>
						Тел: +38(067)605-44-15<br>
						E-mail: <a href="mailto:shashlykinkyiv@gmail.com">shashlykinkyiv@gmail.com</a><br>
						</p>
					</span>
					<span class="road_map">
						<h1>Карта проезда</h1>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.259712959826!2d30.33597971515566!3d50.47350859358508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ccca119240b1%3A0x23925b31c007ec05!2z0YPQuy4g0J_QvtC00LvQtdGB0L3QsNGPLCA1LCDQmtC40LXQsiwgMDMxNjQ!5e0!3m2!1sru!2sua!4v1552608280711" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</span>
					<div id="feetback">
						<h1>Обратная связь</h1>
							<p>Напишите нам Ваши пожелания, предложения или просто приятное письмо.<p>Нам очень важна обратная связь с Вашей стороны</p><br/>
						<form id="feetback_form" action="includes/function.php" method="post">
							<span class="form">
								<?php if (isset($_SESSION['info_message'])){?>
									<p><?php echo $_SESSION['info_message'];?></p>
								<?php }; ?>
								<input type="text" placeholder="Имя" id="name" name="name">
								<input type="text" placeholder="E-mail" id="email" name="email">
								<input type="text" placeholder="Тема сообщения" id="subject" name="subject">
								<textarea placeholder="Текст сообщения" id="message" name="message"></textarea><br>
								<button id="done" name="done" value="send">Отправить</button>
							</span>
						</form>
					</div>
				</div>
				<a href="menu.php">
					<button text="Меню" title="Меню" value="menu">Меню</button>
				</a>
			</div>
		</article>
		<?php require_once "views/footer.php"; ?>
	</body>	
</html>