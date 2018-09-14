<?php
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
?>
<?php $this->beginPage(); ?>
<html>
    <head>
        <title>Добрая баня</title>
        <?php $this->head(); ?>
    </head>
    <body>
    <?php $this->beginBody(); ?>
    <?php
        NavBar::begin([
            'brandLabel'    => 'Добрая Баня',
            'brandUrl'      => Yii::$app->homeUrl,
            'options'       => [
                    'class' => 'navbar-default navbar-fixed-top'
                ]
            ]);
        if (Yii::$app->user->isGuest)
            $menu = [

                ['label' => 'регистрация',  'url' => ['/user/join']],
                ['label' => 'Вход',         'url' => ['/user/login']]
        ];
        else
            $menu = [
                ['label' => Yii::$app->user->getIdentity()->name],
                ['label' => 'база данных', 'url' => ['/user/datapage']],
                ['label' => 'выход',         'url' => ['/user/logout']]
                ];
        echo Nav::widget([
            'options'   => ['class' => 'navbar-nav navbar-right'],
            'items'     => $menu
        ]);
        NavBar::end();
    ?>

    <div class="content" style="margin-top: 80px; margin: 90px">
        <?= $content ?>

    </div>
    </body>
    <?php $this->endBody(); ?>
</html>
<?php $this->endPage(); ?>