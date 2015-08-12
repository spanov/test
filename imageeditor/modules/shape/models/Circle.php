<?php
/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 12.08.15
 * Time: 14:19
 */

namespace app\modules\shape\models;


class Circle extends Shape {


    public function createShape()
    {
        $draw = $this->getDraw();
        $draw->circle($this->originX, $this->originY, $this->endX, $this->endY);
        return $draw;
    }
} 