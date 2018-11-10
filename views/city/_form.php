<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\City */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CountryCode')->widget(Select2::classname(), [
    'data' => $data,
    'options' => ['placeholder' => Yii::t('app','Select a state ...')],
    'pluginOptions' => [
        'allowClear' => true
    ],
]); ?>

    <?= $form->field($model, 'District')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Population')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
