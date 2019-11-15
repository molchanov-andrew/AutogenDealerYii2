<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use app\models\PictureForm\PictureForm;
use yii\web\UploadedFile;

class PictureController extends Controller
{


    public function actionAddPicture()
    {
        $model = new PictureForm();

        if (\Yii::$app->request->post()){
            $model->picture = UploadedFile::getInstance($model,'picture');
            if ($model->upload()){
                Yii::$app->session->setFlash('success', 'New brand picture upload');
                return $this->goHome();
            }
        }
        return $this->render('upload', ['model'=>$model, 'model_brand'=>$model_brand,
            'model_categories'=>$model_categories]);



    }
    

}
