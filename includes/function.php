<?php
/*$mysqli = false;
function connectDB{
	global $mysqli;
	$mysqli = new mysqli("localhost", "root", "", "bd_aladdin");
	$mysqli->query("SET NAMES 'utf-8'");
}

function closeDB{
	global $mysqli;
	$mysqli->close();
}*/
require_once("connection.php");
session_start();

/*страница обратной связи, обработчик кнопки "отправить"*/
if (isset ($_POST['done'])){
	if (!empty($_POST['name']) && ($_POST['email']) && ($_POST['subject']) && ($_POST['message'])){
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);
		/*var_dump($_POST);*/
		/*Загружаем информацию в Базу данных*/
		$sql = "INSERT INTO feetback_tbl (name, email, subject, message, time) VALUES ('$name','$email','$subject','$message', NOW())";
		$result = mysqli_query($con, $sql);
		if ($result){
			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['subject'] = $subject;
			$_SESSION['message'] = $message;
//			$_SESSION['post_data'] = $_POST; записываем масив значений #_POST
//			достаем значения масива сесии 
//			$_SESSION['post_data']['name'] 
//			$_SESSION['post_data']['email']
			header("Location: ../ty_fb.php");
		}else{
//			echo "Что то пошло не так =)";
//			echo '<pre>';
//			var_dump($_POST);
			header("Location: ../index.php");
			/* сделать кликабельную ссылку на возврат нв форму отправки или сделать страничку заглушки */
		}
	}else{
		$info_message = "Заполните пожалуйста все поля формы обратной связи";
		$_SESSION['info_message'] = $info_message;
		header("Location: ../contacts.php");
	};
};

/*страница меню - функция вывода на страницу категорий товаров с БД*/
function show_categories(){
    //echo "Function is work!";
    global $con;
    $sql = "SELECT * FROM category_tbl";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        //var_dump($row);
        do{
            echo '
            <div id="categories">
                    <a href="category_wiev.php?category_id='.$row["category_id"].'"><ul id="'.$row["category_id"].'"><img src="img/'.$row["category_img"].'"></ul></a><br>
                    <a href="category_wiev.php?category_id='.$row["category_id"].'"><ul id="'.$row["category_id"].'">'.$row["category_name"].'</ul></a>
            </div>
            ';
        }while ($row = mysqli_fetch_array($result));        
    }else {
        echo 'Не выполнила прочитку БД';
    }
};

/*страница продуктов - вывод с БД продуктов согласно выбраной категории на странице категории товаров*/
function show_products($cat_id){
    global $con;
    $sql = "SELECT * FROM product_tbl WHERE product_cat_id = $cat_id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        do{
            echo '
                <div id="products">
                    <ul id="product_image"><img src="img/'.$row["product_image"].'"></ul>
                    <ul id="product_name">'.$row['product_name'].'</ul>
                    <ul id="product_price">'.$row['product_price'].' грн.</ul>
                    <ul><button>Беру</button></ul>
                </div>
            ';
        }
        while($row = mysqli_fetch_array($result));
    }
};