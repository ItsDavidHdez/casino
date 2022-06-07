<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Unidadesmeding;

/**
 * UnidadesmedingSearch represents the model behind the search form of `app\models\Unidadesmeding`.
 */
class UnidadesmedingSearch extends Unidadesmeding
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_unid_med_ing', 'nombre_unid_meding'], 'safe'],
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
        $query = Unidadesmeding::find();

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
        $query->andFilterWhere(['like', 'id_unid_med_ing', $this->id_unid_med_ing])
            ->andFilterWhere(['like', 'nombre_unid_meding', $this->nombre_unid_meding]);

        return $dataProvider;
    }
}
