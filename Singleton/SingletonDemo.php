<?php

include "Singleton.php";

class SingletonDemo  extends Singleton{
    var $singletonobject ;
    function connect () {
        $this->singletonobject = Singleton::getInstance();
    }
}


$singletondemoobject = new SingletonDemo();
var_dump($singletondemoobject->connect());