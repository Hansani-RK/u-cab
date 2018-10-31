<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Trips */

$this->title = 'Create Trips';
$this->params['breadcrumbs'][] = ['label' => 'Trips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trips-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
