<?php

namespace backend\controllers;

use common\models\TruckPicture;
use Intervention\Image\ImageManager;
use Yii;
use common\models\Truck;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TrackController implements the CRUD actions for Truck model.
 */
class TruckController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return ['verbs' => ['class' => VerbFilter::className(), 'actions' => ['delete' => ['POST'],],],];
    }

    /**
     * Lists all Truck models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider(['query' => Truck::find(),]);

        return $this->render('index', ['dataProvider' => $dataProvider,]);
    }

    /**
     * Displays a single Truck model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', ['model' => $this->findModel($id),]);
    }

    /**
     * Creates a new Truck model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Truck();

        if ($model->load(Yii::$app->request->post())) {

            $model->mainTruckImage = UploadedFile::getInstance($model, 'mainTruckImage');

            if ($model->validate()) {

                if ($model->save($runValidation = false)) {
                    $model->picture = Yii::$app->storage->saveUploadedFile($model->mainTruckImage); // 15/27/30379e706840f951d22de02458a4788eb55f.jpg
                    Yii::$app->resizeimage->resizePicture($width = 300, $height = 400, $model);
                    $model->save($runValidation = false);
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
            return ['success' => false, 'errors' => $model->getErrors()];
        }
        return $this->render('create', ['model' => $model,]);
    }

    /**
     * Updates an existing Truck model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $model->mainTruckImage = UploadedFile::getInstance($model, 'mainTruckImage');
            if ($model->validate()) {

                ($model->mainTruckImage) ? $model->picture = Yii::$app->storage->saveUploadedFile($model->mainTruckImage) : null; // 15/27/30379e706840f951d22de02458a4788eb55f.jpg

                Yii::$app->resizeimage->resizePicture($width = 300, $height = 400, $model);

                if ($model->save($runValidation = false)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
            return ['success' => false, 'errors' => $model->getErrors()];
        }

        return $this->render('update', ['model' => $model,]);
    }

    /**
     * Deletes an existing Truck model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Truck model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Truck the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Truck::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
