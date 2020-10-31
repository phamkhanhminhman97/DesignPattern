<?php

class FunitureFactoryProducer {

    function getFactory($type) {
        switch ($type) {
            case 'Plastic':
                return new PlasticFactory();
                break;
            case 'Woody':
                return new WoodyFactory();
            default:
                # code...
                break;
        }
    }
}


abstract class FunitureAbstractFactory
{
    abstract function createChair();
    abstract function createTable();
}

class PlasticFactory extends FunitureAbstractFactory {

    function createChair() {
        return new PlasticChair();
    }

    function createTable() {
        return new PlasticTable();
    }
}

class WoodyFactory extends FunitureAbstractFactory {

     function createChair() {
        return new WoodyChair();
    }

    function createTable() {
        return new WoodyTable();
    }
}

interface Chair {

    function doChair();
}

interface Table {

    function doTable();
}

class PlasticChair implements Chair {

    function doChair() {
        echo 'PlasticChair';
    }
}

class PlasticTable implements Table {
    function doTable() {
        echo 'PlasticTable';
    }
}

class WoodyChair implements Chair {

    function doChair() {
        echo 'WoodyChair';
    }
}

class WoodyTable implements Table {

    function doTable() {
        echo 'WoodyTable';
    }
}

//client code
$funitureProducer = new FunitureFactoryProducer();

$woodyFactory = $funitureProducer->getFactory('Woody');

$woodyChair = $woodyFactory->createChair();

$woodyChair->doChair();

?>

