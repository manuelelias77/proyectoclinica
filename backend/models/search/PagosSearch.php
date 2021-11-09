<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pagos;

/**
 * PagosSearch represents the model behind the search form about `backend\models\Pagos`.
 */
class PagosSearch extends Pagos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpagos', 'nombre_deudor', 'direccion', 'telefono', 'fecha_de_consulta', 'cantidad_adeudada', 'tratamiento'], 'safe'],
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
        $query = Pagos::find();

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
        $query->andFilterWhere(['like', 'idpagos', $this->idpagos])
            ->andFilterWhere(['like', 'nombre_deudor', $this->nombre_deudor])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'fecha_de_consulta', $this->fecha_de_consulta])
            ->andFilterWhere(['like', 'cantidad_adeudada', $this->cantidad_adeudada])
            ->andFilterWhere(['like', 'tratamiento', $this->tratamiento]);

        return $dataProvider;
    }
}
