<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-form">

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
    <?= $form->field($model, 'model')->textInput(['maxlength' => true])->label('<p>Model</p>') ?>
      </td>
    </tr>
    <tr>
      <td width = "700">
    <?= $form->field($model, 'vehicle_name')->textInput(['maxlength' => true])->label('<p>Vehicle Name</p>') ?>
      </td>
    </tr>
    <tr>
      <td width = "700">
    <?= $form->field($model, 'number_plate')->textInput(['maxlength' => true])->label('<p>Number Plate</p>') ?>
      </td>
    </tr>
    <tr>
      <td width = "700">
    <?= $form->field($model, 'user_name')->textInput(['maxlength' => true])->label('<p>User Name</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'user_address')->textInput(['maxlength' => true])->label('<p>User Address</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'user_phone')->textInput(['maxlength' => true])->label('<p>User Phone</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'number_of_seat')->textInput(['maxlength' => true])->label('<p>Number of Seate</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'status')->textInput(['maxlength' => true])->label('<p>Status</p>') ?>
  </td>
</tr>
<tr>
  <td width = "700">
    <?= $form->field($model, 'value_per_km')->textInput(['maxlength' => true])->label('<p>Value Per KM</p>') ?>
  </td>
</tr>
<!-- <tr>
  <td width = "700">
    <?= $form->field($model, 'created_at')->textInput(['maxlength' => true])->label('<p>Created At</p>') ?>
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
