<?php
// создать класс Myself. добавить классу свойства age; name
//создать функции getAge - должно вернуть строку 'Мне N лет',getName = должно
//вернуть строку "Меня зовут N',getAll - ljk;должно вернуть строку 'Мне N лет, 
//Меня зовут N'. cсоздать экземпляр класса и поочередно
//вывести на экран результат работы всех трех функций. а так же
//вывести на экран все свойства

class Myself
{
 public $age;
 public $name;        
    public function __construct($age, $name)
    {
        $this->age = "мне " .$age;
        $this->name = "меня зовут " . $name;      
        } 
    public function getAge()
    {
        return $this->age;
    }
   //тут ,я хотел сделать чтобы можно было внолсить изменения , с возростом вышло ,
    //а с именем виводит слово name и хоть ты тресни.... мы с Машей ломали голову ,
    //но так и не полняли в чем тут дело....
/*public function setAge($age)         
{
    $this->age = $age;
}
 */ 
public function getName()
{
    return$this->name = name;
}
/*public function setName($name)    
{
    $this->name = name;
}*/
public function getAll()
{
    return $this->getName() . $this->getAge();
}
}
    
$man = new Myself(32, "Dima");
var_dump($man) ;
echo "<br/>";
echo $man->name;
echo "<br/>";
echo $man->age;
echo "<br/>";
echo $man->getAll();
/*$man->setAge(23);
$man->setName("Dimasik");*/
echo "<pre>";
print_r($man);
print $man->getName() . $man->getAge();
echo "<br/>";