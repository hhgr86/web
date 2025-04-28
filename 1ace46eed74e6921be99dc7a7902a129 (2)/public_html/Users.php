<?php

spl_autoload_register(function ($class) {
    $prefix = 'MyProject\\Classes\\';
    $base_dir = __DIR__ . '/MyProject/Classes/';
    
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

// Выводим кликабельную ссылку на изображение диаграммы
echo '<div style="margin: 20px; padding: 10px; border: 1px solid #ccc; background: #f9f9f9;">';
echo '<h3>Диаграмма классов</h3>';
echo '<a href="https://www.plantuml.com/plantuml/png/jP91IyGm48Nl-HLpt4LRF1U55Kzx40JnlCHqjaRIf4mcBaljVpTX4zegUxIdvirxUNn3TfubSUYDiB97FqY5y7n-8VU9Ykid8xr73wC0aE-UIIe6bKHupCStZvJcyRiPYsS2_-5EUtjqcsqSJK90ZYtjgR61cD2skoZ6TTgkf6g8gPEZTcqSFKlMQWBbWkK6j6LuWBlBy71GpaPtKBnPTjn2lhySVz-zBVaMSpmhCqq3NqwtcIdL8XtJpbx3W9JWzaKgb1roYKeYULxjOyuLEpc3_yjQb6NJTSxh1EidSFzTLP3-uc0M2bvI_wueUkfwuPd43cqRUlC3" target="_blank">';
echo '<img src="https://www.plantuml.com/plantuml/png/jP91IyGm48Nl-HLpt4LRF1U55Kzx40JnlCHqjaRIf4mcBaljVpTX4zegUxIdvirxUNn3TfubSUYDiB97FqY5y7n-8VU9Ykid8xr73wC0aE-UIIe6bKHupCStZvJcyRiPYsS2_-5EUtjqcsqSJK90ZYtjgR61cD2skoZ6TTgkf6g8gPEZTcqSFKlMQWBbWkK6j6LuWBlBy71GpaPtKBnPTjn2lhySVz-zBVaMSpmhCqq3NqwtcIdL8XtJpbx3W9JWzaKgb1roYKeYULxjOyuLEpc3_yjQb6NJTSxh1EidSFzTLP3-uc0M2bvI_wueUkfwuPd43cqRUlC3" alt="UML Class Diagram" style="max-width: 100%;">';
echo '</a>';
echo '</div>';

// Создаем пользователей
$user1 = new User("Дима", "Dima", "password1");
$user2 = new User("Дмитрий", "Dmitriy", "password2");
$user3 = new User("jon", "JON", "password3");

// Создаем суперпользователя
$user4 = new SuperUser("Митряй", "Mitay", "superpass", "admin");

// Выводим информацию
echo "<div style='margin: 20px;'>";
$user1->showInfo();
$user2->showInfo();
$user3->showInfo();
$user4->showInfo();
echo "</div>";

// Выводим счетчики
echo "<div style='margin: 20px; font-weight: bold;'>";
echo "Всего обычных пользователей: " . User::getRegularUserCount() . "<br>";
echo "Всего супер-пользователей: " . SuperUser::getSuperUserCount();
echo "</div>";