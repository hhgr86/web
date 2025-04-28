<?php
namespace MyProject\Classes;

class User {
    protected $name;
    protected $login;
    protected $password;
    protected static $userCount = 0;
    protected static $superUserCount = 0;

    public function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        self::$userCount++;
    }

    public function showInfo() {
        echo "Пользователь: {$this->name}, Логин: {$this->login}<br>";
    }

    public function getInfo() {
        return [
            'name' => $this->name,
            'login' => $this->login,
            'password' => $this->password
        ];
    }

    public static function getUserCount() {
        return self::$userCount;
    }

    public static function getRegularUserCount() {
        return self::$userCount - self::$superUserCount;
    }

    public static function incrementSuperUserCount() {
        self::$superUserCount++;
    }

    public static function getSuperUserCount() {
        return self::$superUserCount;
    }
}