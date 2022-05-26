<!DOCTYPE html>
<html lang="ru">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <!-- Стили -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/css/uikit.min.css" />

    <!-- Заголовок вкладки -->
    <title>Голосования - Главная</title>
</head>

<body>
    <!-- НАЧАЛО: Навигация -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <!-- Логотип-ссылка на главную -->
            <a class="navbar-brand" href="/">
                Новосталочка
            </a>

            <!-- Навигация из 1 элемента "Открыть голосование"  -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/vote/create">Написать новость</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- КОНЕЦ: Навигация -->

    <!-- НАЧАЛО: Основное содержимое страницы -->
    <main class="mt-5">
        <div class="container">
            <h1>Новости</h1>
            <hr class="mb-5">

            @foreach ($votes as $vote)

            <div class="uk-card uk-card-default uk-width-2-3@m" style="margin: 5% auto">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom">
                                <a href="/vote/show/{{ $vote->id}}">{{ $vote->title }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body">
                    <p class="uk-text-truncate">{{ $vote->text }}</p>
                </div>
                <div class="uk-card-footer uk-flex uk-flex-around">
                    <a href="/vote/positive_inc/{{ $vote->id }}" class="btn btn-outline-success mr-3">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> мне понравилось
                        <span class="badge badge-pill badge-success">
                            {{ $vote->positive }}
                        </span>
                    </a>
                    <a href="/vote/negative_inc/{{ $vote->id }}" class="btn btn-outline-danger mr-3">
                        <i class="fa fa-thumbs-o-down" aria-hidden="true"></i> мне не понравилось
                        <span class="badge badge-pill badge-danger">
                            {{ $vote->negtive }}
                        </span>
                    </a>
                </div>
            </div>

            @endforeach

        </div>
=======
	<meta charset="UTF-8">
	<!-- Стили -->
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
	<!-- Заголовок вкладки -->
	<title>Новости - Главная</title>
</head>

<body>
	<!-- НАЧАЛО: Навигация -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<!-- Логотип-ссылка на главную -->
			<a class="navbar-brand" href="/">
				<i class="fa fa-hand-paper-o" aria-hidden="true"></i> Новости
			</a>

			<!-- Навигация из 1 элемента "Открыть Новости"  -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/vote/create">Открыть новости</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- КОНЕЦ: Навигация -->

	<!-- НАЧАЛО: Основное содержимое страницы -->
	<main class="mt-5">
		<div class="container">
			<h1>Текущие новости</h1>
			<hr class="mb-5">
			
			<!-- НАЧАЛО: Карточка новости ------------------------------------->
			@foreach ($votes as $vote)
				<div class="card border-info mb-4">
					<!-- НАЧАЛО: Шапка карточки -->
					<div class="card-header border-info">
						<h5 class="card-title mb-0">
							<a href="/vote/show/{{ $vote->id}}">
								{{ $vote->title }}
							</a>
						</h5>
					</div>
					<!-- КОНЕЦ: Шапка карточки -->
					<!-- НАЧАЛО: Тело карточки -->
					
					<div class="card-body">
						<!-- Текст описания -->
						<p class="card-text mb-4">
							{{ $vote->text }}
						</p>
						<!-- Кнопки новости -->
						<a href="/vote/positive_inc/{{ $vote->id }}" class="btn btn-outline-success mr-3">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Я за!
							<span class="badge badge-pill badge-success">
								{{ $vote->positive }}
							</span>
						</a>
						<a href="/vote/negative_inc/{{ $vote->id }}" class="btn btn-outline-danger mr-3">
							<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Я против!
							<span class="badge badge-pill badge-danger">
								{{ $vote->negtive }}
							</span>
						</a>
					</div>
				
					<!-- КОНЕЦ: Тело карточки -->
				</div>
			@endforeach
			<!-- КОНЕЦ: Карточка новости -------------------------------------->
>>>>>>> c8379256f6cfbb669fb0a142193c72ceb371d466

        

    </main>
    <!-- КОНЕЦ: Основное содержимое страницы -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit-icons.min.js"></script>
</body>

</html>
