<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "platillos".
 *
 * @property string $id_platillo
 * @property string $nombre_platillo
 * @property string|null $descripcion
 * @property float|null $costo_produccion
 * @property int $precio_venta
 * @property string $id_clasifplatilo
 *
 * @property ClasificacionPlatillo $clasifplatilo
 * @property IngredientesPlatillo[] $ingredientesPlatillos
 */
class Platillo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'platillos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_platillo', 'nombre_platillo', 'precio_venta', 'id_clasifplatilo'], 'required'],
            [['costo_produccion'], 'number'],
            [['precio_venta'], 'integer'],
            [['id_platillo'], 'string', 'max' => 8],
            [['nombre_platillo'], 'string', 'max' => 60],
            [['descripcion'], 'string', 'max' => 200],
            [['id_clasifplatilo'], 'string', 'max' => 5],
            [['id_platillo'], 'unique'],
            [['id_clasifplatilo'], 'exist', 'skipOnError' => true, 'targetClass' => ClasificacionPlatillo::className(), 'targetAttribute' => ['id_clasifplatilo' => 'id_clasifplatillo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_platillo' => 'Id Platillo',
            'nombre_platillo' => 'Nombre Platillo',
            'descripcion' => 'Descripcion',
            'costo_produccion' => 'Costo Produccion',
            'precio_venta' => 'Precio Venta',
            'id_clasifplatilo' => 'Id Clasifplatilo',
        ];
    }

    /**
     * Gets query for [[Clasifplatilo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClasifplatilo()
    {
        return $this->hasOne(ClasificacionPlatillo::className(), ['id_clasifplatillo' => 'id_clasifplatilo']);
    }

    /**
     * Gets query for [[IngredientesPlatillos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientesPlatillos()
    {
        return $this->hasMany(IngredientesPlatillo::className(), ['id_platillo' => 'id_platillo']);
    }
}
