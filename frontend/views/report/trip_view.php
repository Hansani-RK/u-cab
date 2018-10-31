<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vehicles */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicles-view">
  <html><head>
  <link rel="stylesheet" type="text/css" href="css/ch.css">
  </head>
  <body>


<table align = "center">

  <tr>
    <td width = "700">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          'id',
          'from_date',
          'to_date',
          'customer_name',
          'customer_address',
          'customer_phone',
          'pickup_address',
          'distance',
          'trip_price',
          'vehicle_id',
          'status',
          'created_at',
          'updated_at',
        ],
    ]) ?>
  </td>
</tr>
<tr>
  <td width = "700">
      <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

  </td>
</tr>
</table>
  </body>
  </html>
</div>
