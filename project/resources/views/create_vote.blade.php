<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<!-- Стили -->
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/css/uikit.min.css" />
	<!-- Заголовок вкладки -->
	<title>Редактор</title>
</head>

<body>
	<!-- НАЧАЛО: Навигация -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<!-- Логотип-ссылка на главную -->
			<a class="navbar-brand" href="/home">
				<i class="fa fa-hand-paper-o" aria-hidden="true"></i> Новости
			</a>

			<!-- Навигация из 1 элемента "Открыть голосование"  -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/vote/create">Добавить новость</a>
				</li>
			</ul>
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
					Добавить новость
				</li>
			</ol>
		</div>
	</nav>
	<!-- КОНЕЦ: Хлебные крошки -->

	<!-- НАЧАЛО: Основное содержимое страницы -->
	<main class="mt-5">
		<div class="container">

			<h1>Добавить новость</h1>
			<hr class="mb-4">
			
			<form method="POST">
				@csrf
                <div class="uk-card uk-card-default uk-width-2-3@m" style="margin: 5% auto">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="form-group">
									<label for="">Заголовок</label>
									<br>
									<input type="text" class="form-control" name="title">
								</div>
                            </div>
                        </div>
            			<br>
            			<br>
						<div class="form-group">
							<label for="">Новость</label>
							<br>
							<textarea class="form-control" rows="5" name="text"></textarea>
						</div>

                    </div>
                    <div class="uk-card-footer uk-flex uk-flex-left">
                        
                        <button type="submit" class="btn btn-outline-success" action="/vote/create">Опубликовать</button>
                    </div>
                </div>
			</form>

		</div>
	</main>
	<!-- КОНЕЦ: Основное содержимое страницы -->

	<script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit-icons.min.js"></script>
</body>

</html>
