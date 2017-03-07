<?php
namespace frontend\controllers;
 
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use backend\models\Category;
use backend\models\Product;
 
class ShopController extends Controller
{
    public $layout = 'shop';

    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'add-in-cart' => ['post'],
                    'set-count' => ['post'],
                    'delete-from-cart' => ['post'],
                ],
            ],
        ]);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {   
        return $this->render('index'); 
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionWater()
    {
        return $this->render('water');
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionProduction()
    {
        return $this->render('production');
    }

    /**
     * .
     *
     * @return mixed
     */
    public function actionDelivery()
    {
        return $this->render('delivery');
    }

    /**
     * .
     *
     * @return mixed
     */
    public function actionPartners()
    {
        return $this->render('partners');
    }

    /**
     * .
     *
     * @return mixed
     */
    public function actionInfo()
    {
        return $this->render('info');
    }

    /**
     * .
     *
     * @return mixed
     */
    public function actionJob()
    {
        return $this->render('job');
    }

    /**
     * .
     *
     * @return mixed
     */
    public function actionContacts()
    {
        return $this->render('contacts');
    }

    public function actionAddInCart()
    {
        $postData = Yii::$app->request->post();
        return json_encode([
            'success' => Yii::$app->cart->add($postData['product_id'], $postData['count']),
            'cartStatus' => Yii::$app->cart->status
        ]);
    }
 
    public function actionSetCount()
    {
        $postData = Yii::$app->request->post();
        return json_encode([
            'success' => Yii::$app->cart->setCount($postData['product_id'], $postData['count']),
            'cartStatus' => Yii::$app->cart->status
        ]);
    }
 
    public function actionDeleteFromCart()
    {
        $postData = Yii::$app->request->post();
        return json_encode([
            'success' => Yii::$app->cart->delete($postData['product_id']),
            'cartStatus' => Yii::$app->cart->status
        ]);
    }
}