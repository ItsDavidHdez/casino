<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidades_med_ing".
 *
 * @property string $id_unid_med_ing
 * @property string $nombre_unid_meding
 *
 * @property IngredientesPlatillo[] $ingredientesPlatillos
 */
class UnidadesMedIng extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unidades_med_ing';
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
            'id_unid_med_ing' => 'Id Unid Med Ing',
            'nombre_unid_meding' => 'Nombre Unid Meding',
        ];
    }

    /**
     * Gets query for [[IngredientesPlatillos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientesPlatillos()
    {
        return $this->hasMany(IngredientesPlatillo::className(), ['id_unid_med_ing' => 'id_unid_med_ing']);
    }
}
