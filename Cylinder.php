<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 29/01/2019
 * Time: 14:52
 */
include_once 'Circle.php';
include_once "Resizeable.php";

class Cylinder extends Circle implements Resizeable
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }

    public function resize($doublepercent)
    {
        parent::resize($doublepercent);
        $this->height += $this->height * $doublepercent / 100;
    }
}