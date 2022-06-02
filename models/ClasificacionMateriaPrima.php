<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clasificacion_meteria_prima".
 *
 * @property string $id_clasificacion
 * @property string $nombre_clasificacion
 * @property string $descripcion
 *
 * @property MateriaPrima[] $materiaPrimas
 */
class ClasificacionMateriaPrima extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clasificacion_meteria_prima';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clasificacion', 'nombre_clasificacion', 'descripcion'], 'required'],
            [['id_clasificacion'], 'string', 'max' => 5],
            [['nombre_clasificacion', 'descripcion'], 'string', 'max' => 50],
            [['id_clasificacion'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_clasificacion' => 'Id Clasificacion',
            'nombre_clasificacion' => 'Nombre Clasificacion',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * Gets query for [[MateriaPrimas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMateriaPrimas()
    {
        return $this->hasMany(MateriaPrima::className(), ['id_clasificacion' => 'id_clasificacion']);
    }
}
