<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаб. 6: REST API</title>
    <style>
        :root {
            --dark-bg: #1a1a2e;
            --card-bg: #16213e;
            --accent: #0f3460;
            --highlight: #e94560;
            --text: #f1f1f1;
            --text-secondary: #b8b8b8;
            --success: #4cc9f0;
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

        .api-endpoints {
            margin-top: 25px;
        }

        .endpoint {
            background-color: rgba(15, 52, 96, 0.5);
            border-radius: 4px;
            padding: 12px;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }

        .method {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 3px;
            font-weight: bold;
            margin-right: 10px;
        }

        .get { background-color: #28a745; color: white; }
        .post { background-color: #fd7e14; color: white; }
        .put { background-color: #17a2b8; color: white; }
        .delete { background-color: #dc3545; color: white; }

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
            <div class="terminal-title">lab6_rest_api.php</div>
            <div class="terminal-controls">
                <div class="control control-close"></div>
                <div class="control control-minimize"></div>
                <div class="control control-maximize"></div>
            </div>
        </div>
        
        <div class="terminal-body">
            <div class="command-line">
                <span class="prompt">$</span>
                <span class="command">запуск_лабы --rest-api<span class="cursor"></span></span>
            </div>
            
            <div class="content-area">
                <h1 class="title">REST API</h1>
                <div class="description">
                   
                </div>
                
                <div class="api-endpoints">
                    <div class="endpoint">
                        <span class="method get">GET</span>
                        <span>/api/news - Получить список новостей</span>
                    </div>
                    <div class="endpoint">
                        <span class="method post">POST</span>
                        <span>/api/news - Создать новую новость</span>
                    </div>
                    <div class="endpoint">
                        <span class="method get">GET</span>
                        <span>/api/news/{id} - Получить конкретную новость</span>
                    </div>
                    <div class="endpoint">
                        <span class="method put">PUT</span>
                        <span>/api/news/{id} - Обновить новость</span>
                    </div>
                    <div class="endpoint">
                        <span class="method delete">DELETE</span>
                        <span>/api/news/{id} - Удалить новость</span>
                    </div>
                </div>
                
                <a href="index.php" class="back-link">НА ГЛАВНУЮ</a>
            </div>
        </div>
    </div>
</body>
</html>