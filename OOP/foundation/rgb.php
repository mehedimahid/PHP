<?php
class RGB
{
    private $color;
    private $red;
    private $green;
    private $blue;
    public function __construct($colorCode = '')
    {
        $this->color = trim($colorCode, "#");
        $this->perseColor();

    }
    public function getColor()
    {
        return $this->color;
    }
    public function getRGBColor()
    {
        return array($this->red, $this->green, $this->blue);
    }
    public function readRGBColor()
    {
        echo ("Red = {$this->red},\n Green ={$this->green},\n Blue = {$this->blue}");
    }
    public function setColor($colorCode)
    {
        $this->color = trim($colorCode, "#");
        $this->perseColor();
    }
    private function perseColor()
    {
        if ($this->color) {
            // $color =sscanf($this->color, '%02x%02x%02x');
            // print_r($color);
            list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
        }else{
          list($this->red, $this->green, $this->blue) = array(0,0,0);

        }
    }
    function getRed(){
      return $this->red;
    }
    function getGreen(){
      return $this->green;
    }
    function getBlue()
{
    return $this->blue;
}

}

$myColor = new RGB("");
// $myColor->readRGBColor();
echo($myColor->getBlue());