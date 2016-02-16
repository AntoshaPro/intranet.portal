<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TRANSINVDEPT;

/**
 * TRANSINVDEPTSearch represents the model behind the search form about `backend\models\TRANSINVDEPT`.
 */
class TRANSINVDEPTSearch extends TRANSINVDEPT
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DUMMY', 'PREF', 'NUMB', 'DOCDATE', 'WORK_DATE', 'IN_WORK_DATE', 'RESERVDATE', 'DIRNUMB', 'DIRDATE', 'IN_PARTY_CODE', 'VALID_DOCNUMB', 'VALID_DOCDATE', 'RECIPNUMB', 'RECIPDATE', 'GETCONFIRM', 'WAYBLADENUMB', 'COMMENTS', 'BARCODE'], 'safe'],
            [['RN', 'COMPANY', 'CRN', 'JUR_PERS', 'DOCTYPE', 'STATUS', 'IN_STATUS', 'DIRDOC', 'STOPER', 'FACEACC', 'GRAPHPOINT', 'STORE', 'MOL', 'SHEEPVIEW', 'SUBDIV', 'CURRENCY', 'IN_STORE', 'IN_MOL', 'IN_STOPER', 'IN_PARTY', 'VALID_DOCTYPE', 'RECIPDOC', 'FERRYMAN', 'DRIVER', 'CAR', 'ROUTE', 'TRAILER1', 'TRAILER2', 'AGENT'], 'integer'],
            [['CURCOURS', 'CURBASE', 'SUMMWITHNDS', 'SERV_SUMM_NDS', 'FA_CURCOURS', 'FA_CURBASE', 'IN_CURCOURS', 'IN_CURBASE'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
/*    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }*/

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TRANSINVDEPT::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'RN' => $this->RN,
            'COMPANY' => $this->COMPANY,
            'CRN' => $this->CRN,
            'JUR_PERS' => $this->JUR_PERS,
            'DOCTYPE' => $this->DOCTYPE,
            'STATUS' => $this->STATUS,
            'IN_STATUS' => $this->IN_STATUS,
            'DIRDOC' => $this->DIRDOC,
            'STOPER' => $this->STOPER,
            'FACEACC' => $this->FACEACC,
            'GRAPHPOINT' => $this->GRAPHPOINT,
            'STORE' => $this->STORE,
            'MOL' => $this->MOL,
            'SHEEPVIEW' => $this->SHEEPVIEW,
            'SUBDIV' => $this->SUBDIV,
            'CURRENCY' => $this->CURRENCY,
            'CURCOURS' => $this->CURCOURS,
            'CURBASE' => $this->CURBASE,
            'SUMMWITHNDS' => $this->SUMMWITHNDS,
            'SERV_SUMM_NDS' => $this->SERV_SUMM_NDS,
            'FA_CURCOURS' => $this->FA_CURCOURS,
            'FA_CURBASE' => $this->FA_CURBASE,
            'IN_STORE' => $this->IN_STORE,
            'IN_MOL' => $this->IN_MOL,
            'IN_STOPER' => $this->IN_STOPER,
            'IN_PARTY' => $this->IN_PARTY,
            'IN_CURCOURS' => $this->IN_CURCOURS,
            'IN_CURBASE' => $this->IN_CURBASE,
            'VALID_DOCTYPE' => $this->VALID_DOCTYPE,
            'RECIPDOC' => $this->RECIPDOC,
            'FERRYMAN' => $this->FERRYMAN,
            'DRIVER' => $this->DRIVER,
            'CAR' => $this->CAR,
            'ROUTE' => $this->ROUTE,
            'TRAILER1' => $this->TRAILER1,
            'TRAILER2' => $this->TRAILER2,
            'AGENT' => $this->AGENT,
        ]);

        $query->andFilterWhere(['like', 'DUMMY', $this->DUMMY])
            ->andFilterWhere(['like', 'PREF', $this->PREF])
            ->andFilterWhere(['like', 'NUMB', $this->NUMB])
            ->andFilterWhere(['like', 'DOCDATE', $this->DOCDATE])
            ->andFilterWhere(['like', 'WORK_DATE', $this->WORK_DATE])
            ->andFilterWhere(['like', 'IN_WORK_DATE', $this->IN_WORK_DATE])
            ->andFilterWhere(['like', 'RESERVDATE', $this->RESERVDATE])
            ->andFilterWhere(['like', 'DIRNUMB', $this->DIRNUMB])
            ->andFilterWhere(['like', 'DIRDATE', $this->DIRDATE])
            ->andFilterWhere(['like', 'IN_PARTY_CODE', $this->IN_PARTY_CODE])
            ->andFilterWhere(['like', 'VALID_DOCNUMB', $this->VALID_DOCNUMB])
            ->andFilterWhere(['like', 'VALID_DOCDATE', $this->VALID_DOCDATE])
            ->andFilterWhere(['like', 'RECIPNUMB', $this->RECIPNUMB])
            ->andFilterWhere(['like', 'RECIPDATE', $this->RECIPDATE])
            ->andFilterWhere(['like', 'GETCONFIRM', $this->GETCONFIRM])
            ->andFilterWhere(['like', 'WAYBLADENUMB', $this->WAYBLADENUMB])
            ->andFilterWhere(['like', 'COMMENTS', $this->COMMENTS])
            ->andFilterWhere(['like', 'BARCODE', $this->BARCODE]);

        return $dataProvider;
    }
}
