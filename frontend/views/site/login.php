<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<html>
<body>
<div class="site-login">
  <table width="1000" height="200" border="1">
    <tr  bgcolor="#FFD700">
      <td align="center">
    <h1><?= Html::encode($this->title) ?></h1>

    <p><h4>Please fill out the following fields to login:</h4></p><br/>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin([
              'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-offset-1 col-lg-2 control-label'],
        ],
            ]); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('<h4>User Name</h4>') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('<h4>Password</h4>') ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                  <h4>  If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.</h4>
                </div>

                <div class="form-group">
                  <div class="col-lg-offset-1 col-lg-2">
                    <?= Html::submitButton('<h4>Login</h4>', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                  </div>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
  </td>
</tr>
  </table>
</div>
</body>
</html>
