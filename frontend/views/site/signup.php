<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<html>
<body>
<div class="site-signup">
  <table width="1000" height="200" border="1" color="red">
    <tr bgcolor="#FFD700">
      <td align="center">
    <h1><?= Html::encode($this->title) ?></h1>
<hr>
    <p>Please fill out the following fields to signup:</p>

    <div class="row">
            <?php $form = ActiveForm::begin([
              'id' => 'form-signup',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-offset-1 col-lg-1 control-label'],
        ],
            ]); ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                  <div class="col-lg-offset-1 col-lg-2">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                  </div>
                </div>
            <?php ActiveForm::end(); ?>

    </div>
  </td>
</tr>
  </table>
</div>
</body>
</html>
