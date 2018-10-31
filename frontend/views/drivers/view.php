<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Drivers */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drivers-view">

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
            'first_name',
            'last_name',
            'address',
            'phone',
            'email:email',
            'nic_no',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

  </td>
</tr>
</table>
  </body>
  </html>
</div>
