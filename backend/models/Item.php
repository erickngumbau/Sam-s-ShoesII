<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $price
 * @property string|null $url
 * @property string|null $date
 * @property string|null $gender
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['gender'], 'string'],
            [['name', 'price', 'url'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'url' => 'Url',
            'date' => 'Date',
            'gender' => 'Gender',
        ];
    }
}
