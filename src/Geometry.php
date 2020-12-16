<?php

namespace Geometry;

class Point{
    public $x, $y;

    function __construct($x = 0, $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function Add($x, $y){
        $this->x += $x;
        $this->y += $y;
    }
}

class Vector{
    public $x, $y;

    function __construct($x = 0, $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function CalcLength() : float{
        return sqrt($this->x ** 2 + $this->y ** 2);
    }

    function IsZeroVector() : bool{
        return $this->x == 0 && $this->y == 0;
    }

    function IsPerpendicularTo($vector) : bool{
        return ($this->x * $vector->x + $this->y * $vector->y) == 0;
    }
}

?>