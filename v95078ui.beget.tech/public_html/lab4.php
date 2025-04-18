<?php
// Лабораторная работа №4 - Работа с файлами и сессиями
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаб. 4: Файлы и сессии</title>
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
            max-width: 900px;
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

        .section {
            background-color: rgba(15, 52, 96, 0.3);
            border-radius: 6px;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 3px solid var(--highlight);
        }

        .section-title {
            color: var(--success);
            font-weight: 600;
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .section-description {
            color: var(--text-secondary);
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        .code {
            font-family: 'JetBrains Mono', monospace;
            background-color: rgba(0, 0, 0, 0.3);
            padding: 2px 5px;
            border-radius: 3px;
            font-size: 0.9rem;
            color: var(--highlight);
        }

        .demo-link {
            display: inline-block;
            padding: 8px 16px;
            background-color: var(--highlight);
            color: var(--text);
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.2s;
        }

        .demo-link:hover {
            background-color: #d1335a;
            transform: translateY(-2px);
        }

        .diagram-container {
            margin: 20px 0;
            text-align: center;
            background-color: rgba(15, 52, 96, 0.2);
            padding: 15px;
            border-radius: 6px;
        }

        .diagram {
            max-width: 100%;
            border-radius: 4px;
            border: 1px solid var(--accent);
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

        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: var(--highlight);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <a href="index.php" class="back-link">← Назад к списку лабораторных</a>
    
    <div class="terminal">
        <div class="terminal-header">
            <div class="terminal-title">lab4_files_sessions.php</div>
            <div class="terminal-controls">
                <div class="control control-close"></div>
                <div class="control control-minimize"></div>
                <div class="control control-maximize"></div>
            </div>
        </div>
        
        <div class="terminal-body">
            <div class="command-line">
                <span class="prompt">$</span>
                <span class="command">запуск_лабы --файлы-сессии<span class="cursor"></span></span>
            </div>
            
            <div class="section">
                <h2 class="section-title">НОВОСТНАЯ СИСТЕМА</h2>
                <div class="section-description">
                    
                </div>
                <a href="./news/news.php" class="demo-link" target="_blank">ЗАПУСТИТЬ НОВОСТНУЮ СИСТЕМУ</a>
            </div>
            
            <div class="section">
                <h2 class="section-title">ДИАГРАММА КЛАССОВ</h2>
                <div class="diagram-container">
                    <img src="news/images/NewsSystem.png" alt="Диаграмма классов" class="diagram">
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer">
        PHP FILES & SESSIONS LAB &copy; <?php echo date('Y'); ?> | Терминальный интерфейс v4.0
    </div>
</body>
</html>