<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "reporte_clinico".
 *
 * @property string $idreporte_clinico
 * @property string $codigo_postal
 * @property string $numero_historial
 * @property string $pieza_tratada
 * @property string $fecha_tratamiento
 * @property string $piezas_a_tratar
 */
class ReporteClinico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reporte_clinico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idreporte_clinico', 'codigo_postal', 'numero_historial', 'pieza_tratada', 'fecha_tratamiento', 'piezas_a_tratar'], 'required'],
            [['idreporte_clinico', 'codigo_postal', 'pieza_tratada', 'fecha_tratamiento', 'piezas_a_tratar'], 'string', 'max' => 45],
            [['numero_historial'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idreporte_clinico' => 'Idreporte Clinico',
            'codigo_postal' => 'Codigo Postal',
            'numero_historial' => 'Numero Historial',
            'pieza_tratada' => 'Pieza Tratada',
            'fecha_tratamiento' => 'Fecha Tratamiento',
            'piezas_a_tratar' => 'Piezas A Tratar',
        ];
    }
}
