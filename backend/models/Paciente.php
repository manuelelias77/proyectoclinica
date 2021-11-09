<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "paciente".
 *
 * @property string $idpaciente
 * @property string $codigo_postal
 * @property string $nombre_completo
 * @property string $numero_historial
 * @property string $fecha_nacimiento
 * @property string $direccion
 * @property string $motivo_consulta
 */
class Paciente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paciente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpaciente', 'codigo_postal', 'nombre_completo', 'numero_historial', 'fecha_nacimiento', 'direccion', 'motivo_consulta'], 'required'],
            [['idpaciente', 'codigo_postal', 'numero_historial'], 'string', 'max' => 11],
            [['nombre_completo', 'direccion', 'motivo_consulta'], 'string', 'max' => 45],
            [['fecha_nacimiento'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpaciente' => 'Idpaciente',
            'codigo_postal' => 'Codigo Postal',
            'nombre_completo' => 'Nombre Completo',
            'numero_historial' => 'Numero Historial',
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'direccion' => 'Direccion',
            'motivo_consulta' => 'Motivo Consulta',
        ];
    }
}
