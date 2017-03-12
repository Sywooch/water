<?php

namespace frontend\controllers;

use backend\models\Category;
use backend\models\Product;
use Yii;


class ProductController extends AppController
{
	public $layout = 'shop';
	
 	public function actionView(){
 		$id = Yii::$app->request->get('id');
 		$product =Product::findOne($id);
 		if (empty($product))
            throw new \yii\web\HttpException(404, 'The requested Item could not be found.');
 		$hits = Product::find()->where(['hit' => 1])->limit(7)->all();
 		$this->setMeta('E-SHOPPER | ' . $product->name, $product->keywords, $product->description);
 		return $this->render('view', compact('product', 'hits'));
 	}
}