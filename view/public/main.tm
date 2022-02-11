<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Jquery -->
    <script src="/style/public/js/jq_v_3_6_0.js"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="/style/public/css/dtbs.css">



    <script src="https://kit.fontawesome.com/de9f65bcf0.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="/favicon.svg" type="image/x-icon">
	<title>LIMB</title>

</head>
<body>
	<style>
		body{
	background: #DFEFFF;
}
.page{
	height: 100vh;
}
.main .names{
	background: #fff;
}
#php{
	background: #fff;
	position: absolute;
}
#mysqli{
	background: #fff;
	position: absolute;
	bottom: 50vh;
	left: 0;
}
#js{
	background: #fff;
	position: absolute;
	bottom: 50vh;
	right: 0;
}
#say{
	background: #fff;
	position: absolute;
	bottom: 0vh;
	right: 50wh;
}
#bootstrap{
	background: #fff;
	position: absolute;
	bottom: 0;
	right: 0;
}
#one{
	background-image: url(/resourse/visible/logo.png); /* Путь к фоновому рисунку */
	background-position: center center; /* Положение фона */
    background-repeat: no-repeat; /* Отменяем повторение фона */
    background-size: 250px;
}
#one h1 span{
	color: red;
}
#one h1{
	font-size: 400%;
}
#two{
	background: #303841;
	color: #D7DDE8;
	font-size: 130%;
}
	</style>
	<div class="container-fluid main p-0 m-0">


		<div class = "page" id = "one">
			<div class="names"><h1 class="text-start pt-3 pb-3"><span>LIMB/v1</span></h1></div>
			<div class="description">
				<h1 id = "php">PHP 8.0</h1>
				<h1 id = "bootstrap">BOOTSTRAP 5</h1>
				<h1 id = "mysqli">MYSQLI 8.0</h1>
				<h1 id = "js">JQUERY</h1>
				<h3 id = "say">"Вместо этой страницы мог бы быть Ваш сайт"</h3>
			</div>
		</div>

		<div class = "page p-3" id = "two">
			<h3 class="text-center pt-3">Что это? </h3>
				<p>
					LIMB, в первой своей итерации, предоставляет следующие возможности:
				</p>
				<ul>
					<li>
						Внутренний FAQ
					</li>
					<li>
						Создание, редактирование и удаление таблиц MYSQLI. Все происходит исключительно через веб-интерфейс.
					</li>
					<li>
						Автоматическое создание классов для работы с созданными таблицами и данными, с автоматическим подключением необходимых классов.
					</li>
					<li>
						Автоматическое заполнение ваших таблиц "рыбой-текстом", в соответствии с типом столбца.
					</li>
					<li>
						Шаблонизатор с возможностью простого контроля за правами видимости различных блоков страницы
					</li>
					<li>
						Присутствует модуль авторизации/регистрации. (BOOTSTRAP 5)
					</li>
					<li>
						Присутствует модуль пагинации. (BOOTSTRAP 5)
					</li>
				</ul>
				<p>Для перевода LIMB в рабочее состояние необходимо в файле app/base/db.ini выполнить подключение к базе данных, и сменить метод route в конструкторе класса data/route.php на routeLimb(), вместо routePublicLimb(). Как правило достаточно раскомментировать строку.</p>
		</div>

	</div>
</body>
<script>
</script>
</html>