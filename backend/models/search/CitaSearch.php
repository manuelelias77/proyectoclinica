<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cita;

/**
 * CitaSearch represents the model behind the search form about `backend\models\Cita`.
 */
class CitaSearch extends Cita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcita', 'codigo_postal', 'nombre_completo', 'direccion', 'telefono', 'fecha_de_consulta', 'problema'], 'safe'],
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
        $query = Cita::find();

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
        $query->andFilterWhere(['like', 'idcita', $this->idcita])
            ->andFilterWhere(['like', 'codigo_postal', $this->codigo_postal])
            ->andFilterWhere(['like', 'nombre_completo', $this->nombre_completo])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'fecha_de_consulta', $this->fecha_de_consulta])
            ->andFilterWhere(['like', 'problema', $this->problema]);

        return $dataProvider;
    }
}
