<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//tambahan
use app\models\Kriteria;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Kriteriapoint */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kriteriapoint-form">

    <?php 
    $form = ActiveForm::begin(); 
    $ar_kriteria = ArrayHelper::map(Kriteria::find()->asArray()->all(),'id','nama');
    ?>
    <?php //  $form->field($model, 'idkriteria')->textInput() ?>
    <?= $form->field($model, 'idkriteria')->dropDownList($ar_kriteria,
    	['prompt'=>'---Pilih Kriteria---'])
     ?>
    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'point')->textInput() ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
