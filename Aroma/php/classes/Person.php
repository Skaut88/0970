<?php

class Person {
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;
  private $grandmothermom;
  private $grandfathermom;
  private $grandmotherdad;
  private $grandfatherdad;

  function __construct($name, $lastname, $age, $mother=null, $father=null, $grandmothermom=null, $grandfathermom=null, $grandmotherdad=null, $grandfatherdad=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;

    $this->grandmothermom = $grandmothermom;
    $this->grandfathermom = $grandfathermom;

    $this->grandmotherdad = $grandmotherdad;
    $this->grandfatherdad = $grandfatherdad;

    $this->hp = 100;
  }
  function sayHi($name) 
  {
    return "Hi, $name, i'm " . $this->name;
  }
  function setHp($hp)
  {
    if ($this->hp + $hp > 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName()
  {
    return $this->name;
  }
  function getLastname()
  {
    return $this->lastname;
  }
  function getAge()
  {
    return $this->age;
  }
  function getMother()
  {
    return $this->mother;
  }
  function getGrandmothermom()
  {
    return $this->grandmothermom;
  }
  function getGrandfathermom()
  {
    return$this->grandfathermom;
  }
  function getGrandmotherdad()
  {
    return $this->grandmotherdad;
  }
  function getGrandfatherdad()
  {
    return$this->grandfatherdad;
  }
  function getFather()
  {
    return $this->father;
  }
  function getInfo()
  {
    return "<h3>Информация о пользователе: </h3><br>" . "Имя: " . $this->getName() . "<br>Фамилия: " . $this->getLastname() . "<br>Возраст: " . $this->getAge() . "<br>Мать: " . $this->getMother()->getName() . "<br>Отец: " . $this->getFather()->getName() . "<br>Бабушка по линии мамы : " . $this->getGrandfathermom()->getName()  . "<br>Дедушка по линии мамы: " . $this->getGrandmothermom()->getName() . "<br>Бабушка по линии папы: " . $this->getGrandmotherdad()->getName() . "<br>Дедушка по линии папы: " . $this->getGrandfatherdad()->getName();
    //Дальше фамилии и имена всех родственников
  }
}

//Здоровье максимум 100%

$ivan = new Person("Иван", "Иванов", 72);
$zina = new Person("Зина", "Иванова", 70);
$yakov = new Person("Яков", "Петров", 83);
$praskovia = new Person("Прасковья", "Петрова", 81);


$igor = new Person("Игорь", "Петров", 41, $praskovia, $yakov);
$ksenia = new Person("Ксения", "Петрова", 35, $zina, $ivan);
$kuzya = new Person("Кузя", "Петров", 8, $ksenia, $igor, $zina, $ivan, $praskovia, $yakov);


echo $kuzya->getInfo();


// echo $kuzya->getMother()->getName();


// $medkit = 50;
// $ivan->setHp(-30); //упал
// echo $ivan->getHp() . "<br>";
// $ivan->setHp($medkit); //Нашёл аптечку
// echo $ivan->hp . "<br>";



// echo $alex->sayHi($igor->name) . <br>;
// echo $igor->sayHi($alex->name);