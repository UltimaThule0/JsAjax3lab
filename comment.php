<?php
	require_once('php/connect.php');
	$id = $_GET['id'];
	$result = mysqli_query($conn, "SELECT * FROM `news` WHERE `id_new` = '$id'");
	$result = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Comment</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header class="header">
		<div class="header__content">
			<div class="content">
				<div class="header__logo">
					<a href="#"><img src="img/logo.webp" alt="logo" /></a>
					<span>НА РУССКОМ</span>
				</div>
			</div>
			<div class="content">
					<nav class="header__menu">
						<ul>
							<li><a href="#">Новости</a></li>
							<li><a href="#">Covid-19</a></li>
							<li><a href="#">Мир</a></li>
							<li><a href="#">Россия</a></li>
							<li><a href="#">Бывший СССР</a></li>
							<li><a href="#">Экономика</a></li>
							<li><a href="#">Спорт</a></li>
							<li><a href="#">Без политики</a></li>
							<li><a href="#">Мнения</a></li>
							<li><a href="#">ИноТВ</a></li>
							<li><a href="#">Фото</a></li>
							<li><a href="#">Видео</a></li>
						</ul>
					</nav>
			</div>
		</div>
	</header>

	<main class="main">
		<div class="content">
			<div id="place__for__new">
				<div class="new">
							<div class="new__category">
								<a href="<?=$result['link_new']?>">
									<?=$result['category_new']?>
								</a>
							</div>

							<div class="new__title">
								<a href="<?= $result['url_new']?>">
									<?=$result['title_new']?>
								</a>
							</div>

							<div class="new__date">
								<?=$result['date_new']?>
							</div>

							<div class="new__text">
								<a href="<?=$result['url_new']?>">
									<?=$result['text_new']?>
								</a>
							</div>
						</div>
			</div>
			<div class="form">
				<form name = "comment" class="comment">
					<input type="text" name="id" hidden="" value="<?=$id?>" />
					<div class="form__info">
						<div class="form__name">
							<label>Ваше имя:</label>

							<input type="text" name="name" placeholder="Редин Максим" id="name" />
						</div>

						<div class="form__email">
							<label>Ваш email:</label>

							<input type="email" name="email" placeholder="alexandrovich.m@gmail.com" id="email" />
						</div>
					</div>

					<div class="form__text">
						<textarea placeholder="Введите сюда ваш комментарий" id="text"></textarea>
					</div>

					<div class="form__submit">
						<input class="submit" type="submit" name="submit"/>
					</div>
				</form>
			</div>

			<div id="comment__place">
				
			</div>
		</div>
	</main>

	<footer class="footer">
		<div class="content">
			<span>Редин М.А.</span>
		</div>
	</footer>

	<script src="js/jquery-3.6.0.js"></script>
	<script src ="js/loadComments.js"></script>
</body>
</html>