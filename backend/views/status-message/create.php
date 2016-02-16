<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StatusMessage */

$this->title = 'Создать Автоматическое событие';
$this->params['breadcrumbs'][] = ['label' => 'Автоответчики', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-message-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
