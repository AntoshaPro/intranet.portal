<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\models\PermissionHelpers;
use backend\assets\FontAwesomeAsset;

/**
 * @var \yii\web\View $this
 * @var string $content
 */

AppAsset::register($this);
FontAwesomeAsset::register($this);

?>

<?php $this->beginPage() ?>

    <!DOCTYPE html>

    <html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>

        <meta name="viewport"
              content="width=device-width,
initial-scale=1">

        <?= Html::csrfMetaTags() ?>

        <title><?= Html::encode($this->title) ?></title>

        <?php $this->head() ?>

    </head>

    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">

        <?php

        if (!Yii::$app->user->isGuest){

            $is_admin = PermissionHelpers::requireMinimumRole('SuperUser');

            NavBar::begin([

                'brandLabel' => 'НПЦАП АДМИНКА <i class="fa fa-plug"></i> Админ',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);

        } else {

            NavBar::begin([

                'brandLabel' => 'НПЦАП <i class="fa fa-plug"></i>',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);

        }

        if (Yii::$app->user->isGuest) {

            $menuItemsLogOut[] = ['label' => 'Войти', 'url' => ['site/login']];

        } else {

            $menuItemsLogOut[] = [
                'label' => 'Выйти (' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']
            ];
        }

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItemsLogOut
        ]);

        if (!Yii::$app->user->isGuest &&  $is_admin) {

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [

                    ['label' => 'Пользователи', 'items' => [
                        ['label' => 'Пользователи', 'url' => ['user/index']],
                        ['label' => 'Профили', 'url' => ['profile/index']],
                       // ['label' => 'Something else here', 'url' => ['#']],
                    ]],

                    ['label' => 'Поддержка', 'items' => [
                        ['label' => 'Запрос в поддержку', 'url' => ['content/index']],
                        ['label' => 'Найстройка автоответчика', 'url' => ['status-message/index']],
                        ['label' => 'ЧАВО', 'url' => ['faq/index']],
                        ['label' => 'ЧАВО Категории', 'url' => ['faq-category/index']],
                    ]],

                    ['label' => 'Контроль доступа', 'items' => [
                        ['label' => 'Роли', 'url' => ['role/index']],
                        ['label' => 'Типы пользователей', 'url' => ['user-type/index']],
                        ['label' => 'Статусы', 'url' => ['status/index']],
                    ]],

                    ['label' => 'Контент', 'items' => [
                        ['label' => 'Контент', 'url' => ['content/index']],
                        ['label' => 'Автоответчик', 'url' => ['status-message/index']],
                        ['label' => 'ЧАВО', 'url' => ['faq/index']],
                        ['label' => 'Категории ЧАВО', 'url' => ['faq-category/index']],
                        ['label' => 'Дракон-Тест', 'url' => ['drakon/index']],
                    ]],

                ],

            ]);

        }

        $menuItems = [['label' => 'Главная', 'url' => ['site/index']],
        ];

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems
        ]);

        NavBar::end();

        ?>

        <div class="container">

            <?= Breadcrumbs::widget([

                'links' => isset($this->params['breadcrumbs']) ?
                    $this->params['breadcrumbs'] : [],

            ])?>

            <?= $content ?>

        </div>
    </div>

    <footer class="footer">

        <div class="container">

            <p class="pull-left">&copy; НПЦАП <?= date('Y') ?></p>

            <p class="pull-right"><?= Yii::powered() ?></p>

        </div>

    </footer>

    <?php $this->endBody() ?>

    </body>
    </html>

<?php $this->endPage() ?>