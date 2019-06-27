<?php
/**
 * Created by PhpStorm.
 * User: EDZ
 * Date: 2019/6/27
 * Time: 19:22
 */
namespace App\Http\Controllers\designPattern\AbstractFactory\entity;

use App\Http\Controllers\designPattern\AbstractFactory\ShapeInterface;

class Square implements ShapeInterface
{
    public $a;

    public function __construct($a)
    {
        $this->a = $a;
    }
    public function getArea()
    {
        return $this->a * $this->a;
    }
    public function getPerimeter()
    {
        return 4 * $this->a;
    }
}