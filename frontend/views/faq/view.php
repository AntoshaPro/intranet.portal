<?php
use yii\helpers\Html;

$this->title = 'Вопрос: ' . $model->faq_question;

$this->params['breadcrumbs'][] = ['label'=> 'Помощь', 'url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

</br>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <h1><?= $model->faq_question;?></h1>
        </h3>
    </div>
    <?= '<div class="panel-body"><h3>' . $model->faq_answer .'</h3></div>';?>
</div>