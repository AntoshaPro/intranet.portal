<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Faq */

$this->title = 'ЧАсто задаваемые ВОпросы' . $model->faq_question;
$this->params['breadcrumbs'][] = ['label' => 'ЧАсто задаваемые ВОпросы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'faq_question',
            'faq_answer',
            'faqCategory.faq_category_name',
            'faq_weight',
            ['attribute'=>'faq_is_featured','format'=>'boolean'],
            ['attribute'=>'createdByUsername','format'=>'boolean'],
            ['attribute'=>'updatedByUsername','format'=>'boolean'],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
