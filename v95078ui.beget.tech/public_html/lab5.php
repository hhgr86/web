<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаб. 5: API и AJAX</title>
    <style>
        :root {
            --dark-bg: #1a1a2e;
            --card-bg: #16213e;
            --accent: #0f3460;
            --highlight: #e94560;
            --text: #f1f1f1;
            --text-secondary: #b8b8b8;
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
            padding: 25px;
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

        .content-area {
            background-color: rgba(15, 52, 96, 0.3);
            border-radius: 6px;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 3px solid var(--highlight);
        }

        .title {
            color: var(--highlight);
            font-size: 1.3rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .description {
            color: var(--text-secondary);
            margin-bottom: 20px;
            line-height: 1.7;
        }

        .back-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--highlight);
            color: var(--text);
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.2s;
        }

        .back-link:hover {
            background-color: #d1335a;
            transform: translateY(-2px);
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

        @media (max-width: 768px) {
            .terminal {
                margin: 20px 10px;
            }
            
            .terminal-body {
                padding: 15px;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="terminal">
        <div class="terminal-header">
            <div class="terminal-title">lab5_api_ajax.php</div>
            <div class="terminal-controls">
                <div class="control control-close"></div>
                <div class="control control-minimize"></div>
                <div class="control control-maximize"></div>
            </div>
        </div>
        
        <div class="terminal-body">
            <div class="command-line">
                <span class="prompt">$</span>
                <span class="command">запуск_лабы --api-ajax<span class="cursor"></span></span>
            </div>
            
            <div class="content-area">
                <h1 class="title">API И AJAX</h1>
                <div class="description">
                    
                </div>
                <a href="index.php" class="back-link">НА ГЛАВНУЮ</a>
            </div>
        </div>
    </div>
</body>
</html>