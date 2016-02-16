<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Collapse;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\FaqSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Часто задаваемые вопросы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo Collapse::widget([
        'items' => [
            //
            [
                'label' => 'Поиск',
                'content' => $this->render('_search', ['model' => $searchModel]),
            ],
        ]
    ]); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'visible' => false],

            //'id',
            'faq_question',
            'faq_answer',
            ['attribute' => 'faqCategoryName', 'format' => 'raw'],
            'faq_weight',
            ['attribute' => 'faqIsFeaturedName', 'format' => 'raw'],
            // 'faq_weight',
            // 'created_by',
            // 'updated_by',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
