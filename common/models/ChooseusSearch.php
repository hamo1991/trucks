<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Chooseus;

/**
 * ChooseusSearch represents the model behind the search form of `common\models\Chooseus`.
 */
class ChooseusSearch extends Chooseus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title','image', 'reasonone', 'reasontwo', 'reasonthree', 'reasonfour'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Chooseus::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'reasonone', $this->reasonone])
            ->andFilterWhere(['like', 'reasontwo', $this->reasontwo])
            ->andFilterWhere(['like', 'reasonthree', $this->reasonthree])
            ->andFilterWhere(['like', 'reasonfour', $this->reasonfour]);

        return $dataProvider;
    }
}
