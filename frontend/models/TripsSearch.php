<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Trips;

/**
 * TripsSearch represents the model behind the search form of `frontend\models\Trips`.
 */
class TripsSearch extends Trips
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'customer_phone', 'distance', 'vehicle_id', 'status'], 'integer'],
            [['from_date', 'to_date', 'customer_name', 'customer_address', 'pickup_address', 'trip_price', 'created_at', 'updated_at'], 'safe'],
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
        $query = Trips::find();

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
            'from_date' => $this->from_date,
            'to_date' => $this->to_date,
            'customer_phone' => $this->customer_phone,
            'distance' => $this->distance,
            'vehicle_id' => $this->vehicle_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'customer_name', $this->customer_name])
            ->andFilterWhere(['like', 'customer_address', $this->customer_address])
            ->andFilterWhere(['like', 'pickup_address', $this->pickup_address])
            ->andFilterWhere(['like', 'trip_price', $this->trip_price]);

        return $dataProvider;
    }
}
