<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <!-- Стили -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/css/uikit.min.css" />

    <!-- Заголовок вкладки -->
    <title>Новости - Уточек программистам</title>
</head>

<body>
    <!-- НАЧАЛО: Навигация -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <!-- Логотип-ссылка на главную -->
            <a class="navbar-brand" href="/">
                Новосталочка
            </a>

            <!-- Навигация из 1 элемента "Открыть новости"  -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/vote/create">Открыть новости</a>
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
                    {{ $vote['title'] }}
                </li>
            </ol>
        </div>
    </nav>
    <!-- КОНЕЦ: Хлебные крошки -->

    <!-- НАЧАЛО: Основное содержимое страницы -->
    <main class="mt-5">

        <div class="uk-card uk-card-default uk-width-4-5@m" style="margin: 5% auto">
            <div class="uk-card-header">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h3 class="uk-card-title uk-margin-remove-bottom">
                            {{ $vote['title'] }}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="uk-card-body">
                <p class="uk-text-break">{{ $vote['text'] }}</p>
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



    </main>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit-icons.min.js"></script>

    <!-- КОНЕЦ: Основное содержимое страницы -->

</body>

</html>
