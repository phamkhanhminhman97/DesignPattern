<?php
//DECORATER PATTERN
interface IPizza {
    function doPizza();
}

class TomatoPizza implements IPizza {
    function doPizza() {
        $string = "tomato pizza";

        return $string;
    }
}

class ChickenPizza implements IPizza {
    function doPizza() {
        $string = "chicken pizza";

        return $string;
    }
}

abstract class PizzaDecorator implements IPizza {

    protected $pizza;

    public function __construct(IPizza $pizza) {

        $this->pizza = $pizza;
    }   
}

class ChesseDecorator extends PizzaDecorator {
    public function doPizza() {
        $pizza = $this->pizza->doPizza().'cheese';
        return $pizza ;
    }
}

class PepperDecorator extends PizzaDecorator {
    public function doPizza() {
        $pizza = $this->pizza->doPizza().'peper';
        return $pizza ;
    }
}

$tomato = new TomatoPizza();

$chesse = new ChesseDecorator($tomato);

$pepper = new PepperDecorator($chesse);

echo $pepper->doPizza();

?>
