<?php

namespace backend\controllers;

use Yii;
use common\models\Service;
use backend\models\ServiceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * ServiceController implements the CRUD actions for Service model.
 */
class ServiceController extends Controller
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
     * Lists all Service models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ServiceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Service model.
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
     * Creates a new Service model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Service();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $imgFile = UploadedFile::getInstance($model, "image");
            if (!empty($imgFile)) {
                $imgPath = Yii::getAlias('@frontend') . '/web/images/uploads/service/';
                $imgName = Yii::$app->security->generateRandomString() . '.' . $imgFile->extension;
                $model->image = $imgName;
                $path = $imgPath . $imgName;
                if ($imgFile->saveAs($path)) {
                    $model->save(['image']);
                }

            }

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,

        ]);
    }

    /**
     * Updates an existing Service model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        $old_image = $model->image;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $imgFile = UploadedFile::getInstance($model, "image");

            if (!empty($imgFile)) {
                $imgPath = Yii::getAlias('@frontend') . '/web/images/uploads/service/';
                $imgName = Yii::$app->security->generateRandomString() . '.' . $imgFile->extension;
                $model->image = $imgName;
                $path = $imgPath . $imgName;
                if ($imgFile->saveAs($path)) {
                    if ($old_image == '') {
                        $model->save(['image']);
                    } elseif (file_exists($imgPath . $old_image)) {
                        unlink($imgPath . $old_image);
                        $model->save(['image']);

                    }

                }

            } else {
                $model->image = $old_image;
                $model->save(['image']);
            }


            return $this->redirect(['/service']);
        }

        return $this->render('update', [
            'model' => $model,

        ]);
    }

    /**
     * Deletes an existing Service model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {

        $model = $this->findModel($id);
        $image = $model->image;
        $imgPath = Yii::getAlias('@frontend') . '/web/images/uploads/service/';
        $file = $imgPath . $image;
        if ($image == '') {
            $this->findModel($id)->delete();
        }elseif (file_exists($file)) {
            unlink($file);
            $this->findModel($id)->delete();
        }


        return $this->redirect(['/service']);
    }

    /**
     * Finds the Service model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Service the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Service::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
