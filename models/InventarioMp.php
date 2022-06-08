<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventariomp".
 *
 * @property int $id_in
 * @property string $id_mp
 * @property float $existencia
 * @property int $stock
 * @property int $costo_uni_medida
 * @property float $costo_uni_medida_min
 *
 * @property Materiaprima $mp
 */
class Inventariomp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventariomp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mp', 'existencia', 'stock', 'costo_uni_medida', 'costo_uni_medida_min'], 'required'],
            [['existencia', 'costo_uni_medida_min'], 'number'],
            [['stock', 'costo_uni_medida'], 'integer'],
            [['id_mp'], 'string', 'max' => 5],
            [['id_mp'], 'exist', 'skipOnError' => true, 'targetClass' => Materiaprima::className(), 'targetAttribute' => ['id_mp' => 'id_mp']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_in' => 'Identificador Inventario',
            'id_mp' => 'Identificador Materia Prima',
            'existencia' => 'Existencia',
            'stock' => 'Stock',
            'costo_uni_medida' => 'Costo Unidad de Medida',
            'costo_uni_medida_min' => 'Costo Unidad de Medida Min',
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
}
