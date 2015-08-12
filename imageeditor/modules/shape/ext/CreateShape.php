<?php
/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 12.08.15
 * Time: 14:47
 */

namespace app\modules\shape\ext;


use app\modules\shape\models\Circle;
use app\modules\shape\models\Square;

class CreateShape {


    static public function generateObject($shape)
    {
        if (!isset($shape['type'])) {
            return null;
        }

        // Если делать совсем независимой системой, то можно пойти так, псевдокод
//        if (class_exists(ucfirst($shape['type']))) {
//            $shape = new $shape['type']($shape['params]);
//             return $shape->createShape();
//        }

        // Либо
        switch($shape['type']) {
            case "circle":
                $shape = new Circle($shape['params']);
                return $shape->createShape();
            case "square":
                $shape = new Square($shape['params']);
                return $shape->createShape();
            default:
        }

        return null;
    }
} 