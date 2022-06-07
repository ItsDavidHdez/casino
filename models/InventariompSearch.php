<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inventariomp;

/**
 * InventariompSearch represents the model behind the search form of `app\models\Inventariomp`.
 */
class InventariompSearch extends Inventariomp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_in', 'stock', 'costo_uni_medida'], 'integer'],
            [['id_mp'], 'safe'],
            [['existencia', 'costo_uni_medida_min'], 'number'],
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
        $query = Inventariomp::find();

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
            'id_in' => $this->id_in,
            'existencia' => $this->existencia,
            'stock' => $this->stock,
            'costo_uni_medida' => $this->costo_uni_medida,
            'costo_uni_medida_min' => $this->costo_uni_medida_min,
        ]);

        $query->andFilterWhere(['like', 'id_mp', $this->id_mp]);

        return $dataProvider;
    }
}
