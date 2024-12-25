<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html, body{
			height: 100%;
		}
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="col-12  p-3" style="background-color: #171A21;">
		<div class="col-8 mx-auto" >
			<div class="row">
				<div class="col-3" >
					<a href="index.html">
						<img src="logo.png" class="w-100">
					</a>
				</div>
				<div class="col-9 pt-4" >
					<a href="" class="text-light ms-4 text-uppercase">Магазин</a>
					<a href="" class="text-light ms-4 text-uppercase">Сообщество</a>
					<a href="" class="text-light ms-4 text-uppercase">O STEAM</a>
					<a href="" class="text-light ms-4 text-uppercase">Поддержка</a>					
				</div>
			</div>			
		</div>
	</div>
	<div class="col-12" style="background-color: #212429; height: 100%;">
		<div class="col-8 mx-auto p-5" style="background-color: #222431; height: 100%;">
			<div class="mx-auto p3" style="width: 75%;">
				<div class="d-flex" style="width: 51%">
					<img src="profile.jfif">
					<div class="ms-5 col">
						<h3 class="text-white fw-light"><?php echo  $_GET["name"] ?></h3>
						<h5 class="text-white fw-light">Электронная почта: <?php echo  $_GET["email"] ?></h5>
						<h5 class="text-white fw-light mt-4">Возраст: <?php echo  $_GET["age"] ?></h5>
						<?php if ($_GET["age"]>=18) {
							echo "<h5 class=text-danger fw-light mt-4>ye</h5>";
						}
							else {
							echo "<h5 class=text-success fw-light mt-4>no</h5>";
						} ?>
					</div>
				</div>
			</div>
			<div class="col-4 p-5 " style="height: 600px;">
				<h1 class="text-white fs-2">Уровень 1</h1>
				<p class="text-white">Вы можете отобразить один из ваших значков здесь. Выберите его на странице редактирования профиля</p>
				<a href="edit.php">edit</a>
		</div>
	</div>
</body>
</html>