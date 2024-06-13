<?php
class MathC
{
    static $number;
    public static function fibonacci($n)
    {
        self::$number = $n; //no error
        // $this->$number = $n;//PHP Fatal error:  Uncaught Error: Using $this when not in object context

        echo "Fibonacci series up to {$n}\n";
    }
    public static function welcome()
    {
        echo "Hello World\n";
    }
}
MathC::fibonacci(8);

class NewClass
{
    public function message()
    {
        MathC::welcome();
    }
}
class greeting
{
    public static function welcome()
    {
        echo "Hello Earth!\n";
    }
    public function __construct()
    {
        self::welcome();
    }
}

new greeting();

$nc = new NewClass();
$nc->message();
