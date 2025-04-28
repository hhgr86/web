<?php
declare(strict_types=1);

spl_autoload_register(function ($class) {
    $prefix = 'MyProject\\';
    $base_dir = __DIR__ . '/MyProject/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) return;
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) require $file;
});

use MyProject\Classes\NumbersSquared;

$start = 3;
$end = 7;
$numbers = new NumbersSquared($start, $end);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 1 - NumbersSquared</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Задание 1: Класс-итератор NumbersSquared</h1>
</header>
<div class="content">
    <p>Вывод чисел от <?= $start ?> до <?= $end ?> и их квадратов:</p>
    <div class="output">
        <pre>
<?php foreach ($numbers as $key => $value) {
    echo "Квадрат числа $key = $value\n";
} ?>
        </pre>
    </div>

    <p><a href="lab5.php">Назад</a></p>
</div>
<footer>
        <p>&copy; 2025 Лабораторная работа № 5</p>
</footer>
</body>
</html>
