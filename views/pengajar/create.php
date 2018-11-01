<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pengajar */

$this->title = 'Input Pengajar';
$this->params['breadcrumbs'][] = ['label' => 'Pengajar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
