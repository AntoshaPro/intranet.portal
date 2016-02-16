<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Faq */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faq-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'faq_question')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'faq_answer')->textarea(['maxlength'=>1055, 'rows'=> 10]) ?>

    <?= $form->field($model, 'faq_category_id')->dropDownList($model->faqCategoryList, ['prompt'=>'Выберите']) ?>

    <?= $form->field($model, 'faq_is_featured')->dropDownList($model->faqIsFeaturedList, ['prompt'=>'Выберите']) ?>

    <?= $form->field($model, 'faq_weight')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
