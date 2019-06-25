<?php

class A {
    public static $element = "isi";
    public static function qui(){
        //echo __CLASS__ .' ';
        echo __METHOD__.' de '.__CLASS__;
        //echo get_called_class();
    }

    public static function test(){
        static::qui(); 
        echo self::$element;
    }
}


class B extends A {
    public static $element = "ESP";
    public static function qui(){
        echo __METHOD__.' de '.__CLASS__;
        //echo get_called_class();
    }


} 
B::test();