<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property int $id
 * @property string $brand_name
 * @property string $country
 * @property string $logo
 * @property file $logoPictureFile
 */
class Brand extends \yii\db\ActiveRecord
{
    public $logoPictureFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_name', 'country'], 'required'],
            [['brand_name', 'country'], 'string', 'max' => 20],
            [['logo'], 'string', 'max' => 255],
        ];
    }

    public function getImage()
    {
        return Yii::$app->storage->getUploadedFile($this->logo);
    }
}
