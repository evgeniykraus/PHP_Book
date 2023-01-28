<?php
require_once 'Test.php';
require_once 'Test1.php';
require_once 'Test2.php';
require_once 'GrandParentClass.php';
require_once 'ParentClass.php';
require_once 'ChildClass.php';

/*
 * Сделайте объект какого-нибудь класса.
 * Примените к объекту функцию get_class и узнайте имя класса, которому принадлежит объект.
 * */

$test1 = new Test1('TEST');
var_dump(get_class($test1));


/*
 * Сделайте два класса: Test1 и Test2.
 * Пусть оба класса имеют свойство name.
 * Создайте некоторое количество объектов этих классов и запишите в массив $arr в произвольном порядке.
 * Переберите этот массив циклом и для каждого объекта выведите значение его свойства name и имя класса, которому принадлежит объект.
 * */

$arr = array();

for ($i = 1; $i < 4; $i++) {
    array_push($arr, new Test1("TEST_1_$i"), new Test2("TEST_2_$i"));
}

foreach ($arr as $value) {
    echo 'Имя: ' . $value->name . '  Класс: ' . get_class($value) . '<br>';
}


/*
 * Сделайте класс Test с методами method1, method2 и method3.
 * С помощью функции get_class_methods получите массив названий методов класса Test.
 * */

var_dump(get_class_methods(new Test()));

/*
 * Создайте объект класса Test, запишите его в переменную $test.
 * С помощью функции get_class_methods получите массив названий методов объекта.
 * Переберите его циклом и в цикле вызовите каждый метод класса, используя объект $test.
 * Переберите этот массив циклом и в этом цикле вызовите каждый метод объекта.
 *
 * */

$test = new Test();

foreach (get_class_methods(new Test()) as $method) {
    var_dump($test->$method());
}


/*
 * Вызовите функцию get_class_vars снаружи класса Test. Выведите массив доступных свойств.
 * */

var_dump(get_class_vars(get_class(new Test())));


/*
 * Сделайте класс Test с публичными свойствами prop1 и prop2,
 * а также с приватными свойствами prop3 и prop4.
 * Создайте объект этого класса. С помощью функции get_object_vars получите массив свойств созданного объекта.
 * */

var_dump(get_object_vars(new Test()));


/*
 * Пусть у вас есть класс Test1 и нет класса Test3.
 * Проверьте, что выведет функция class_exists для класса Test1 и для класса Test3.
 * */

var_dump(class_exists('Test1'));
var_dump(class_exists('Test3'));


/*
 * Пусть GET параметром в адресную строку передается название класса.
 * Проверьте, существует ли такой класс. Выведите соответствующее сообщение на экран.
 * */

//передавал так -> "http://php.book/Task_30/?class=Test1"
var_dump(class_exists($_GET['class']));


/*
 * Сделайте класс Test с методом method1 и без метода method5.
 * Проверьте, что выведет функция method_exists для метода method1 и для метода method5.
 * */

var_dump(method_exists(new Test(), 'method1'));
var_dump(method_exists(new Test(), 'method5'));


/*
 * Пусть GET параметрами в адресную строку передаются название класса и его метод.
 * Проверьте, существует ли такой класс. Если существует - проверьте существование переданного метода.
 * Если и метод существует - создайте объект данного класса, вызовите указанный метод и выведите результат его работы на экран.
 * */
// передавал так -> http://php.book/Task_30/?class=Test1&method=method1

var_dump(class_exists($_GET['class']));
var_dump(method_exists(new Test(), $_GET['method']));


/*
 * Сделайте класс Test со свойством prop1 и без свойства prop5.
 * Проверьте, что выведет функция property_exists для свойства prop1 и для свойства prop5.
 * */

var_dump(property_exists(new Test(), 'prop1'));
var_dump(property_exists(new Test(), 'prop5'));


/*
 * Дан массив со свойствами класса.
 * Дан также класс, имеющий часть из этих свойств.
 * Переберите этот массив циклом, для каждого свойства проверьте, существует ли оно в классе и, если существует,
 * выведите на экран значение этого свойства.
 * */

$arr = ['prop1', 'prop11', 'prop2', 'prop13', 'prop41', 'prop13'];

foreach ($arr as $prop) {
    if (property_exists($test, $prop)) {
        var_dump($test->$prop);
    }
}


/*
 * С помощью функции is_subclass_of проверьте, является ли класс ChildClass потомком GrandParentClass.
 * */

var_dump(is_subclass_of('ChildClass', 'GrandParentClass'));

/*
 * С помощью функции is_subclass_of проверьте, является ли класс ParentClass потомком GrandParentClass.
 * */

var_dump(is_subclass_of('ParentClass', 'GrandParentClass'));


/*
 * С помощью функции is_subclass_of проверьте, является ли класс ChildClass потомком ParentClass.
 * */

var_dump(is_subclass_of('ChildClass', 'ParentClass'));


/*
 * Сделайте класс ChildClass наследующий от ParentClass. Создайте объект класса ChildClass, запишите его в переменную $obj.
 * С помощью функции is_a проверьте, принадлежит ли объект $obj классу ChildClass.
 * С помощью функции is_a проверьте, принадлежит ли объект $obj классу ParentClass.
 * */

$obj = new ChildClass();
var_dump(is_a($obj, 'ChildClass'));
var_dump(is_a($obj, 'ParentClass'));


/*
 * Выведите на экран список всех объявленных классов.
 * */

var_dump(get_declared_classes());