<?php
trait WorkWithDb {
    public function update(){echo "UPDATE row";}
    public function delete(){echo "DELETE row";}
    public function select(){echo "SELECT row";}
}


class Singleton
{
    use WorkWithDb;
    private static $instance;  // Экземпляр объекта

// Защищаем от создания через new Singleton
    private function __construct() { /* ... @return Singleton */
    }

// Защищаем от создания через клонирование
    private function __clone() { /* ... @return Singleton */
    }

// Защищаем от создания через unserialize
    private function __wakeup() { /* ... @return Singleton */
    }

// Возвращает единственный экземпляр класса. @return Singleton
    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function doAction() {

    }
}

$s = Singleton::getInstance();
$s->select();