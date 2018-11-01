<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengarang */

$this->title = 'Update Pengarang: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Pengarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="pengarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
