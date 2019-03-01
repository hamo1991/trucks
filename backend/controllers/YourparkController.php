<?php

namespace backend\controllers;

use Yii;
use common\models\Yourpark;
use common\models\YourparkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * YourparkController implements the CRUD actions for Yourpark model.
 */
class YourparkController extends Controller
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
     * Lists all Yourpark models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new YourparkSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Yourpark model.
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
     * Creates a new Yourpark model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Yourpark();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

	        $bgFile = UploadedFile::getInstance($model, "background");

	        if (!empty($bgFile)) {
		        $imgPath = Yii::getAlias('@frontend') . '/web/images/uploads/yourpark/';
		        $imgName = Yii::$app->security->generateRandomString() . '.' . $bgFile->extension;
		        $model->background = $imgName;
		        $path = $imgPath . $imgName;
		        if ($bgFile->saveAs($path)) {
			        $model->save(['background']);
		        }

	        }




	        $imgFile = UploadedFile::getInstance($model, "img");

	        if (!empty($imgFile)) {
		        $imgPath = Yii::getAlias('@frontend') . '/web/images/uploads/yourpark/';
		        $imgName = Yii::$app->security->generateRandomString() . '.' . $imgFile->extension;
		        $model->img = $imgName;
		        $path = $imgPath . $imgName;
		        if ($imgFile->saveAs($path)) {
			        $model->save(['img']);
		        }

	        }
	        return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Yourpark model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
	    $oldbg= $model->background;
	    $old_image=$model->img;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

	        $bgFile = UploadedFile::getInstance($model, "background");
	        if (!empty($bgFile)) {
		        $imgPath = Yii::getAlias('@frontend') . '/web/images/uploads/yourpark/';
		        $imgName = Yii::$app->security->generateRandomString() . '.' . $bgFile->extension;
		        $model->background = $imgName;
		        $path = $imgPath . $imgName;
		        if ($bgFile->saveAs($path)) {
			        if ($oldbg == '') {
				        $model->save(['background']);
			        } elseif (file_exists($imgPath . $oldbg)) {
				        unlink($imgPath . $oldbg);
				        $model->save(['background']);

			        }

		        }

	        } else {
		        $model->background = $oldbg;
		        $model->save(['background']);
	        }



	        $imgFile = UploadedFile::getInstance($model, "img");


	        if (!empty($imgFile)) {
		        $imgPath = Yii::getAlias('@frontend') . '/web/images/uploads/yourpark/';
		        $imgName = Yii::$app->security->generateRandomString() . '.' . $imgFile->extension;
		        $model->img = $imgName;
		        $path = $imgPath . $imgName;
		        if ($imgFile->saveAs($path)) {
			        if ($old_image == '') {
				        $model->save(['img']);
			        } elseif (file_exists($imgPath . $old_image)) {
				        unlink($imgPath . $old_image);
				        $model->save(['img']);

			        }

		        }
	        } else {
		        $model->img = $old_image;
		        $model->save(['img']);
	        }












	        return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Yourpark model.
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
     * Finds the Yourpark model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Yourpark the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Yourpark::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
