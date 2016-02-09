<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\models\Profile;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'НПЦАП',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    if (Yii::$app->user->isGuest) {
       // $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Вход', 'url' => ['/site/login']];
    } else {

        $menuItems[] = [
            'label' => 'Выйти (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    if (!Yii::$app->user->isGuest) {

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Новости', 'items' => [
                    ['label' => 'Новости компании', 'url' => ['/role/index']],
                    ['label' => 'Новости отдела', 'url' => ['/user-type/index']],
                    ['label' => 'Вакансии', 'url' => ['/status/index']],
                    ['label' => 'Дни рождения', 'url' => ['/status/index']],
                    ['label' => 'Объявления', 'url' => ['/status/index']],
                    ['label' => 'Скидки', 'url' => ['/status/index']],
                ]],

                ['label' => 'Наше предприятие', 'items' => [
                    ['label' => 'История', 'url' => ['/role/index']],
                    ['label' => 'Руководство', 'url' => ['/user-type/index']],
                    ['label' => 'Структура', 'url' => ['/status/index']],
                    ['label' => 'Социальное обеспечение', 'url' => ['/status/index']],
                    ['label' => 'Обучение', 'url' => ['/status/index']],
                ]],


                ['label' => 'Направление деятельности', 'items' => [
                    ['label' => 'Инерциальные системы управления', 'url' => ['/content/index']],
                    ['label' => 'Космические проекты', 'url' => ['/status-message/index']],
                    ['label' => 'Головные заказчики', 'url' => ['/faq/index']],
                    ['label' => 'Народно-хозяйственная продукция', 'url' => ['/faq-category/index']],
                    ['label' => 'Новые и перспективные разработки', 'url' => ['/faq-category/index']],
                ]],
                ['label' => 'НТС', 'items' => [
                    ['label' => 'Конференции', 'url' => ['/content/index']],
                    ['label' => 'Выставки', 'url' => ['/status-message/index']],
                    ['label' => 'Труды НПЦАП', 'url' => ['/faq/index']],
                ]],
                ['label' => 'Сервисы сотрудника', 'items' => [
                    ['label' => 'Развитие IT', 'url' => ['/asup/index']],
                    ['label' => 'Заявка на отпуск', 'url' => ['/otpusk/index']],
                    ['label' => 'Заявка на командировку', 'url' => ['/komandirovka/index']],
                    ['label' => 'Запрос справки', 'url' => ['/spravki/index']],
                    ['label' => 'Заказ пропуска', 'url' => ['/propusk/index']],
                    ['label' => 'Корреспонденция', 'url' => ['/korrespond/index']],
                    ['label' => 'Полезные документы', 'url' => ['/polesnie-dok/index']],
                    // ['label' => 'Something else here', 'url' => ['#']],
                ]],
                ['label' => 'СЭД', 'items' => [
                    ['label' => 'Распоряжения', 'url' => ['/support/index']],
                    ['label' => 'Приказы', 'url' => ['/faq/index']],
                    ['label' => 'ЧАВО Категории', 'url' => ['/faq-category/index']],
                ]],

                ['label' => 'Поддержка', 'items' => [
                    ['label' => 'Запрос в поддержку', 'url' => ['/support/index']],
                    ['label' => 'ЧАВО', 'url' => ['/faq/index']],
                    ['label' => 'ЧАВО Категории', 'url' => ['/faq-category/index']],
                    ['label' => 'Календарь', 'url' => ['/calendar/index']],
                ]],


            ],

        ]);

    }
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; ФГУП НПЦАП <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
