<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторные работы PHP</title>
    <style>
        :root {
            --dark-bg: #1a1a2e;
            --card-bg: #16213e;
            --accent: #0f3460;
            --highlight: #e94560;
            --text: #f1f1f1;
            --text-secondary: #b8b8b8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'JetBrains Mono', 'Courier New', monospace;
            background-color: var(--dark-bg);
            color: var(--text);
            line-height: 1.6;
            padding: 0;
            overflow-x: hidden;
        }

        .terminal {
            max-width: 700px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .terminal-header {
            background-color: var(--accent);
            padding: 15px 25px;
            border-radius: 8px 8px 0 0;
            display: flex;
            align-items: center;
            position: relative;
        }

        .terminal-title {
            font-weight: 700;
            font-size: 1.3rem;
            letter-spacing: 1px;
        }

        .terminal-controls {
            display: flex;
            position: absolute;
            right: 25px;
        }

        .control {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-left: 8px;
        }

        .control-close {
            background-color: #ff5f56;
        }

        .control-minimize {
            background-color: #ffbd2e;
        }

        .control-maximize {
            background-color: #27c93f;
        }

        .terminal-body {
            background-color: var(--card-bg);
            border-radius: 0 0 8px 8px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
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
            flex-grow: 1;
        }

        .lab-list {
            list-style: none;
        }

        .lab-item {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            padding: 12px 15px;
            background-color: rgba(15, 52, 96, 0.3);
            border-radius: 6px;
            transition: all 0.2s;
        }

        .lab-item:hover {
            background-color: rgba(15, 52, 96, 0.5);
            transform: translateX(5px);
        }

        .lab-number {
            background-color: var(--highlight);
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .lab-title {
            font-weight: 500;
            font-size: 1rem;
            color: var(--text);
            flex-grow: 1;
        }

        .lab-link {
            color: var(--highlight);
            text-decoration: none;
            margin-left: 15px;
            font-size: 0.8rem;
            opacity: 0.7;
            transition: opacity 0.2s;
        }

        .lab-link:hover {
            opacity: 1;
            text-decoration: underline;
        }

        .cursor {
            display: inline-block;
            width: 8px;
            height: 16px;
            background-color: var(--highlight);
            vertical-align: middle;
            margin-left: 5px;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding: 15px;
            color: var(--text-secondary);
            font-size: 0.7rem;
        }

        @media (max-width: 768px) {
            .terminal {
                margin: 20px 10px;
                padding: 0 10px;
            }
            
            .terminal-body {
                padding: 15px;
            }
            
            .lab-item {
                padding: 10px 12px;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="terminal">
        <div class="terminal-header">
            <div class="terminal-title">php_лабораторные</div>
            <div class="terminal-controls">
                <div class="control control-close"></div>
                <div class="control control-minimize"></div>
                <div class="control control-maximize"></div>
            </div>
        </div>
        
        <div class="terminal-body">
            <div class="command-line">
                <span class="prompt">$</span>
                <span class="command">список_лаб<span class="cursor"></span></span>
            </div>
            
            <ul class="lab-list">
                <li class="lab-item">
                    <div class="lab-number">1</div>
                    <div class="lab-title">Лабораторная 1</div>
                    <a href="lab1.php" class="lab-link">запуск</a>
                </li>
                
                <li class="lab-item">
                    <div class="lab-number">2</div>
                    <div class="lab-title">Лабораторная 2</div>
                    <a href="lab2.php" class="lab-link">запуск</a>
                </li>
                
                <li class="lab-item">
                    <div class="lab-number">3</div>
                    <div class="lab-title">Лабораторная 3</div>
                    <a href="lab3.php" class="lab-link">запуск</a>
                </li>
                
                <li class="lab-item">
                    <div class="lab-number">4</div>
                    <div class="lab-title">Лабораторная 4</div>
                    <a href="lab4.php" class="lab-link">запуск</a>
                </li>
                
                <li class="lab-item">
                    <div class="lab-number">5</div>
                    <div class="lab-title">Лабораторная 5</div>
                    <a href="lab5.php" class="lab-link">запуск</a>
                </li>
                
                <li class="lab-item">
                    <div class="lab-number">6</div>
                    <div class="lab-title">Лабораторная 6</div>
                    <a href="lab6.php" class="lab-link">запуск</a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="footer">
        PHP LABS &copy; <?php echo date('Y'); ?> | Терминал v2.1
    </div>
</body>
</html>