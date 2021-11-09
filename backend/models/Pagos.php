<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pagos".
 *
 * @property string $idpagos
 * @property string $nombre_deudor
 * @property string $direccion
 * @property string $telefono
 * @property string $fecha_de_consulta
 * @property string $cantidad_adeudada
 * @property string $tratamiento
 */
class Pagos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pagos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpagos', 'nombre_deudor', 'direccion', 'telefono', 'fecha_de_consulta', 'cantidad_adeudada', 'tratamiento'], 'required'],
            [['idpagos'], 'string', 'max' => 11],
            [['nombre_deudor', 'direccion', 'fecha_de_consulta'], 'string', 'max' => 100],
            [['telefono'], 'string', 'max' => 20],
            [['cantidad_adeudada'], 'string', 'max' => 10000],
            [['tratamiento'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpagos' => 'Idpagos',
            'nombre_deudor' => 'Nombre Deudor',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'fecha_de_consulta' => 'Fecha De Consulta',
            'cantidad_adeudada' => 'Cantidad Adeudada',
            'tratamiento' => 'Tratamiento',
        ];
    }
}
