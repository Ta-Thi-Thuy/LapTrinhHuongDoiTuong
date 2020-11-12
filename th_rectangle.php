<?php
class Rectangle1 {
    public $width;
    public  $height;

    public function __construct($width,$height)
    {
        $this->width=$width;
        $this->height=$height;
    }
    public function getArea(){
        return $this->width * $this->height;
    }
    public function getPerimeter (){
        return (($this->width+$this->height)*2);
    }
    public function display(){
        return "Rectangle1 {"."width= ".$this->width.", height= ".$this->height ."}";
    }
}
