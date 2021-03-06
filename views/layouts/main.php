<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>
<?php $this->beginPage(); ?>
<html>
    <head>
        <title>VideoSchool</title>
        <?php $this->head(); ?>

    </head>
    <body>
    <?php $this->beginBody(); ?>
    <?php
    NavBar::begin([
        'brandLabel' => 'VideoSchool',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top'
        ]
    ]);
    $menu = [
            ['label' => 'Join',  'url' => ['/user/join']],
            ['label' => 'Login', 'url' => ['/user/login']]
    ];
    echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menu
    ]);
    NavBar::end();
     ?>

    <div class="container" style="margin-top: 70px">
    <?= $content ?>
    </div>
    <?php $this->endBody(); ?>

    </body>
</html>
<?php $this->endPage(); ?>
