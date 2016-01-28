<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */

$this->title = "Изменение профиля пользователя:  " . "\"" . $model->first_name . ' ' .
    $model->second_name . ' ' . $model->last_name. "\"";
$this->params['breadcrumbs'][] = ['label' => 'Профиль', 'url' => ['index']];
/*$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];*/
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="profile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
