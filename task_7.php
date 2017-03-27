<?php

//Task-7 Наследование, инкапсуляция * - создать экземпляр класса B и вызвать
//каждый метод, * посмотреть что получилось, проверить себя.  * затем в дочернем 
//классе переопределить все переменные родительского класса * и вызвать еще раз
//все методы.   * 

class A {

    public $public = 'A public';
    protected $protected = 'A protected';
    private $private = 'A private';
    public $inheritedVariable = 'Inherited Variable';

    public function publicGetPublic () {
        return $this->public;
    }

    protected function protectedGetPublic () {
        return $this->public;
    }

    private function privateGetPublic () {
        return $this->public;
    }

    public function publicGetProtected () {
        return $this->protected;
    }

    protected function protectedGetProtected () {
        return $this->protected;
    }

    public function publicGetPrivate () {
        return $this->private;
    }

    protected function protectedGetPrivate () {
        return $this->private;
    }

    private function privateGetPrivate () {
        return $this->private;
    }

    public function overrideMethod () {
        return 123 . '-' . $this->public;
    }

    public function publicGetProtectedMethod () {
        return $this->protectedGetPublic ();
    }

    public function publicGetPrivateMethod () {
        return $this->privateGetPublic ();
    }

}

class B extends A {

    public $public = 'B public';
    public $newVariable = 'newVariable';

    public function overrideMethod () {
        return 777 . '-' . $this->public;
    }

    public function getAProtectedProperty () {
        return $this->protected;
    }

    public function getAProtectedMethod () {
        return $this->protectedGetPublic ();
    }

    public function getAPrivateProperty () {
        return $this->private;
    }

    public function getAPrivateMethod () {
        return $this->privateGetPublic ();
    }

}

$a = new A();
$b = new B();
echo $a->public; // output 'A public' 
//echo $a->protected; // error вызов вне класса protected свойства
//echo $a->private; // error вызов вне класса private свойства
echo "<br />";
echo $a->publicGetPublic ();//A public
echo "<br />";
echo $a->publicGetProtected ();//A protected
echo "<br />";

echo $a->publicGetPrivate (); //A Private
//echo $a->protectedGetPublic(); не выводит т.к protected
echo "<br />";
echo $a->publicGetProtectedMethod ();//A public
echo "<br />";
echo $a->publicGetPrivateMethod ();//A publicA
echo "<br />";
echo $a->publicGetPrivateMethod ();//A public
echo "<br />";
echo "<br />";
echo $b->overrideMethod ();//777 т.к я переопределил переменную
echo "<br />";
echo $b->getAProtectedProperty ();//A protected

echo "<br />";
echo $b->getAProtectedMethod ();//B public

echo "<br />";
//echo $b->getAPrivateProperty(); //Private
echo "<br />";
//echo $b->getAPrivateMethod(); //Private