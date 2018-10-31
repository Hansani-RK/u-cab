<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Drivers */

$this->title = 'Create Drivers';
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drivers-create">
  
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
