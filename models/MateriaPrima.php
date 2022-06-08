<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materiaprima".
 *
 * @property string $id_mp
 * @property string $nombre_mp
 * @property string $id_uni_medida
 * @property string $id_clasificacion
 * @property string $descripcion
 *
 * @property Clasificacionmateriaprima $clasificacion
 * @property Ingredientesplatillo[] $ingredientesplatillos
 * @property Inventariomp[] $inventariomps
 * @property Unidadesmedida $uniMedida
 */
class Materiaprima extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materiaprima';
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
            [['id_uni_medida'], 'exist', 'skipOnError' => true, 'targetClass' => Unidadesmedida::className(), 'targetAttribute' => ['id_uni_medida' => 'id_uni_medida']],
            [['id_clasificacion'], 'exist', 'skipOnError' => true, 'targetClass' => Clasificacionmateriaprima::className(), 'targetAttribute' => ['id_clasificacion' => 'id_clasificacion']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mp' => 'ID Materia Prima',
            'nombre_mp' => 'Nombre',
            'id_uni_medida' => 'Unidad de Medida',
            'id_clasificacion' => 'Clasificación',
            'descripcion' => 'Descripción',
        ];
    }

    /**
     * Gets query for [[Clasificacion]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClasificacion()
    {
        return $this->hasOne(Clasificacionmateriaprima::className(), ['id_clasificacion' => 'id_clasificacion']);
    }

    /**
     * Gets query for [[Ingredientesplatillos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientesplatillos()
    {
        return $this->hasMany(Ingredientesplatillo::className(), ['id_mp' => 'id_mp']);
    }

    /**
     * Gets query for [[Inventariomps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventariomps()
    {
        return $this->hasMany(Inventariomp::className(), ['id_mp' => 'id_mp']);
    }

    /**
     * Gets query for [[UniMedida]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUniMedida()
    {
        return $this->hasOne(Unidadesmedida::className(), ['id_uni_medida' => 'id_uni_medida']);
    }
}
