<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\City;

/**
 * CitySearch represents the model behind the search form of `app\models\City`.
 */
class CitySearch extends City
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Population'], 'integer'],
            [['Name', 'CountryCode', 'District'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = City::find();

        //SELECT * FROM CountryLanguage
        $subConsulta = CountryLanguage::find()
            ->select('CountryLanguage.CountryCode')
            ->groupBy('CountryLanguage.CountryCode')
            ->having('COUNT(*) > :number')->addParams([':number' => 1]);

        $query->where(['City.CountryCode'=>$subConsulta])->orderBy('City.Name ASC');

        // add conditions that should always apply here
        // 
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=> [
                'pageSize' => 50,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'Population' => $this->Population,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'CountryCode', $this->CountryCode])
            ->andFilterWhere(['like', 'District', $this->District]);

        return $dataProvider;
    }

    public static function listOfCountry($CountryCode) {
        /*$query = self::find();
        $query->where(['CountryCode'=>$CountryCode]);
        $query->orderBy('Name ASC');
        return $query->all();*/

        return self::find()
        ->where(['CountryCode'=>$CountryCode])
        ->orderBy('Name ASC')
        ->all();
    }
}
