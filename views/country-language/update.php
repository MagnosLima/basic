<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CountryLanguage */

$this->title = Yii::t('app', 'Update Country Language: ' . $model->CountryCode, [
    'nameAttribute' => '' . $model->CountryCode,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Country Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CountryCode, 'url' => ['view', 'CountryCode' => $model->CountryCode, 'Language' => $model->Language]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="country-language-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
