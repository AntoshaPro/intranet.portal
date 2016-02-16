<?php

use yii\helpers\Html;
use common\models\PermissionHelpers;
use backend\controllers\SiteController;


/**
 * @var yii\web\View $this
 */

$this->title = 'Админка НПЦАП';

/*if (!Yii::$app->user->isGuest) {

    $is_admin = PermissionHelpers::requireMinimumRole('Admin');

}*/

?>

<div class="site-index">

    <div class="jumbotron">

        <h1>Здравствуй </h1>

        <p class="lead">

            Теперь можешь производить действия с записями пользователей.

        </p>

        <p>

            <?php

/*            if (!Yii::$app->user->isGuest && $is_admin) {

                echo Html::a('Редактировать пользователей', ['user/index'], ['class' => 'btn btn-
                ++++lg btn-success']);

            }*/

            if(Yii::$app->user->isGuest){
                echo Html::a('Смореть', ['site/index'], ['class'=> 'btn btn-success']);
            }

            ?>

        </p>

    </div>

    <div class="body-content">
    </div>
</div>