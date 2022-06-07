<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clasificacionmateriaprima".
 *
 * @property string $id_clasificacion
 * @property string $nombre_clasificacion
 * @property string $descripcion
 *
 * @property Materiaprima[] $materiaprimas
 */
class Clasificacionmateriaprima extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clasificacionmateriaprima';
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
     * Gets query for [[Materiaprimas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMateriaprimas()
    {
        return $this->hasMany(Materiaprima::className(), ['id_clasificacion' => 'id_clasificacion']);
    }
}
