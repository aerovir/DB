<?php use yii\bootstrap\NavBar; ?>
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
        NavBar::end();
    ?>

        <?= $content ?>

    </body>
    <?php $this->endBody(); ?>
</html>
<?php $this->endPage(); ?>