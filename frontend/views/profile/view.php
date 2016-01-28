<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\PermissionHelpers;

/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */

"Учетная запись "$this->title = $model->user->username ;
$this->params['breadcrumbs'][] = ['label' => 'Профили', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
            if(PermissionHelpers::userMustBeOwner('profile', $model->id)){
                echo Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary'])
            }
        ?>
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
            //'id',
            //'user_id',
            'user.username',
            'first_name:ntext',
            'second_name:ntext',
            'last_name:ntext',
            'birthdate',
            'gender.gender_name',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
