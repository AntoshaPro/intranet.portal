<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\bootstrap\Collapse;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\FaqCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории ЧАВО';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo Collapse::widget([

            'items'=>[
                [
                    'label'=> 'Поиск',
                    'content'=> $this->render('_search',
                        ['model'=> $searchModel]),
                ],
            ]

        ]);
    ?>

    <p>
        <?= Html::a('Создать категорию ЧАВО', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider'=> $dataProvider,
        'filterModel'=> $searchModel,
        'columns'=>[
            'faq_category_name',
            'faq_category_weight',
            ['attribute'=>'faq_category_is_featured',
            'format'=> 'boolean'],
            ['class'=> 'yii\grid\ActionColumn', ],
        ],
    ]);


    /*ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->id), ['view', 'id' => $model->id]);
        },
    ])*/ ?>

</div>
