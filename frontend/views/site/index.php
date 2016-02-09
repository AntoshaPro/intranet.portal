<?php

/* @var $this yii\web\View */

use \yii\bootstrap\Modal;
use kartik\social\FacebookPlugin;
use \yii\bootstrap\Collapse;
use \yii\bootstrap\Alert;
use yii\helpers\Html;


$this->title = 'НПЦАП';
?>
<div class="site-index">

    <div class="jumbotron">
        <!--<h1>Корпоративный портал НПЦАП</h1>-->
        <?php if(Yii::$app->user->isGuest){
            echo Html::a('Начать работу',['site/login'],
                ['class'=> 'btn btn-lg btn-success']
                );} ?>
    </div>

    <div class="body-content">
        </div>

    </div>
