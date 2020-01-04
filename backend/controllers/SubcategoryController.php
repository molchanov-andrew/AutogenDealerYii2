<?php

namespace backend\controllers;

use Yii;
use common\models\SubCategory;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use Intervention\Image\ImageManager;
use backend\controllers\behaviors\AccessBehavior;

/**
 * SubcategoryController implements the CRUD actions for SubCategory model.
 */
class SubcategoryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            AccessBehavior::class,
        ];
    }

    /**
     * Lists all SubCategory models.
     * @return mixed
     */
    public function actionIndex()
    {

        $dataProvider = new ActiveDataProvider(['query' => SubCategory::find(),]);

        return $this->render('index', ['dataProvider' => $dataProvider,]);
    }

    /**
     * Displays a single SubCategory model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', ['model' => $this->findModel($id),]);
    }

    /**
     * Creates a new SubCategory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SubCategory();

        if ($model->load(Yii::$app->request->post())) {

            $model->subCategoryPicture = UploadedFile::getInstance($model, 'subCategoryPicture');

            if ($model->validate()) {

                $model->sub_category_picture = Yii::$app->storage->saveUploadedFile($model->subCategoryPicture); // 15/27/30379e706840f951d22de02458a4788eb55f.jpg
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
     * Updates an existing SubCategory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $model->subCategoryPicture = UploadedFile::getInstance($model, 'subCategoryPicture');

            if ($model->validate()) {

                $model->sub_category_picture = Yii::$app->storage->saveUploadedFile($model->subCategoryPicture); // 15/27/30379e706840f951d22de02458a4788eb55f.jpg
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
     * Deletes an existing SubCategory model.
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
     * Finds the SubCategory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SubCategory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SubCategory::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
