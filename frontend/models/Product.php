<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $title
 * @property string $name
 */
class Product extends ActiveRecord
{
	/**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}