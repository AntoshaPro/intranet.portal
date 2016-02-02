<?php

/* @var $this yii\web\View */

use \yii\bootstrap\Modal;
use kartik\social\FacebookPlugin;
use \yii\bootstrap\Collapse;
use \yii\bootstrap\Alert;
use yii\helpers\Html;

$this->title = 'ФГУП НПЦАП';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Корпоративный портал <br> ФГУП НПЦАП</h1>
        <?php if(Yii::$app->user->isGuest){
            echo Html::a('Начать работу',['site/login'],
                ['class'=> 'btn btn-lg btn-success']
                );} ?>
    </div>

    <?php

    /*echo Collapse::widget([

        'items' => [

            [

                'label' => 'Top Features' ,
                'content' => FacebookPlugin::widget([

                    'type'=>FacebookPlugin::SHARE,
                    'settings' => ['href'=>'http://intranet.portal','width'=>'350']

                ]),

                // open its content by default
                //'contentOptions' => ['class' => 'in']

            ],

            // another group item

            [

                'label' => 'Top Resources',
                'content' => FacebookPlugin::widget([

                    'type'=>FacebookPlugin::SHARE,
                    'settings' => ['href'=>'http://intranet.portal','width'=>'350']

                ]),

                // 'contentOptions' => [],
                // 'options' => [],

            ],

        ]

    ]);



    Modal::begin([

        'header' => '<h2>Latest Comments</h2>',
        'toggleButton' => ['label' => 'comments'],

    ]);

    echo   FacebookPlugin::widget([

        'type'=>FacebookPlugin::COMMENT,
        'settings' => ['href'=>'http://intranet.portal','width'=>'350']

    ]);

    Modal::end();

    */?>


    <?Php
/*
    echo Alert::widget([

        'options' => [
            'class' => 'alert-info',
        ],
        'body' => 'Launch your project like a rocket...',
    ]);*/
    ?>

    <div class="body-content">

        </div>

    </div>
