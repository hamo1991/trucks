<?php


namespace frontend\controllers;
use yii\web\Controller;
use common\models\Service;

class ServiceController extends Controller{
	public function actionIndex() {
		$services=Service::find()->asArray()->all();
		return $this->render('index',
			['services'=>$services,]);
	}
}