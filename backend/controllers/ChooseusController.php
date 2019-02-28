<?php

namespace backend\controllers;

use Yii;
use common\models\Chooseus;
use common\models\ChooseusSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ChooseusController implements the CRUD actions for Chooseus model.
 */
class ChooseusController extends Controller
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
     * Lists all Chooseus models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChooseusSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Chooseus model.
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
     * Creates a new Chooseus model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Chooseus();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
	        if ($model->load(Yii::$app->request->post()) && $model->save()) {
		        $imgFile=UploadedFile::getInstance($model,'image');
		        if (!empty($imgFile)){
			        $filePath = Yii::getAlias('@frontend') . '/web/images/uploads/chuseus/';
			        $imgaName = Yii::$app->security->generateRandomString() . '.' . $imgFile->extension;
			        $path=$filePath.$imgaName;
			        if ($imgFile->saveAs($path)){
				        $model->image = $imgaName;
				        $model->save(['image']);
			        }
		        }
		        return $this->redirect(['view', 'id' => $model->id]);
	        }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Chooseus model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
	    $old_image = $model->image;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
	        $imgFile=UploadedFile::getInstance($model,'image');
	        if (!empty($imgFile)){
		        $filePath = Yii::getAlias('@frontend') . '/web/images/uploads/chuseus/';
		        $imgaName = Yii::$app->security->generateRandomString() . '.' . $imgFile->extension;
		        $path=$filePath.$imgaName;

		        if ($imgFile->saveAs($path)){
			        if (file_exists($old_image)){
				        unset($old_image);
			        } else{
				        $model->image = $imgaName;
				        $model->save(['image']);
			        }
		        }
	        }else{
		        $model->image = $old_image;
		        $model->save(['image']);
	        }



            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,

        ]);
    }

    /**
     * Deletes an existing Chooseus model.
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
     * Finds the Chooseus model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Chooseus the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Chooseus::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
