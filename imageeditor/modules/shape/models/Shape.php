<?php

namespace app\modules\shape\models;

/**
 * Class Shape
 * @package app\modules\shape\models
 *
 */
abstract class Shape {

    protected $attr = [];

    public function __construct($params) {
        $this->setParams($params);
    }

    public function setParams($params) {
        foreach ($params as $name => $value) {
            $this->attr[$name] = $value;
        }

        return $this;
    }

    public function __set($name, $value)
    {
        $this->attr[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->attr)) {
            return $this->attr[$name];
        }
        return null;
    }

    public function __isset($name)
    {
        return isset($this->attr[$name]);
    }

    abstract public function createShape();



    public function getDraw()
    {

        $draw = new \ImagickDraw();

        $strokeColor = new \ImagickPixel($this->strokeColor);
        $fillColor = new \ImagickPixel($this->fillColor);

        $draw->setStrokeOpacity(1);
        $draw->setStrokeColor($strokeColor);
        $draw->setFillColor($fillColor);

        $draw->setStrokeWidth(2);

        return $draw;
    }





}