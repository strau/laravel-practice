<?php
/**
 * Created by PhpStorm.
 * User: EDZ
 * Date: 2019/6/27
 * Time: 19:22
 */
namespace App\Http\Controllers\designPattern\AbstractFactory\entity;

use App\Http\Controllers\designPattern\AbstractFactory\ColorInterface;

class Blue implements ColorInterface
{
    public function getColor()
    {
        return "blue";
    }
}