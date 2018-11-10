<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\HtmlPurifier;

/* @var $this yii\web\View */
/* @var $model app\models\City */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <!-- purificar xss (usuário não vê) -->
    <!-- yii\helpers\HtmlPurifier-->
    <?=HtmlPurifier::process($model->Name)?>
    <!-- Não executa, mas usuário vê o fonte do ataque -->
    <!-- yii\helpers\Html-->
    <?=Html::encode($model->Name)?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'Name',
            'CountryCode',
            'District',
            'Population',
        ],
    ]) ?>

</div>
