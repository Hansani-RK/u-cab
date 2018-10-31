<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Trips */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trips-form">
  <html><head>
  <link rel="stylesheet" type="text/css" href="css/ch.css">
  </head>
  <body>

    <?php $form = ActiveForm::begin(); ?>
      <h1>Create Cab Now</h1>
      <hr>

      <table align = "center">
      <tr>
        <td width = "700">
    <?= $form->field($model, 'from_date')->textInput()->label('<p>From Date</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'to_date')->textInput()->label('<p>To Date</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'customer_name')->textInput(['maxlength' => true])->label('<p>Customer Name</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'customer_address')->textInput(['maxlength' => true])->label('<p>Customer Address</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'customer_phone')->textInput()->label('<p>Customer Phone</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'pickup_address')->textInput(['maxlength' => true])->label('<p>Pickup Address</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'distance')->textInput()->label('<p>Distance</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'trip_price')->textInput(['maxlength' => true])->label('<p>Trip Price</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'vehicle_id')->textInput()->label('<p>Vehicle ID</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'status')->textInput()->label('<p>Status</p>') ?>
  </td>
</tr>
<!-- <tr>
  <td width = "700">
    <?= $form->field($model, 'created_at')->textInput()->label('<p>Created at</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'updated_at')->textInput()->label('<p>Updated At</p>') ?>
  </td>
</tr> -->
<tr>
  <td width = "700">
    <?= Html::submitButton('Save', ['class' => 'btn bouton-contact']) ?>
    </td>
    </tr>
    </table>
    <hr>
    <?php ActiveForm::end(); ?>
    </body>
    </html>
    </div>
