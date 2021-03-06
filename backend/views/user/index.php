<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \yii\bootstrap\Collapse;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Добавить пользователя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php   echo Collapse::widget([


        'items' => [
            // equivalent to the above
            [
                'label' => 'Поиск',
                'content' => $this->render('_search', ['model' => $searchModel]) ,
                // open its content by default
                //'contentOptions' => ['class' => 'in']
            ],

        ]
    ]);


    ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'visible'=> false],

            //'id',
            //['attribute'=>'userIdLink', 'format'=>'raw'],
            ['attribute'=>'userLink', 'format'=>'raw'],
            ['attribute'=>'profileLink', 'format'=>'raw'],

            'email:email',
            'roleName',
            'userTypeName',
            'statusName',
            'created_at',

            ['class' => 'yii\grid\ActionColumn'],


            // 'updated_at',


        ],
    ]); ?>

</div>