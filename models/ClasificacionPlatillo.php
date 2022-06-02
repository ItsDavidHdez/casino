<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clasificacion_platillos".
 *
 * @property string $id_clasifplatillo
 * @property string $nombre_clasif
 *
 * @property Platillos[] $platillos
 */
class ClasificacionPlatillo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clasificacion_platillos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clasifplatillo', 'nombre_clasif'], 'required'],
            [['id_clasifplatillo'], 'string', 'max' => 5],
            [['nombre_clasif'], 'string', 'max' => 30],
            [['id_clasifplatillo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_clasifplatillo' => 'Id Clasifplatillo',
            'nombre_clasif' => 'Nombre Clasif',
        ];
    }

    /**
     * Gets query for [[Platillos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlatillos()
    {
        return $this->hasMany(Platillos::className(), ['id_clasifplatilo' => 'id_clasifplatillo']);
    }
}
