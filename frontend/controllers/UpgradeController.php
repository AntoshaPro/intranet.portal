<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use common\models\RecordHelpers;
use common\models\PermissionHelpers;
use yii\filters\VerbFilter;
use frontend\models\Profile;

class UpgradeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $name = Profile::find()->where(['user_id' => Yii::$app->user->identity->id])->one();

        return $this->render('index',['name' => $name]);
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return PermissionHelpers::requireStatus('Active');
                        }
                    ],

                ],
            ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

}
