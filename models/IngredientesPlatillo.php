<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ingredientesplatillo".
 *
 * @property int $id_ingrdte_platillo
 * @property string $id_mp
 * @property string $id_platillo
 * @property float $cantidad_ingrdte
 * @property float $costo_total_ingrdte
 * @property string $id_unid_med_ing
 *
 * @property Materiaprima $mp
 * @property Platillos $platillo
 * @property Unidadesmeding $unidMedIng
 */
class Ingredientesplatillo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingredientesplatillo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mp', 'id_platillo', 'cantidad_ingrdte', 'costo_total_ingrdte', 'id_unid_med_ing'], 'required'],
            [['cantidad_ingrdte', 'costo_total_ingrdte'], 'number'],
            [['id_mp', 'id_unid_med_ing'], 'string', 'max' => 5],
            [['id_platillo'], 'string', 'max' => 8],
            [['id_unid_med_ing'], 'exist', 'skipOnError' => true, 'targetClass' => Unidadesmeding::className(), 'targetAttribute' => ['id_unid_med_ing' => 'id_unid_med_ing']],
            [['id_platillo'], 'exist', 'skipOnError' => true, 'targetClass' => Platillos::className(), 'targetAttribute' => ['id_platillo' => 'id_platillo']],
            [['id_mp'], 'exist', 'skipOnError' => true, 'targetClass' => Materiaprima::className(), 'targetAttribute' => ['id_mp' => 'id_mp']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ingrdte_platillo' => 'Identificador',
            'id_mp' => 'Materia prima',
            'id_platillo' => 'Platillo',
            'cantidad_ingrdte' => 'Cantidad',
            'costo_total_ingrdte' => 'Costo por Unidad',
            'id_unid_med_ing' => 'Unidad de Medida',
        ];
    }

    /**
     * Gets query for [[Mp]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMp()
    {
        return $this->hasOne(Materiaprima::className(), ['id_mp' => 'id_mp']);
    }

    /**
     * Gets query for [[Platillo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlatillo()
    {
        return $this->hasOne(Platillos::className(), ['id_platillo' => 'id_platillo']);
    }

    /**
     * Gets query for [[UnidMedIng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnidMedIng()
    {
        return $this->hasOne(Unidadesmeding::className(), ['id_unid_med_ing' => 'id_unid_med_ing']);
    }
}
