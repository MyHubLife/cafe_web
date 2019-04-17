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
                </span>
                <br>
                <?php show_categories();
                ?>
<!--                <div id="categories">-->
<!--                    <ul><a href="">Шашлык</a></ul>-->
<!--                    <ul><a href="">Рыба</a></ul>-->
<!--                    <ul><a href="">Люля-кебаб</a></ul>-->
<!--                    <ul><a href="">Овощи</a></ul>-->
<!--                    <ul><a href="">Соленья</a></ul>-->
<!--                    <ul><a href="">Соусы</a></ul>-->
<!--                    <ul><a href="">Напитки</a></ul>-->
<!--                    <ul><a href="">Хлеб и выпечка</a></ul>-->
<!--                    <ul><a href="">Миксы для компании</a></ul>-->
<!--                    <ul><a href="">Маринованное мясо</a></ul>-->
<!--                </div>-->
            </div>
		</article>
		<?php require_once "views/footer.php"; ?>
	</body>	
</html>