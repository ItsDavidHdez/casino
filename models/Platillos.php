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
 * @property string|null $image
 *
 * @property Clasificacionplatillos $clasifplatilo
 * @property Ingredientesplatillo[] $ingredientesplatillos
 */
class Platillos extends \yii\db\ActiveRecord
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
            [['image'], 'string', 'max' => 50],
            [['id_platillo'], 'unique'],
            [['id_clasifplatilo'], 'exist', 'skipOnError' => true, 'targetClass' => Clasificacionplatillos::className(), 'targetAttribute' => ['id_clasifplatilo' => 'id_clasifplatillo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_platillo' => 'ID',
            'nombre_platillo' => 'Nombre',
            'descripcion' => 'Descripción',
            'costo_produccion' => 'Costo Producción',
            'precio_venta' => 'Precio Venta',
            'id_clasifplatilo' => 'Clasificación',
            'image' => 'Imagen',
        ];
    }

    /**
     * Gets query for [[Clasifplatilo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClasifplatilo()
    {
        return $this->hasOne(Clasificacionplatillos::className(), ['id_clasifplatillo' => 'id_clasifplatilo']);
    }

    /**
     * Gets query for [[Ingredientesplatillos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientesplatillos()
    {
        return $this->hasMany(Ingredientesplatillo::className(), ['id_platillo' => 'id_platillo']);
    }
}
