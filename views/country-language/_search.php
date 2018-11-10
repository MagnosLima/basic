<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CountryLanguageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="country-language-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CountryCode') ?>

    <?= $form->field($model, 'Language') ?>

    <?= $form->field($model, 'IsOfficial') ?>

    <?= $form->field($model, 'Percentage') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
