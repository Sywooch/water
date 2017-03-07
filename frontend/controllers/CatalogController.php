<?php

namespace frontend\controllers;

class CatalogController extends \yii\web\Controller
{
    public function actionEquipment()
    {
        return $this->render('equipment');
    }

    public function actionRelatedProducts()
    {
        return $this->render('related-products');
    }

    public function actionWater()
    {
        return $this->render('water');
    }

}
