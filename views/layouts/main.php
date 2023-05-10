<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<div class="navbar">
		<div class="logo">
			<div class="img_logo">
				<img src="" alt="логотип">
			</div>
			<p>NAME</p>
			<div class="profile">Регистрация</div>
			<div class="profile">Вход</div>
			<div class="profile">профиль</div>
		</div>

		<div class="tape">
			<a href="#">новости</a>
			<a href="#">сообщения</a>
			<a href="#">друзья</a>
			<a href="#">заметки</a>
			<a href="#">что-то</a>
			<a href="#">о нас</a>
		</div>
	</div>

	<main>
		<div class="block"></div>
</main>
<style>
		*{
	margin: 0;
	padding: 0;
	font-size: 24px;
}

.navbar{
	padding-top: 30px;
	background-color: #001930;
}

.logo >p{
	color: #fff;
}

.logo{
	width: 1700px;
	display: flex;
	align-items: center;
	justify-content: space-between;
	margin: 0 auto;
}

.img_logo{
	background-color: #1D82DF;
	border-radius: 40px;
	color: #fff;
	padding: 15px;
}

.profile{
	background-color: #1D82DF;
	border-radius: 40px;
	color: #fff;
	padding: 15px;
}

.tape{
	width: 1700px;
	display: flex;
	align-items: center;
	justify-content: space-between;
	margin: 0 auto;
	padding-top: 40px;
	padding-bottom: 20px;
}

.tape >a{
	background-color: #fff;
	border-radius: 25px;
	padding: 10px 30px 10px 30px;
	text-decoration: none;
}

.block{
	background-color: #000;
	height: 700px;
	width: 1500px;
	margin: 0 auto;
	margin-top: 40px;
}
	</style>
</body>
</html>