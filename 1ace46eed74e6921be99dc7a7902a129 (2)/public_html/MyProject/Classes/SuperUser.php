<?php
namespace MyProject\Classes;

class SuperUser extends User {
    private $role;

    public function __construct($name, $login, $password, $role) {
        parent::__construct($name, $login, $password);
        $this->role = $role;
        parent::incrementSuperUserCount();
    }

    public function showInfo() {
        echo "Суперпользователь: {$this->name}, Логин: {$this->login}, Роль: {$this->role}<br>";
    }

    public function getInfo() {
        return [
            'name' => $this->name,
            'login' => $this->login,
            'password' => $this->password,
            'role' => $this->role,
            'type' => 'superuser'
        ];
    }
}