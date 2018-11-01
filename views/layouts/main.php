<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Competency Pemetaan</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<span class="glyphicon glyphicon-globe" aria-hidden="true"></span> NF COMPUTER',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            //'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => false, //non aktifkan
        'items' => [
            ['label' => '<span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home', 'url' => ['/site/index']],
            ['label' => '<span class="glyphicon glyphicon-book" aria-hidden="true"></span> About', 'url' => ['/site/about']],
            ['label' => '<span class="glyphicon glyphicon-education" aria-hidden="true"></span> Pengajar', 
                'items' =>[
                    ['label' => 'Kategori', 'url' => ['/kategori']],
                    ['label' => 'Pengajar', 'url' => ['/pengajar']],
                ],
            ],
            ['label' => '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Penilaian', 
                'items' =>[
                    ['label' => 'Kriteria', 'url' => ['/kriteria']],
                    ['label' => 'Kriteria Point', 'url' => ['/kriteria-point']],
                    ['label' => 'Penilaian', 'url' => ['/penilaian']],
                    ['label' => 'Detail Penilaian', 'url' => ['/detailpenilaian']],
                ],
            ],
            ['label' => '<span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Gallery', 'url' => ['/site/gallery']],
            ['label' => '<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => '<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
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

<footer class="alert alert-success">
    <div class="container">
        <p class="pull-left">&copy; Sekolah Programmer <?= date('Y') ?></p>

        <p class="pull-right">Develop By : Wahyono | Wahyonohatake[at]gmail.com</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
