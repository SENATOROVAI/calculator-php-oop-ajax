<?php

// 3 кита ООП - инкапсуляция, полиморфизм, наследование. Классы создаются по правилам solid

// класс состоит из свойств и методов
// свойства класса - это данные (переменные)
// методы класса - это функции
class Person {
    public static $name; // public - модификатор доступа, static - обращение от класса к свойству без создания объекта (экземпляра класса)
    public static $age;  // свойства и методы public по умолчанию. 

    public static function setName($name) {
        self::$name = $name;            // self - ключевое слово как ссылка на текщий класс, :: - оператор разрешения области видимости
    }

    public static function setAge($age) {
        self::$age = $age;
    }

    public static function getName() {
        return self::$name;
    }

    public static function getAge() {
        return self::$age;
    }
}

Person::$name = "Aleksei";
echo Person::$name;

Person::setName("Ruslan");
echo Person::getName();