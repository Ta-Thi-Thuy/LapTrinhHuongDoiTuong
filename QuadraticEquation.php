<?php

class QuadraticEquation
{
    public $a;
    public $b;
    public $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function getDiscriminant()
    {
        $delta = (($this->b * $this->b) - 4 * ($this->a * $this->c));
        if ($delta > 0) {
            return "pt co 2 nghiem la:" . " X1= " . ((-$this->b + sqrt($delta) / 2 * $this->a) . " va  X2= " . ((-$this->b - sqrt($delta) / 2 * $this->a)));
        } elseif ($delta == 0) {
            return "pt co nghiem kep la :" . ((-$this->b / 2 * $this->a));
        } else {
            return "The equation has no roots";
        }
    }
}

$a = 2;
$b = 7;
$c = 5;
$pt = new QuadraticEquation($a, $b, $c);
echo $pt->getDiscriminant();
