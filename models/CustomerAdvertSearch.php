<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CustomerAdvert;

/**
 * CustomerAdvertSearch represents the model behind the search form about `common\models\CustomerAdvert`.
 */
class CustomerAdvertSearch extends CustomerAdvert
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'customer_id', 'advert_category_id', 'active', 'total_target', 'total_played'], 'integer'],
            [['name', 'filename', 'total_ads', 'active_start_date', 'active_end_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = CustomerAdvert::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'customer_id' => $this->customer_id,
            'advert_category_id' => $this->advert_category_id,
            'active' => $this->active,
            'active_start_date' => $this->active_start_date,
            'active_end_date' => $this->active_end_date,
            'total_target' => $this->total_target,
            'total_played' => $this->total_played,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'filename', $this->filename])
            ->andFilterWhere(['like', 'total_ads', $this->total_ads]);

        return $dataProvider;
    }
}
