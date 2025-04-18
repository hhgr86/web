<?php
// Lab 2 - Design Patterns Implementation
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаб. 2: Паттерны проектирования</title>
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
            max-width: 1000px;
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
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
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

        .pattern-links {
            margin-top: 15px;
            display: flex;
            gap: 10px;
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
            <div class="terminal-title">lab2_design_patterns.php</div>
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
            
            <div class="section-title">Порождающие паттерны</div>
            <div class="pattern-grid">
                <div class="pattern-card">
                    <div class="pattern-name">Фабричный метод (Factory Method)</div>
                    <div>Определяет интерфейс для создания объекта, делегируя инстанцирование подклассам.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/FactoryMethod/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Абстрактная фабрика (Abstract Factory)</div>
                    <div>Создает семейства взаимосвязанных объектов без указания их классов.</div>
                    <div class="pattern-links">
                        <a href="lab2/AbstractFactory/RealWorld/index.php" class="pattern-link" target="_blank">Демо</a>
                        <a href="lab2/AbstractFactory/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Строитель (Builder)</div>
                    <div>Отделяет конструирование сложного объекта от его представления.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Builder/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Прототип (Prototype)</div>
                    <div>Создает объекты путем клонирования существующих прототипов.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Prototype/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Одиночка (Singleton)</div>
                    <div>Гарантирует единственный экземпляр класса с глобальным доступом.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Singleton/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
            </div>
            
            <div class="section-title">Структурные паттерны</div>
            <div class="pattern-grid">
                <div class="pattern-card">
                    <div class="pattern-name">Адаптер (Adapter)</div>
                    <div>Обеспечивает совместную работу несовместимых интерфейсов.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Adapter/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Мост (Bridge)</div>
                    <div>Разделяет абстракцию и реализацию для независимого изменения.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Bridge/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Компоновщик (Composite)</div>
                    <div>Объединяет объекты в древовидные структуры для иерархий.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Composite/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Декоратор (Decorator)</div>
                    <div>Динамически добавляет объектам новые обязанности.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Decorator/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Фасад (Facade)</div>
                    <div>Предоставляет упрощенный интерфейс к сложной подсистеме.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Facade/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Легковес (Flyweight)</div>
                    <div>Эффективно поддерживает множество мелких объектов.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Flyweight/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Заместитель (Proxy)</div>
                    <div>Предоставляет суррогат или заместитель другого объекта.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Proxy/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
            </div>
            
            <div class="section-title">Поведенческие паттерны</div>
            <div class="pattern-grid">
                <div class="pattern-card">
                    <div class="pattern-name">Цепочка обязанностей (Chain of Responsibility)</div>
                    <div>Передает запрос по цепочке потенциальных обработчиков.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/ChainOfResponsibility/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Команда (Command)</div>
                    <div>Инкапсулирует запрос как объект.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Command/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Итератор (Iterator)</div>
                    <div>Последовательно обходит элементы коллекции.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Iterator/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Посредник (Mediator)</div>
                    <div>Упрощает взаимодействие между классами.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Mediator/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Снимок (Memento)</div>
                    <div>Сохраняет и восстанавливает состояние объекта.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Memento/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Наблюдатель (Observer)</div>
                    <div>Определяет зависимость "один-ко-многим" между объектами.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Observer/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Состояние (State)</div>
                    <div>Позволяет объекту изменять поведение при изменении состояния.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/State/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Стратегия (Strategy)</div>
                    <div>Определяет семейство алгоритмов, инкапсулирует их.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Strategy/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Шаблонный метод (Template Method)</div>
                    <div>Определяет скелет алгоритма, делегируя шаги подклассам.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/TemplateMethod/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
                
                <div class="pattern-card">
                    <div class="pattern-name">Посетитель (Visitor)</div>
                    <div>Определяет новую операцию без изменения классов элементов.</div>
                    <div class="pattern-links">
                        
                        <a href="lab2/Visitor/Conceptual/index.php" class="pattern-link" target="_blank">Концепт</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer">
        PHP DESIGN PATTERNS &copy; <?php echo date('Y'); ?> | Терминальный интерфейс v2.0
    </div>
</body>
</html>
