<?php
// Переименовываем интерфейс, чтобы избежать конфликта с встроенным Iterator
interface MyIterator {
    public function hasNext(): bool;
    public function next(): ?string;
}

// Конкретный итератор
class ConcreteIterator implements MyIterator {
    private $items = [];
    private $position = 0;

    public function __construct(array $items) {
        $this->items = $items;
    }

    public function hasNext(): bool {
        return isset($this->items[$this->position]);
    }

    public function next(): ?string {
        return $this->items[$this->position++] ?? null;
    }
}

// Коллекция
class Collection {
    private $items = [];

    public function addItem(string $item): void {
        $this->items[] = $item;
    }

    public function getIterator(): MyIterator {
        return new ConcreteIterator($this->items);
    }
}

// Начало HTML-документа
echo '<!DOCTYPE html>
<html>
<head>
    <title>Паттерн Итератор</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .item { margin: 5px 0; padding: 5px; background: #f0f0f0; }
    </style>
</head>
<body>
    <h2>Пример работы итератора:</h2>
    <div class="items">';

// Пример использования
$collection = new Collection();
$collection->addItem("Элемент 1");
$collection->addItem("Элемент 2");
$collection->addItem("Элемент 3");

$iterator = $collection->getIterator();
while ($iterator->hasNext()) {
    $item = $iterator->next();
    if ($item !== null) {
        echo '<div class="item">' . htmlspecialchars($item) . '</div>';
    }
}

// Завершение HTML-документа
echo '</div>
</body>
</html>';
?>