<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\User $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status_id')->dropDownList($model->statusList, [ 'prompt' => 'Выберите статус' ]);?>

    <?= $form->field($model, 'role_id')->dropDownList($model->roleList, [ 'prompt' => 'Выберите роль' ]);?>

    <?= $form->field($model, 'user_type_id')->dropDownList($model->userTypeList, [ 'prompt' => 'Выберите тип' ]);?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Редактировать',
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>