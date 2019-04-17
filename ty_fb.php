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
				<h1>Спасибо!</h1>
				<p>Мы благодарны Вам за обратную связь.</p>
				<p>Обязательно ознакомимся с Вашим письмом.</p>
				<p>Вы нам написали:</p>
				<?php session_start();?>
				<span class="ty_fb">
					<p>Имя: <?php echo $_SESSION['name'];?></p>
					<p>Элекронная почта: <?php echo $_SESSION['email'];?></p>
					<p>Тема сообщения: <?php echo $_SESSION['subject'];?></p>
					<p>Текст сообщения: <?php echo $_SESSION['message'];?></p>
				</span>
<!--				?php session_destroy();?>-->
<!--				добавить вывод сообщения и его реквизитов на страницу-->
			</span>
			</div>
			<a href="menu.php">
				<button text="Меню" title="Меню">Меню</button>
			</a>
		</div>
		</article>
		<?php require_once "views/footer.php"; ?>
	</body>	
</html>