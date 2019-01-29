<?php

/**
 * Created by PhpStorm.
 * User: huy
 * Date: 29/01/2019
 * Time: 08:58
 */
include_once('Shape.php');
include_once "Resizeable.php";

class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }

    public function resize($doublepercent)
    {
        $this->width += $this->width * $doublepercent / 100;
        $this->height += $this->height * $doublepercent / 100;
    }
}