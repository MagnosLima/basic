<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Country */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Countries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->Code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->Code], [
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
            'Code',
            'Name',
            'Continent',
            'Region',
            'SurfaceArea',
            'IndepYear',
            'Population',
            'LifeExpectancy',
            'GNP',
            'GNPOld',
            'LocalName',
            'GovernmentForm',
            'HeadOfState',
            'Capital',
            'Code2',
        ],
    ]) ?>

    <h2>Lista de Cidades</h2>
    <ul>
<?php
foreach ($cidades as $cidade) {?>
    <li>
        <?= Html::encode($cidade->Name) ?>
    </li>
<?php } ?>
    </ul>

</div>
