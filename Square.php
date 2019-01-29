<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 29/01/2019
 * Time: 09:00
 */
include_once ('Rectangle.php');
class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
    public function resize($doublepercent)
    {
        parent::resize($doublepercent);
        $this->width += $this->width * $doublepercent/100;
    }
}