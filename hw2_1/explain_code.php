<?php

class A0
{
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}

$a1 = new A0();
$a2 = new A0();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo(); //т.к. $x static она общая для всех объектов класса и будет увеличиваться и выводиться при каждом вызове foo()
// соответственно вывод будет 1 2 3 4

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); // 1
$b1->foo(); // 1
$a1->foo(); // 2
$b1->foo(); // 2
// т.к. новый класс B() содержит свою static $x, вызов метода foo() обектов этих классов изменяет свою переменную
// вывод будет 1122

class A7 {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B7 extends A7 {
}
$a1 = new A7;
$b1 = new B7;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
// в этих классах нет конструктора и не требуется передавать значения при создании объекта класса, скобки можно опускать
//  new A() аналогично new A, соответственно вывод не измениться