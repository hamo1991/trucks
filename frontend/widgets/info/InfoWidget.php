<?php
/**
 * Created by PhpStorm.
 * User: Gasparyan
 * Date: 27.02.2019
 * Time: 22:51
 */

namespace frontend\widgets\info;
use common\models\Info;
class InfoWidget extends \yii\bootstrap\Widget
{
    public $action;

    public function run()
    {
        if (!empty($this->action)){
            if ($this->action == 'work_time'){
                $info = Info::find()->where(['type'=>'work_time'])->asArray()->one();
            }elseif ($this->action == 'phone'){
                $info = Info::find()->where(['type'=> 'phone'])->asArray()->one();
            }elseif ($this->action == 'email'){
                $info = Info::find()->where(['type' => 'email'])->asArray()->one();
            }elseif ($this->action == 'address'){
                $info = Info::find()->where(['type' => 'address'])->asArray()->one();
            }

            return $info['content'];
        }
    }
}