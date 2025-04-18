<?php

declare(strict_types=1);

// Функция автозагрузки
spl_autoload_register(function ($class) {
    $prefix = 'MyProject\\';
    $base_dir = __DIR__ . '/MyProject/';

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

// Создание пользователей
$user1 = new User("John Doe", "john", "password123");
$user2 = new User("Jane Smith", "jane", "password456");
$user3 = new User("Bob Wilson", "bob", "password789");
$superUser = new SuperUser("Admin User", "admin", "adminpass", "Administrator");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаб. 1: Управление пользователями</title>
    <style>
        :root {
            --dark-bg: #1a1a2e;
            --card-bg: #16213e;
            --accent: #0f3460;
            --highlight: #e94560;
            --text: #f1f1f1;
            --text-secondary: #b8b8b8;
            --success: #4cc9f0;
            --warning: #f9a825;
        }

        body {
            font-family: 'JetBrains Mono', monospace;
            background-color: var(--dark-bg);
            color: var(--text);
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }

        .terminal {
            max-width: 800px;
            margin: 0 auto;
            background-color: var(--card-bg);
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            overflow: hidden;
        }

        .terminal-header {
            background-color: var(--accent);
            padding: 12px 20px;
            display: flex;
            align-items: center;
        }

        .terminal-title {
            font-weight: 700;
            font-size: 1.1rem;
        }

        .terminal-controls {
            display: flex;
            margin-left: auto;
        }

        .control {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-left: 8px;
        }

        .control-close { background-color: #ff5f56; }
        .control-minimize { background-color: #ffbd2e; }
        .control-maximize { background-color: #27c93f; }

        .terminal-body {
            padding: 20px;
        }

        .command-line {
            display: flex;
            margin-bottom: 20px;
        }

        .prompt {
            color: var(--highlight);
            margin-right: 10px;
            font-weight: bold;
        }

        .command {
            color: var(--text);
        }

        .output {
            margin-bottom: 25px;
        }

        .section-title {
            color: var(--highlight);
            font-weight: 600;
            margin: 15px 0 10px;
            border-bottom: 1px solid var(--accent);
            padding-bottom: 5px;
        }

        .user-item {
            display: flex;
            margin-bottom: 10px;
            padding: 10px;
            background-color: rgba(15, 52, 96, 0.3);
            border-radius: 4px;
        }

        .user-super {
            border-left: 3px solid var(--highlight);
        }

        .user-info {
            flex-grow: 1;
        }

        .user-info div {
            margin: 3px 0;
        }

        .user-label {
            display: inline-block;
            width: 80px;
            color: var(--text-secondary);
        }

        .stats {
            margin-top: 25px;
            padding: 15px;
            background-color: rgba(15, 52, 96, 0.5);
            border-radius: 4px;
        }

        .stats-item {
            margin: 8px 0;
        }

        .cursor {
            display: inline-block;
            width: 8px;
            height: 16px;
            background-color: var(--highlight);
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: var(--text-secondary);
            font-size: 0.8rem;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="terminal">
        <div class="terminal-header">
            <div class="terminal-title">lab1_usersystem.php</div>
            <div class="terminal-controls">
                <div class="control control-close"></div>
                <div class="control control-minimize"></div>
                <div class="control control-maximize"></div>
            </div>
        </div>
        
        <div class="terminal-body">
            <div class="command-line">
                <span class="prompt">$</span>
                <span class="command">запуск_лабы --users<span class="cursor"></span></span>
            </div>
            
            <div class="output">
                <div class="section-title">ОБЫЧНЫЕ ПОЛЬЗОВАТЕЛИ</div>
                
                <?php foreach ([$user1, $user2, $user3] as $user): ?>
                <div class="user-item">
                    <div class="user-info">
                        <div><span class="user-label">Имя:</span> <?= htmlspecialchars($user->name) ?></div>
                        <div><span class="user-label">Логин:</span> <?= htmlspecialchars($user->login) ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
                
                <div class="section-title">ПРИВИЛЕГИРОВАННЫЙ ПОЛЬЗОВАТЕЛЬ</div>
                
                <div class="user-item user-super">
                    <div class="user-info">
                        <?php foreach ($superUser->getInfo() as $key => $value): ?>
                        <div>
                            <span class="user-label">
                                <?= match($key) {
                                    'name' => 'Имя',
                                    'login' => 'Логин',
                                    'role' => 'Роль',
                                    default => ucfirst($key)
                                } ?>:
                            </span>
                            <?= htmlspecialchars($value) ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="stats">
                    <div class="section-title">СТАТИСТИКА</div>
                    <div class="stats-item">Обычных пользователей: <?= User::getUserCount() ?></div>
                    <div class="stats-item">Привилегированных: <?= SuperUser::getSuperUserCount() ?></div>
                </div>
            </div>
            
            <div class="command-line">
                <span class="prompt">$</span>
                <span class="command">удаление_пользователей<span class="cursor"></span></span>
            </div>
            
            <div class="output">
                <?php
                unset($user1, $user2, $user3, $superUser);
                echo '<div class="stats-item">Все пользователи удалены из памяти</div>';
                ?>
            </div>
        </div>
    </div>
    
    <div class="footer">
        PHP USER SYSTEM &copy; <?= date('Y') ?> | Терминальный интерфейс v1.0
    </div>
</body>
</html>