<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materia_prima".
 *
 * @property string $id_mp
 * @property string $nombre_mp
 * @property string $id_uni_medida
 * @property string $id_clasificacion
 * @property string $descripcion
 *
 * @property ClasificacionMeteriaPrima $clasificacion
 * @property IngredientesPlatillo[] $ingredientesPlatillos
 * @property InventarioMp[] $inventarioMps
 * @property UnidadesMedida $uniMedida
 */
class MateriaPrima extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materia_prima';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mp', 'nombre_mp', 'id_uni_medida', 'id_clasificacion', 'descripcion'], 'required'],
            [['id_mp', 'id_clasificacion'], 'string', 'max' => 5],
            [['nombre_mp'], 'string', 'max' => 30],
            [['id_uni_medida'], 'string', 'max' => 4],
            [['descripcion'], 'string', 'max' => 50],
            [['id_mp'], 'unique'],
            [['id_uni_medida'], 'exist', 'skipOnError' => true, 'targetClass' => UnidadesMedida::className(), 'targetAttribute' => ['id_uni_medida' => 'id_uni_medida']],
            [['id_clasificacion'], 'exist', 'skipOnError' => true, 'targetClass' => ClasificacionMeteriaPrima::className(), 'targetAttribute' => ['id_clasificacion' => 'id_clasificacion']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mp' => 'Id Mp',
            'nombre_mp' => 'Nombre Mp',
            'id_uni_medida' => 'Id Uni Medida',
            'id_clasificacion' => 'Id Clasificacion',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * Gets query for [[Clasificacion]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClasificacion()
    {
        return $this->hasOne(ClasificacionMeteriaPrima::className(), ['id_clasificacion' => 'id_clasificacion']);
    }

    /**
     * Gets query for [[IngredientesPlatillos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientesPlatillos()
    {
        return $this->hasMany(IngredientesPlatillo::className(), ['id_mp' => 'id_mp']);
    }

    /**
     * Gets query for [[InventarioMps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarioMps()
    {
        return $this->hasMany(InventarioMp::className(), ['id_mp' => 'id_mp']);
    }

    /**
     * Gets query for [[UniMedida]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUniMedida()
    {
        return $this->hasOne(UnidadesMedida::className(), ['id_uni_medida' => 'id_uni_medida']);
    }
}
