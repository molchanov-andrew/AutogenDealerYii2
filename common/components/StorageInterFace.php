<?php
namespace common\components;

use  yii\web\UploadedFile;

interface StorageInterFace
{
    public function saveUploadedFile(UploadedFile $file);

    public function getUploadedFile(string $filename);
}