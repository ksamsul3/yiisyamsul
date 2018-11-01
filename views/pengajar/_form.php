<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

//tambahan
use app\models\Kategori;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Pengajar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">

    <?php 
    $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); 
    $ar_kategori = ArrayHelper::map(Kategori::find()->asArray()->all(),'id','nama');
    ?>
    <div class="col-md-6">
    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?php //  $form->field($model, 'idkategori')->textInput() ?>
    <?= $form->field($model, 'idkategori')->dropDownList($ar_kategori,
        ['prompt'=>'---Pilih Kategori Pengajar---'])
     ?>

    <?= $form->field($model, 'gender')->radioList([ 'L' => 'Laki-laki', 'P' => 'Perempuan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tmp_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 3]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_bergabung')->textInput() ?>

    <?= $form->field($model, 'pendidikan_terakhir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_lulus')->textInput() ?>

    <?= $form->field($model, 'instansi_pendidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fotoFile')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cvFile')->fileInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
    <p class="pull-right">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </p>
    </div>

    <?php ActiveForm::end(); ?>

</div>
