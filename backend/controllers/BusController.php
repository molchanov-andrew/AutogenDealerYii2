<?php

namespace backend\controllers;

use Intervention\Image\ImageManager;
use Yii;
use common\models\Bus;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BusController implements the CRUD actions for Bus model.
 */
class BusController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return ['verbs' => ['class' => VerbFilter::className(), 'actions' => ['delete' => ['POST'],],],];
    }

    /**
     * Lists all Bus models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider(['query' => Bus::find(),]);

        return $this->render('index', ['dataProvider' => $dataProvider,]);
    }

    /**
     * Displays a single Bus model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', ['model' => $this->findModel($id),]);
    }

    /**
     * Creates a new Bus model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Bus();

        if ($model->load(Yii::$app->request->post())) {

            $model->busPicture = UploadedFile::getInstance($model, 'busPicture');
            if ($model->validate()) {

                $model->picture = Yii::$app->storage->saveUploadedFile($model->busPicture); // 15/27/30379e706840f951d22de02458a4788eb55f.jpg

                // create instance
                $manager = new ImageManager(array('driver' => 'imagick'));
                $img = $manager->make($model->getImage());

                // resize image to fixed size
                $img->fit(300, 400)->save($model->getImage());

                if ($model->save($runValidation = false)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
            return ['success' => false, 'errors' => $model->getErrors()];
        }
        return $this->render('create', ['model' => $model,]);
    }

    /**
     * Updates an existing Bus model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $model->busPicture = UploadedFile::getInstance($model, 'busPicture');
            if ($model->validate()) {

                $model->picture = Yii::$app->storage->saveUploadedFile($model->busPicture); // 15/27/30379e706840f951d22de02458a4788eb55f.jpg

                // create instance
                $manager = new ImageManager(array('driver' => 'imagick'));
                $img = $manager->make($model->getImage());

                // resize image to fixed size
                $img->fit(300, 400)->save($model->getImage());

                if ($model->save($runValidation = false)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
            return ['success' => false, 'errors' => $model->getErrors()];
        }
        return $this->render('update', ['model' => $model,]);
    }

    /**
     * Deletes an existing Bus model.
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
     * Finds the Bus model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Bus the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bus::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
