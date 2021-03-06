<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StatusMessage */

$this->title = 'Изменение сообщения Автоответчика: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Автоответчики', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="status-message-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
