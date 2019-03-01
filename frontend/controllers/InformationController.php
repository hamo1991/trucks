<?php


namespace frontend\controllers;

use yii\web\Controller;
use common\models\Service;
use common\models\Technology;

class InformationController extends Controller
{

    public function actionIndex($slug = '') {

        $services = Service::findOne(['slug' => $slug]);
        $technologies = Technology::findOne(['slug' => $slug]);
        if (!empty($services)) {
            $ser_id = $services->id;
            $service = Service::find()->where(['id' => $ser_id])->asArray()->all();
            return $this->render('index',[
                'content' => $service

            ]);

        }
        elseif (!empty($technologies)) {
            $tech_id = $technologies->id;
            $technology = Technology::find()->where(['id' => $tech_id])->asArray()->all();
            return $this->render('index',[
                'content' => $technology
            ]);
        }
        else {
            return $this->redirect('/');
        }

    }

}