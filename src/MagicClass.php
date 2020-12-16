<?php

namespace App;

class MagicClass{
    public $definedProperty = "smth";

    function __construct()
    {
        echo "__construct: Создание экземпляра класса<br/>";
    }

    function __destruct()
    {
        echo "__destruct: Удаление экземпляра класса<br/>";
    }

    function __call($name, $arguments)
    {
        echo " __call: Вызов недоступного метода через экземпляр<br/>";
    }

    static function __callStatic($name, $arguments)
    {
        echo "__callStatic: Вызов недоступного метода через класс<br/>";
    }

    function __get($name)
    {
        echo "__get: Чтение недоступного свойства<br/>";
    }

    function __set($name, $value)
    {
        echo "__set: Изменение недоступного свойства<br/>";
    }

    function __isset($name)
    {
        echo "__isset: Вызов isset() или empty() на недоступном свойстве<br/>";
    }

    function __unset($name)
    {
        echo "__unset: Вызов unset() на недоступном свойстве<br/>";
    }

    function __sleep()
    {
        echo "__sleep: Сериализация объекта<br/>";
        return ["smth"];
    }

    function __wakeup()
    {
        echo "__wakeup: Десериализация объекта<br/>";
    }

    function __serialize(): array
    {
        echo "__serialize: Возврат сериализованной формы объекта<br/>";
        return ["smth"];
    }

    function __unserialize(array $data): void
    {
        echo "__unserialize: Возврат десериализованной формы объекта<br/>";
    }

    function __toString()
    {
        return "__toString: Возврат объекта в строковом представлении<br/>";
    }

    function __invoke()
    {
        echo "__invoke: Выполнение объекта как функцию<br/>";
    }

    function __clone()
    {
        echo "__clone: Клонирование объекта<br/>";
    }
}

?>