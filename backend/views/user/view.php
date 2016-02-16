<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\PermissionHelpers;

/* @var $this yii\web\View */
/* @var $model common\models\user */

$this->title = $model->username;
$show_this_nav = PermissionHelpers::requireMinimumRole('SuperUser');

$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1>Атрибуты пользователя: <?= Html::encode($this->title) ?></h1>

    <p>

        <?php if (!Yii::$app->user->isGuest && $show_this_nav) {
            echo Html::a('Редактировать', ['update', 'id' => $model->id],
                ['class' => 'btn btn-primary']);}?>

        <?php if (!Yii::$app->user->isGuest && $show_this_nav) {
            echo Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Серьёзно? Ты хочешь удалить эту запись?'),
                    'method' => 'post',
                ],
            ]);}?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            ['attribute'=>'profileLink', 'format'=>'raw'],

            //'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            'roleName',
            'statusName',
            'userTypeName',
            'created_at',
            'updated_at',
            //'id',
        ],
    ]) ?>

