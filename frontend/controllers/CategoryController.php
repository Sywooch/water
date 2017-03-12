<?php

namespace frontend\controllers;
//use frontend\controllers\AppController;
use backend\models\Category;
use backend\models\Product;
use Yii;
use yii\data\Pagination;

class CategoryController extends AppController
{
    public $layout = 'shop';

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {   
        $hits = Product::find()->where(['hit' => 1])->limit(6)->all();
        $this->setMeta('E-SHOPPER');
        return $this->render('index', compact('hits')); 
    }

    /**
     * Categories page.
     *
     * @return mixed
     */
    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        //$products = Product::find()->where(['category_id' => $id])->all();
        $category = Category::findOne($id);
        if (empty($category))
            throw new \yii\web\HttpException(404, 'The requested Item could not be found.');
        $query = Product::find()->where(['category_id' => $id]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 3, 'forcePageParam' =>false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        $this->setMeta('E-SHOPPER | ' . $category->name, $category->keywords, $category->description);
        return $this->render('view', compact('products', 'pages', 'category'));
    }

    /**
     * Search page.
     *
     * @return mixed
     */
    public function actionSearch()
    {
        $q = Yii::$app->request->get('q');
        //$products = Product::find()->where(['category_id' => $id])->all();
       
        $query = Product::find()->where(['like', 'name', $q]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 3, 'forcePageParam' =>false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        //$this->setMeta('E-SHOPPER | ' . $category->name, $category->keywords, $category->description);
        return $this->render('view', compact('products', 'pages', 'q'));
    }
}