<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 2 - NewsDB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Задание 2: NewsDB с IteratorAggregate</h1>
</header>
<div class="content">
    <p>В классе <code>NewsDB</code> реализован интерфейс <code>IteratorAggregate</code>.</p>
    <ul>
        <li>Массив <code>items</code> хранит категории</li>
        <li>Метод <code>getIterator()</code> возвращает <code>ArrayIterator</code></li>
        <li>Категории берутся из БД в <code>getCategories()</code></li>
    </ul>
    <h2><a href="news1/news.php">Перейти к новостям</a></h2>
    <p><a href="lab5.php">Назад</a></p>
</div>
<footer>
        <p>&copy; 2025 Лабораторная работа № 5</p>
</footer>
</body>
</html>
