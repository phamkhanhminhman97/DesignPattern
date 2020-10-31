<?php

// Builder
interface HeroBuilder 
{
    public function createHead($eyeColor, $hairColor);
    public function createBody();
    public function createLowBody();
    public function getHero();
}
// ConcreteBuilder Invoker
class InvokerBuilder implements HeroBuilder {
    protected $hero;
    
    public function __construct() {
        $this->hero = new Invoker(); // ConcreteProduct
    }
    
    public function createHead($eyeColor, $hairColor) {
        $this->hero->head['eyes']['number'] = 4;
        $this->hero->head['eyes']['color'] = $eyeColor;
        $this->hero->head['hair']['color'] = $hairColor;
      
        return $this;
    }
    public function createBody(){} // Giống thằng trên...
    public function createLowBody(){} // Tao cũng giống thằng trên...
    public function getHero() {
        return $this->hero;
    }
}

// ConcreteBuilder Centau
class CentauBuilder implements HeroBuilder
{
    protected $hero;
    
    public function __construct() {
        $this->hero = Invoker();
    }
    
    public function createHead($eyeColor, $hairColor) {
        $this->hero->head['eyes']['number'] = 4;
        $this->hero->head['eyes']['color'] = $eyeColor;
        $this->hero->head['hair']['color'] = $hairColor;
        
        return $this;
    }
    public function createBody(){} // Giống thằng trên...
    public function createLowBody(){} // Tao cũng giống thằng trên...
    public function getHero() {
        return $this->hero;
    }
}

// Product
interface Hero
{
    public function heroShow();
}

// ConcreteProduct
class Invoker implements Hero
{
    public $head = [];
    
    public function heroShow() {
        var_dump($this->head);
      
    }
}

// Director
class HeroBuilderDirector
{
    public $builder;
    
    public function setHeroBuilder(HeroBuilder $builder) {
        $this->builder = $builder;
    }
    
    public function buildHero() {
        return $this->builder->getHero();
    }
}

// Client Code

$heroBuilderDirector = new HeroBuilderDirector();
$invokerBuilder = new InvokerBuilder();
$invokerBuilder->createHead('red', 'yellow');

$heroBuilderDirector->setHeroBuilder($invokerBuilder);
$invoker = $heroBuilderDirector->buildHero();
$invoker->heroShow();

?>