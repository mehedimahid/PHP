<?php
class Student
{
    private $name;
    private $class;
    private $age;
    public function __construct($name = '', $age = '', $class = '')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }
    // public function setName($name)
    // {
    //     $this->name = $name;
    // }
    // public function getName()
    // {
    //     return $this->name;
    // }
    // public function getAge()
    // {
    //     return $this->age;
    // }
    // public function setAge($age)
    // {
    //     $this->age = $age;
    // }
    // public function getClass()
    // {
    //     return $this->class;
    // }
    // public function setclass($class)
    // {
    //     $this->class = $class;
    // }
    
    //// use __set __get Magic Method 
      function __set($prop, $value){
        $this->$prop = $value;
      }
      function __get($prop){
        return $this->$prop;
      }
}
$s = new Student("Kamal",16, 10);
$s->name = "Kamal Ahmed";
echo $s->age;
echo $s->name;

// echo $s->getClass();