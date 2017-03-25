<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Publicidad;

/**
 * PublicidadSearch represents the model behind the search form about `frontend\models\Publicidad`.
 */
class PublicidadSearch extends Publicidad
{
    public function rules()
    {
        return [
            [['publicidadID', 'usuarioID', 'status_publi'], 'integer'],
            [['Titulo', 'Fecha_Inicial', 'Fecha_Final', 'Duracion', 'Enlace', 'Imagen_Publicitaria'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Publicidad::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'publicidadID' => $this->publicidadID,
            'usuarioID' => $this->usuarioID,
            'Fecha_Inicial' => $this->Fecha_Inicial,
            'Fecha_Final' => $this->Fecha_Final,
            'Duracion' => $this->Duracion,
            'status_publi' => $this->status_publi,
        ]);

        $query->andFilterWhere(['like', 'Titulo', $this->Titulo])
            ->andFilterWhere(['like', 'Enlace', $this->Enlace])
            ->andFilterWhere(['like', 'Imagen_Publicitaria', $this->Imagen_Publicitaria]);

        return $dataProvider;
    }
}
