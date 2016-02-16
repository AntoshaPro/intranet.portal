<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FaqCategory */

$this->title = 'Изменить категорию ЧАВО: ' . ' ' . $model->faq_category_name;
$this->params['breadcrumbs'][] = ['label' => 'Категории ЧАВО', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->faq_category_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="faq-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
