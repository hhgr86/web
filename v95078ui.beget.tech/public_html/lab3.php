<?php
// Lab 3 - Design Patterns Implementation
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаб. 3: Паттерны (Singleton, Factory, MVC)</title>
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

        .section-title {
            color: var(--highlight);
            font-weight: 600;
            margin: 20px 0 15px;
            padding-bottom: 5px;
            border-bottom: 1px solid var(--accent);
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }

        .pattern-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 15px;
            margin-bottom: 30px;
        }

        .pattern-card {
            background-color: rgba(15, 52, 96, 0.3);
            border-radius: 6px;
            padding: 15px;
            border-left: 3px solid var(--highlight);
            transition: all 0.2s;
        }

        .pattern-card:hover {
            background-color: rgba(15, 52, 96, 0.5);
            transform: translateY(-3px);
        }

        .pattern-name {
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--success);
        }

        .pattern-description {
            font-size: 0.9rem;
            margin-bottom: 15px;
            color: var(--text-secondary);
        }

        .pattern-links {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .pattern-link {
            display: inline-block;
            padding: 5px 10px;
            background-color: var(--accent);
            color: var(--text);
            text-decoration: none;
            border-radius: 4px;
            font-size: 0.8rem;
            transition: all 0.2s;
        }

        .pattern-link:hover {
            background-color: var(--highlight);
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
            <div class="terminal-title">lab3_patterns.php</div>
            <div class="terminal-controls">
                <div class="control control-close"></div>
                <div class="control control-minimize"></div>
                <div class="control control-maximize"></div>
            </div>
        </div>
        
        <div class="terminal-body">
            <div class="command-line">
                <span class="prompt">$</span>
                <span class="command">запуск_лабы --паттерны<span class="cursor"></span></span>
            </div>
            
            <div class="section-title">Реализованные паттерны</div>
            <div class="pattern-grid">
                <div class="pattern-card">
                    <div class="pattern-name">Одиночка (Singleton)</div>
                    <div class="pattern-description">
                        
                    </div>
                    <div class="pattern-links">
                        <a href="lab3/patterns/singleton/settings_use.php" class="pattern-link" target="_blank">Одиночная</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Фабричный метод (Factory Method)</div>
                    <div class="pattern-description">
                        
                    </div>
                    <div class="pattern-links">
                        <a href="lab3/patterns/factory-method/factory_use.php" class="pattern-link" target="_blank">Фабричный</a>
                        <a href="lab3/patterns/factory-method/factory-method.html" class="pattern-link" target="_blank">Диаграмма</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">MVC (Model-View-Controller)</div>
                    <div class="pattern-description">
                        
                    </div>
                    <div class="pattern-links">
                        <a href="lab3/patterns/mvc/mvc_use.php" class="pattern-link" target="_blank">MVC</a>
                        <a href="lab3/patterns/mvc/mvc-pattern.html" class="pattern-link" target="_blank">Диаграмма</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer">
        PHP PATTERNS LAB &copy; <?php echo date('Y'); ?> | Терминальный интерфейс v3.0
    </div>
</body>
</html>
