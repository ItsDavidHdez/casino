<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ingredientesplatillo;

/**
 * IngredientesplatilloSearch represents the model behind the search form of `app\models\Ingredientesplatillo`.
 */
class IngredientesplatilloSearch extends Ingredientesplatillo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ingrdte_platillo'], 'integer'],
            [['id_mp', 'id_platillo', 'id_unid_med_ing'], 'safe'],
            [['cantidad_ingrdte', 'costo_total_ingrdte'], 'number'],
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
        $query = Ingredientesplatillo::find();

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
            'id_ingrdte_platillo' => $this->id_ingrdte_platillo,
            'cantidad_ingrdte' => $this->cantidad_ingrdte,
            'costo_total_ingrdte' => $this->costo_total_ingrdte,
        ]);

        $query->andFilterWhere(['like', 'id_mp', $this->id_mp])
            ->andFilterWhere(['like', 'id_platillo', $this->id_platillo])
            ->andFilterWhere(['like', 'id_unid_med_ing', $this->id_unid_med_ing]);

        return $dataProvider;
    }
}
