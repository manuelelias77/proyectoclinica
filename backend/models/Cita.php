<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cita".
 *
 * @property string $idcita
 * @property string $codigo_postal
 * @property string $nombre_completo
 * @property string $direccion
 * @property string $telefono
 * @property string $fecha_de_consulta
 * @property string $problema
 */
class Cita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcita', 'codigo_postal', 'nombre_completo', 'direccion', 'telefono', 'fecha_de_consulta', 'problema'], 'required'],
            [['idcita'], 'string', 'max' => 11],
            [['codigo_postal'], 'string', 'max' => 45],
            [['nombre_completo', 'direccion'], 'string', 'max' => 100],
            [['telefono'], 'string', 'max' => 20],
            [['fecha_de_consulta', 'problema'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcita' => 'Idcita',
            'codigo_postal' => 'Codigo Postal',
            'nombre_completo' => 'Nombre Completo',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'fecha_de_consulta' => 'Fecha De Consulta',
            'problema' => 'Problema',
        ];
    }
}
