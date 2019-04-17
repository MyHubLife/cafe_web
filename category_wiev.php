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
                <div id="Fon">
                    <span class="Sub_Name">
                        <h1>CATEGORY</h1>
                        <?php
        //                var_dump($_GET);
                        show_products($_GET['category_id']);
                        ?>
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