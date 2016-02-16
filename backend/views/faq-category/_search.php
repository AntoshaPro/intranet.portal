<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\FaqCategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faq-category-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>



    <?= $form->field($model, 'faq_category_name') ?>

    <?= $form->field($model, 'faq_category_weight') ?>

    <?= $form->field($model, 'faq_category_is_featured')->dropDownList($model->faqCategoryIsFeaturedList,
        ['promt'=>'Выбрать']) ?>

    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
