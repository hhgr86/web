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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
            --primary: #4361ee;
            --primary-light: #4895ef;
            --secondary: #3f37c9;
            --accent: #f72585;
            --dark: #212529;
            --light: #f8f9fa;
            --gray: #6c757d;
            --success: #4cc9f0;
            --warning: #f9a825;
            --error: #ff4757;
            --card-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #f5f7fa;
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 1.5rem 2rem;
            box-shadow: var(--card-shadow);
            margin-bottom: 2rem;
            border-radius: 0 0 10px 10px;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-icon {
            color: var(--accent);
        }

        .main-grid {
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 2rem;
        }

        @media (max-width: 768px) {
            .main-grid {
                grid-template-columns: 1fr;
            }
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: var(--card-shadow);
            padding: 1.5rem;
            margin-bottom: 2rem;
            transition: var(--transition);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--primary);
        }

        .news-list {
            display: grid;
            gap: 1.5rem;
        }

        .news-item {
            padding: 1.5rem;
            border-radius: 8px;
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            border-left: 4px solid var(--primary);
        }

        .news-item:hover {
            transform: translateX(5px);
        }

        .news-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .news-meta {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
            font-size: 0.85rem;
            color: var(--gray);
        }

        .news-category {
            background: var(--primary-light);
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .news-text {
            margin-bottom: 1rem;
            color: var(--dark);
            line-height: 1.6;
        }

        .news-actions {
            display: flex;
            justify-content: flex-end;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--secondary);
        }

        .btn-danger {
            background-color: var(--error);
            color: white;
        }

        .btn-danger:hover {
            background-color: #ff6b81;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-family: inherit;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 1em;
        }

        .error-message {
            background-color: var(--error);
            color: white;
            padding: 1rem;
            border-radius: 6px;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }

        .sidebar-card {
            position: sticky;
            top: 2rem;
        }

        .stats {
            display: grid;
            gap: 1rem;
        }

        .stat-item {
            display: flex;
            justify-content: space-between;
            padding: 0.75rem;
            background: rgba(67, 97, 238, 0.1);
            border-radius: 6px;
        }

        .stat-label {
            color: var(--gray);
        }

        .stat-value {
            font-weight: 600;
            color: var(--primary);
        }

        @media (max-width: 576px) {
            .container {
                padding: 1rem;
            }
            
            header {
                padding: 1rem;
            }
            
            .card {
                padding: 1rem;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <i class="fas fa-newspaper logo-icon"></i>
                <span></span>
            </div>
            <div class="header-actions">
                <span class="current-date"><?= date('d.m.Y') ?></span>
            </div>
        </div>
    </header>

    <div class="container">
        <?php if (!empty($errMsg)): ?>
            <div class="error-message">
                <i class="fas fa-exclamation-circle"></i> <?= $errMsg ?>
            </div>
        <?php endif; ?>

        <div class="main-grid">
            <main>
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"><i class="fas fa-list"></i> Последние новости</h2>
                    </div>
                    <div class="news-list">
                        <?php require "get_news.inc.php"; ?>
                    </div>
                </div>
            </main>

            <aside>
                <div class="card sidebar-card">
                    <div class="card-header">
                        <h2 class="card-title"><i class="fas fa-plus-circle"></i> Добавить новость</h2>
                    </div>
                    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <label for="title" class="form-label">Заголовок</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Введите заголовок" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="category" class="form-label">Категория</label>
                            <select id="category" name="category" class="form-control" required>
                                <option value="1">Учёба</option>
                                <option value="2">Музыка</option>
                                <option value="3">Танцы</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="description" class="form-label">Текст новости</label>
                            <textarea id="description" name="description" class="form-control" placeholder="Введите текст новости" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Опубликовать
                        </button>
                    </form>
                </div>

                <div class="card sidebar-card">
                    <div class="card-header">
                        
                    </div>
                    
                    </div>
                </div>
            </aside>
        </div>
    </div>
</body>
</html>
