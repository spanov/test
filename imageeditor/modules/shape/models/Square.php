<?php
/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 12.08.15
 * Time: 14:19
 */

namespace app\modules\shape\models;


class Square extends Shape {


    public function createShape()
    {
        $draw = $this->getDraw();
        $draw->rectangle($this->x1, $this->y1, $this->x2, $this->y2);
        return $draw;

    }
} 