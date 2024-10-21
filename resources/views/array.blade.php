<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивчик</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <H1>
            Нарушений.нет
        </H1>
        <a href="">
            Главная
        </a>
        <a href="array">
            Массивы
        </a>
        <a href="report">
            База таблица
        </a>
    </header>
    @foreach($array as $item)
        <div>
            <img src="{{$item['path']}}" alt="">
            <p>{{ $item['title'] }}</p>
            <p>{{ $item['price'] }}</p>
        </div>
    @endforeach
</body>
</html>