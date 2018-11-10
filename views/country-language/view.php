<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CountryLanguage */

$this->title = $model->CountryCode;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Country Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-language-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'CountryCode' => $model->CountryCode, 'Language' => $model->Language], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'CountryCode' => $model->CountryCode, 'Language' => $model->Language], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'CountryCode',
            'Language',
            'IsOfficial',
            'Percentage',
        ],
    ]) ?>

</div>
