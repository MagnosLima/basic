<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\City */

$this->title = Yii::t('app', 'Create {model}', ['model'=>Yii::t('app','City')]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    	'data' => $data,
        'model' => $model,
    ]) ?>

</div>
