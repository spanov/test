<?php

namespace app\modules\shape\controllers;

use Yii;
use yii\web\Controller;
use yii\web\View;
use app\modules\shape\ext\CreateShape;

class DefaultController extends Controller
{

    /**
     * Получить изображение объектов по параметрам
     *
     * @return string
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionIndex()
    {
        $params = Yii::$app->request->post('shapes');

        if (is_null($params)) {
            throw new \yii\web\NotFoundHttpException;
        }

        header("Content-Type: image/png");

        return $this->renderObject($params);

    }

    public function renderObject($shapes)
    {

        $imagick = new \Imagick();
        $imagick->newImage(500, 500,  "#FFFFFF");
        $imagick->setImageFormat("png");

        foreach($shapes as $shape) {
            $shape = CreateShape::generateObject($shape);
            if (!is_null($shape)) {
                $imagick->drawimage($shape);
            }
        }


        return $imagick->getImageBlob();
    }


}
