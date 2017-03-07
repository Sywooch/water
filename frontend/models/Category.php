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
class Category extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['title'], 'required'],
           //[['title', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'name' => Yii::t('app', 'Name'),
        ];
    }

    public function getProducts(){
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}
