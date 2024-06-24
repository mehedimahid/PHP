<?php
class Planet{
//    static function echoName(){
//        echo self::getName();//earli binding
//self use করায় যেখান থেকে কল করা হক না কেন   প্যারেন্ট থেকে রেজাল্ট দেকাবে
//    }
    static function echoName(){
        echo static::getName();//late binding
        //static use koray যেখান থেকে কল করা হবে সেই অনুসারে রেজাল্ট দেখাবে চাইল্ড থেকে
        // কল করলে চাইল্ড আর রেজাল্ট এবং প্যারেন্ট থেকে কল করলে প্যারেন্ট আর রেজাল্ট দেকাবে
    }
    static function getName(){
        return "Planet";
    }
}

class Earth extends Planet{
//    static function echoName(){
//        echo "Earth";
//    }
    static function getName(){
        return "Earth";
    }
}
Earth::echoName();//earli binding ar khetre result "planet" asbe but late binding a result "earth" asbe
planet::echoName();
