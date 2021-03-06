<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Itinerary */

$this->title = 'Create Itinerary';
$this->params['breadcrumbs'][] = ['label' => 'Itinerary', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create box">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listVertex' => $listVertex
    ]) ?>

</div>
