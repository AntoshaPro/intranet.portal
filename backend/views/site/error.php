<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Что то пошло не так во время выполнения твоего запроса.
    </p>
    <p>
        Если считаешь, что это ошибка сервера, свяжись с нами. Благодарности.
    </p>

</div>
