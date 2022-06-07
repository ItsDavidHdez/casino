<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidadesmeding".
 *
 * @property string $id_unid_med_ing
 * @property string $nombre_unid_meding
 *
 * @property Ingredientesplatillo[] $ingredientesplatillos
 */
class Unidadesmeding extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unidadesmeding';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_unid_med_ing', 'nombre_unid_meding'], 'required'],
            [['id_unid_med_ing'], 'string', 'max' => 5],
            [['nombre_unid_meding'], 'string', 'max' => 15],
            [['id_unid_med_ing'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_unid_med_ing' => 'ID',
            'nombre_unid_meding' => 'Nombre',
        ];
    }

    /**
     * Gets query for [[Ingredientesplatillos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientesplatillos()
    {
        return $this->hasMany(Ingredientesplatillo::className(), ['id_unid_med_ing' => 'id_unid_med_ing']);
    }
}
