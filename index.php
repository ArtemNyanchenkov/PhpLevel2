<?php

// class goods {	

//     public $artNumber;
//     public $category;
//     public $name;
//     public $price;

//     function __construct($artNum, $categ, $name, $price) {
//             $this->artNumber = $artNum;
//             $this->category = $categ;
//             $this->name = $name;
//             $this->price = $price;							
//     }

//     function getInfo() {
//             $info  = "арт. {$this->artNumber}; ";
//             $info .= "кат. {$this->category}; ";
//             $info .= "наим. {$this->name}; ";
//             $info .= "цена {$this->price} руб.";
//             return $info;
//     }

// }

// $luk = new goods(602000600, "Сцепление", "К-т сцпеления Luk", 27800);
// echo $luk->getInfo();


// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// $a1 = new A();
// $a2 = new A();
// $a1->foo();
// $a2->foo();
// $a1->foo();
// $a2->foo();
//  тк $x это статическая переменная, а статик переменные не исчезают после завершения работы функции 
// поэтому $x  и перезаписывается (Я конечно не уверен но в этом случаем получается, что для класса А выделен одни участок памяти и при создании экземпляра класаа мы просто ссылаемся на этот участок)

// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// class B extends A {
// }
// $a1 = new A();
// $b1 = new B();
// $a1->foo(); 
// $b1->foo(); 
// $a1->foo(); 
// $b1->foo();
// тут, как и обьяняли на уроке у класса 'B' будет как бы свой метод foo , тобишь под него (метод) выделен свой участо памяти

?>