<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.02.2019
 * Time: 12:02
 */

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