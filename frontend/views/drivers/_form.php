<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Drivers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="drivers-form">  <html><head>
  <link rel="stylesheet" type="text/css" href="css/ch.css">
  </head>
  <body>
      <?php $form = ActiveForm::begin(); ?>
        <h1>Create Drives Now</h1>
        <hr>
    <table align = "center">
    <tr>
      <td width = "700">
    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true])->label('<p>First Name</p>') ?>
      </td>
    </tr>
    <tr>
      <td width = "700">
    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true])->label('<p>Last Name</p>') ?>
      </td>
    </tr>
    <tr>
      <td width = "700">
    <?= $form->field($model, 'address')->textInput(['maxlength' => true])->label('<p>Address</p>') ?>
      </td>
    </tr>
    <tr>
      <td width = "700">
    <?= $form->field($model, 'phone')->textInput()->label('<p>Phone</p>') ?>
      </td>
    </tr>
    <tr>
      <td width = "700">
    <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label('<p>Email</p>') ?>
      </td>
    </tr>
    <tr>
      <td width = "700">
    <?= $form->field($model, 'nic_no')->textInput()->label('<p>NIC No</p>') ?>
      </td>
    </tr>
    <tr>
      <td width = "700">
    <?= $form->field($model, 'status')->textInput()->label('<p>Status</p>') ?>
      </td>
    </tr>
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
