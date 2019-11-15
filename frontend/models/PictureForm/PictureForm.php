<?php

namespace app\models\PictureForm;

use Yii;
use yii\base\Model;

class PictureForm extends Model

{
    public $picture;

    public function rules()
    {
        return [[['picture'], 'image', 'extensions' => ['jpg', 'png'], 'checkExtensionByMimeType' => true],];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->picture->saveAs('brands/' . $this->picture->baseName . '.' . $this->picture->extension);
            return true;
        } else {
            return false;
        }
    }
}