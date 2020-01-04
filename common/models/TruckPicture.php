<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "truck_picture".
 *
 * @property int $id
 * @property string $truck_id
 * @property string $picture
 */
class TruckPicture extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'truck_picture';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['truck_id', 'picture'], 'required'],
            [['truck_id'], 'string', 'max' => 45],
            [['picture'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'truck_id' => 'Truck ID',
            'picture' => 'Picture',
        ];
    }
}
