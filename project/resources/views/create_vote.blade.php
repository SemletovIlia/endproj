<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<!-- Стили -->
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/css/uikit.min.css" />

	<!-- Заголовок вкладки -->
	<title>Новости - Создать</title>
</head>

<body>
	<!-- НАЧАЛО: Навигация -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<!-- Логотип-ссылка на главную -->
			<a class="navbar-brand" href="/">
<<<<<<< HEAD
				Новосталочка
			</a>

=======
				<i class="fa fa-hand-paper-o" aria-hidden="true"></i> Новости
			</a>

			<!-- Навигация из 1 элемента "Открыть новости"  -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/vote/create">Открыть новости</a>
				</li>
			</ul>
>>>>>>> c8379256f6cfbb669fb0a142193c72ceb371d466
		</div>
	</nav>
	<!-- КОНЕЦ: Навигация -->

	<!-- НАЧАЛО: Хлебные крошки -->
	<nav class="breadcrumb">
		<div class="container">
			<ol class="breadcrumb my-0 py-0">
				<li class="breadcrumb-item">
					<a href="/"><i class="fa fa-home" aria-hidden="true"></i> Главная</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">
<<<<<<< HEAD
					Написать новость
=======
					Открыть новость
>>>>>>> c8379256f6cfbb669fb0a142193c72ceb371d466
				</li>
			</ol>
		</div>
	</nav>
	<!-- КОНЕЦ: Хлебные крошки -->

	<!-- НАЧАЛО: Основное содержимое страницы -->
	<main class="mt-5">
		<div class="container">

<<<<<<< HEAD
			<h1>Расскажите миру что-то новое</h1>
=======
			<h1>Открыть новость</h1>
>>>>>>> c8379256f6cfbb669fb0a142193c72ceb371d466
			<hr class="mb-4">

			<form method="POST">
                <div class="uk-card uk-card-default uk-width-2-3@m" style="margin: 5% auto">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
								<label for="">Заголовок</label>
								<br>
                                    <input type="text"   placeholder="" class="uk-width-2-3" name="title">
                            </div>
                        </div>
						<br>
						<br>
						<label for="">Новость</label>
						<br>
					<textarea class="uk-width-1" rows="5" name="text"></textarea>

                    </div>
                    <div class="uk-card-footer uk-flex uk-flex-left">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-outline-success">Опубликовать</button>
                    </div>
                </div>


				<div class="form-group">
					<label>Заголовок</label>
					<input type="text" class="form-control" name="title">
				</div>
				<div class="form-group">
					<label>Текст описания</label>
					<textarea class="form-control" rows="5" name="text"></textarea>
				</div>
				{{ csrf_field() }}
				<button type="submit" class="btn btn-outline-success">Открыть новость</button>
			</form>

		</div>
	</main>
	<!-- КОНЕЦ: Основное содержимое страницы -->

	<script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit-icons.min.js"></script>
</body>

</html>
