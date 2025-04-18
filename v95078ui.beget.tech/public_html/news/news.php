<?php
require_once "NewsDB.class.php";
$news = new NewsDB();
$errMsg = "";

if (isset($_GET['del'])) {
    require "delete_news.inc.php";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require "save_news.inc.php";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Новостная лента</title>
    <meta charset="utf-8">
    <style>
        :root {
            --dark-bg: #1a1a2e;
            --card-bg: #16213e;
            --accent: #0f3460;
            --highlight: #e94560;
            --text: #f1f1f1;
            --text-secondary: #b8b8b8;
            --success: #4cc9f0;
            --error: #ff4757;
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

        .error-message {
            background-color: var(--error);
            color: white;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="text"], textarea, select {
            background-color: rgba(0, 0, 0, 0.2);
            border: 1px solid var(--accent);
            color: var(--text);
            padding: 10px;
            border-radius: 4px;
            font-family: 'JetBrains Mono', monospace;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: var(--highlight);
            color: var(--text);
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #d1335a;
        }

        .news-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .news-item {
            background-color: rgba(15, 52, 96, 0.3);
            border-radius: 6px;
            padding: 15px;
            border-left: 3px solid var(--success);
        }

        .news-item h3 {
            color: var(--success);
            margin-top: 0;
            margin-bottom: 10px;
        }

        .news-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 10px;
            font-size: 0.8rem;
            color: var(--text-secondary);
        }

        .news-text {
            margin-bottom: 15px;
            font-size: 0.9rem;
        }

        .news-actions {
            text-align: right;
        }

        .delete-button {
            background-color: var(--error);
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 0.8rem;
            transition: all 0.2s;
        }

        .delete-button:hover {
            background-color: #ff6b81;
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
            
            .news-meta {
                flex-direction: column;
                gap: 5px;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="terminal">
        <div class="terminal-header">
            <div class="terminal-title">news_system.php</div>
            <div class="terminal-controls">
                <div class="control control-close"></div>
                <div class="control control-minimize"></div>
                <div class="control control-maximize"></div>
            </div>
        </div>
        
        <div class="terminal-body">
            <div class="command-line">
                <span class="prompt">$</span>
                <span class="command">запуск_новостной_системы<span class="cursor"></span></span>
            </div>
            
            <div class="content-area">
                <h1 class="title">ПОСЛЕДНИЕ НОВОСТИ</h1>
                
                <?php if (!empty($errMsg)): ?>
                    <div class="error-message"><?= $errMsg ?></div>
                <?php endif; ?>
                
                <?php require "get_news.inc.php"; ?>
            </div>
            
            <div class="content-area">
                <h2 class="title">ДОБАВИТЬ НОВОСТЬ</h2>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="text" name="title" placeholder="Заголовок новости" required>
                    <select name="category" required>
                        <option value="1">учёба</option>
                        <option value="2">музыка</option>
                        <option value="3">танцы</option>
                    </select>
                    <textarea name="description" placeholder="Текст новости" required></textarea>
                    
                    <input type="submit" value="ОПУБЛИКОВАТЬ">
                </form>
            </div>
        </div>
    </div>
</body>
</html>