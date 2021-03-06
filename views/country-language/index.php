<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CountryLanguageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Country Languages');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-language-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {model}', ['model'=>Yii::t('app','Country Language')]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CountryCode',
            'Language',
            'IsOfficial',
            'Percentage',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
