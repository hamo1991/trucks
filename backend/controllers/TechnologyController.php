<?php

namespace backend\controllers;

use Yii;
use common\models\Technology;
use common\models\TechnologySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * TechnologyController implements the CRUD actions for Technology model.
 */
class TechnologyController extends Controller
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
        ];
    }

    /**
     * Lists all Technology models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TechnologySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Technology model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Technology model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Technology();
        $model_image = $model->image;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $image  = UploadedFile::getInstance($model,'image');

            if (!empty($image)) {

                $imgName = Yii::$app->security->generateRandomString() . '.' . $image->extension;

                $filePath = Yii::getAlias('@frontend').'/web/images/uploads/all/';
                if(!is_dir($filePath)){
                    mkdir($filePath);
                }

                $path = $filePath . $model_image;
                if ($image->saveAs($filePath.$imgName)) {
                    $model->image = $imgName;
                    if (file_exists($path) && is_file($path)) {
                        unlink($path);
                    }
                }

            }else{
                $model->image = $model_image;
            }

            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }


        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Technology model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model_image = $model->image;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $image  = UploadedFile::getInstance($model,'image');

            if (!empty($image)) {

                $imgName = Yii::$app->security->generateRandomString() . '.' . $image->extension;

                $filePath = Yii::getAlias('@frontend').'/web/images/uploads/all/';
                if(!is_dir($filePath)){
                    mkdir($filePath);
                }

                $path = $filePath . $model_image;
                if ($image->saveAs($filePath.$imgName)) {
                    $model->image = $imgName;
                    if (file_exists($path) && is_file($path)) {
                        unlink($path);
                    }
                }

            }else{
                $model->image = $model_image;
            }

            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Technology model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $image = $model->image;
        $imgPath = Yii::getAlias('@frontend') . '/web/images/uploads/all/';
        $file = $imgPath . $image;
        if ($image == '') {
            $this->findModel($id)->delete();
        } elseif (file_exists($file)) {
            unlink($file);
            $this->findModel($id)->delete();
        }


        return $this->redirect(['index']);
    }

    /**
     * Finds the Technology model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Technology the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Technology::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
