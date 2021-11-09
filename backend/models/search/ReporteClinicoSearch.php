<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ReporteClinico;

/**
 * ReporteClinicoSearch represents the model behind the search form about `backend\models\ReporteClinico`.
 */
class ReporteClinicoSearch extends ReporteClinico
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idreporte_clinico', 'codigo_postal', 'numero_historial', 'pieza_tratada', 'fecha_tratamiento', 'piezas_a_tratar'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ReporteClinico::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', 'idreporte_clinico', $this->idreporte_clinico])
            ->andFilterWhere(['like', 'codigo_postal', $this->codigo_postal])
            ->andFilterWhere(['like', 'numero_historial', $this->numero_historial])
            ->andFilterWhere(['like', 'pieza_tratada', $this->pieza_tratada])
            ->andFilterWhere(['like', 'fecha_tratamiento', $this->fecha_tratamiento])
            ->andFilterWhere(['like', 'piezas_a_tratar', $this->piezas_a_tratar]);

        return $dataProvider;
    }
}
