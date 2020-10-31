<?php
interface StrategyInterface {
    function execute($a,$b);
}

class Add implements StrategyInterface {
    function execute($a,$b) {
        return $a + $b;
    }
}

class Sub implements StrategyInterface {
    function execute($a,$b) {
        return $a - $b;
    }
}

class Context {

    public $context;

    function setContext(StrategyInterface $strategy) {
        $this->context = $strategy;
    }

    function doExcute($a,$b) {
        return $this->context->execute($a,$b);
    }
}

$context = new Context();

$context->setContext(new Sub());

$result = $context->doExcute(2,3);

echo $result;
?>