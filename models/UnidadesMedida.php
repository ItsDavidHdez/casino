<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidadesmedida".
 *
 * @property string $id_uni_medida
 * @property string $nombre_uni_medida
 * @property string $abreviatura
 * @property string $descripcion
 *
 * @property Materiaprima[] $materiaprimas
 */
class Unidadesmedida extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unidadesmedida';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_uni_medida', 'nombre_uni_medida', 'abreviatura', 'descripcion'], 'required'],
            [['id_uni_medida'], 'string', 'max' => 4],
            [['nombre_uni_medida'], 'string', 'max' => 10],
            [['abreviatura'], 'string', 'max' => 20],
            [['descripcion'], 'string', 'max' => 50],
            [['id_uni_medida'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_uni_medida' => 'Id Uni Medida',
            'nombre_uni_medida' => 'Nombre Uni Medida',
            'abreviatura' => 'Abreviatura',
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
        return $this->hasMany(Materiaprima::className(), ['id_uni_medida' => 'id_uni_medida']);
    }
}
