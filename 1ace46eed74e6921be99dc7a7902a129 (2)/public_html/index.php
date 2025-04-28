<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторные работы по Проектированию архитектуры корпоративных информационных систем</title>
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --dark-color: #1a1a2e;
            --light-color: #f8f9fa;
            --success-color: #4cc9f0;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            margin: 0;
            padding: 0;
            min-height: 100vh;
            color: var(--dark-color);
        }
        
        header {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: var(--light-color);
            padding: 30px 0;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: 600;
            letter-spacing: 1px;
        }
        
        .content {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
        }
        
        ul {
            list-style: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        
        ul li {
            margin: 0;
        }
        
        ul li a {
            display: block;
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            padding: 20px;
            background: white;
            border-radius: 12px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.05);
            text-align: center;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        ul li a:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            color: var(--primary-color);
            border: 1px solid var(--accent-color);
        }
        
        ul li a::before {
            content: "📋";
            font-size: 2rem;
            margin-bottom: 10px;
        }
        
        footer {
            text-align: center;
            padding: 20px 0;
            background: var(--dark-color);
            color: var(--light-color);
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 40px;
        }
        
        @media (max-width: 768px) {
            ul {
                grid-template-columns: 1fr;
            }
            
            .content {
                padding: 20px;
                margin: 20px;
            }
            
            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Лабораторные работы</h1>
    </header>
    <div class="content">
        <ul>
            <li><a href="Users.php">Лабораторная работа №1</a></li>
            <li><a href="lab2.php">Лабораторная работа №2</a></li>
            <li><a href="lab3.php">Лабораторная работа №3</a></li>
            <li><a href="lab4.php">Лабораторная работа №4</a></li>
            <li><a href="lab5.php">Лабораторная работа №5</a></li>
        </ul>
    </div>
    <footer>
        <p>&copy; 2025 Лабораторные работы по Проектированию архитектуры корпоративных информационных систем</p>
    </footer>
</body>
</html>