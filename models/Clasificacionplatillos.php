<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clasificacionplatillos".
 *
 * @property string $id_clasifplatillo
 * @property string $nombre_clasif
 *
 * @property Platillos[] $platillos
 */
class Clasificacionplatillos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clasificacionplatillos';
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
            'id_clasifplatillo' => 'ID',
            'nombre_clasif' => 'Nombre',
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
