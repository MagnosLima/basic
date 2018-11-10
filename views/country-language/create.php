<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CountryLanguage */

$this->title = Yii::t('app', 'Create Country Language');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Country Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-language-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
