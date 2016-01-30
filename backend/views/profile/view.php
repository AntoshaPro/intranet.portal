<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\PermissionHelpers;

/**
 * @var yii\web\View $this
 * @var frontend\models\Profile $model
 */

$this->title = $model->user->username;

$show_this_nav = PermissionHelpers::requireMinimumRole('SuperUser');

$this->params['breadcrumbs'][] = ['label' => 'Профили', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1>Профиль:  <?= Html::encode($this->title) ?></h1>


    <p>

        <?php if (!Yii::$app->user->isGuest && $show_this_nav) {
            echo Html::a('Редактировать', ['update', 'id' => $model->id],
                ['class' => 'btn btn-primary']);}?>


        <?php if (!Yii::$app->user->isGuest && $show_this_nav) {
            echo Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Серёзно? Удалить эту запись?'),
                    'method' => 'post',
                ],
            ]);}?>

    </p>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            ['attribute'=>'userLink', 'format'=>'raw', 'label'=>'Логин пользователя'],
            'first_name',
            'last_name',
            'birthdate',
            'gender.gender_name',
            'created_at',
            'updated_at',
            ['attribute'=>'id','label'=> 'ID пользователя']
        ],
    ])?>

</div>