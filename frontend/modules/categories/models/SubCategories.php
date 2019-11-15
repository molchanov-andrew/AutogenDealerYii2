<?php

namespace app\modules\categories\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "subCategories".
 *
 * @property int $id
 * @property int $category_id
 * @property string $sub_categories
 */
class SubCategories extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subCategories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [[['category_id', 'sub_categories'], 'required'], [['category_id'], 'integer'], [['sub_categories'], 'string'],];
    }

}