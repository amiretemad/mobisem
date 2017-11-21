<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>css/matrix-login.css"/>
    <link href="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


<div id="loginbox">
    <div class="form">
      <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
          'validateOnSubmit' => true,
        ),
      )); ?>

        <!-- username field -->
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                  <?php echo $form->labelEx($model, 'email_address'); ?>
                  <?php echo $form->emailField($model, 'email_address'); ?>
                  <?php echo $form->error($model, 'email_address'); ?>
                </div>
            </div>
        </div>

        <!-- Password -->
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                  <?php echo $form->labelEx($model, 'password'); ?>
                  <?php echo $form->passwordField($model, 'password', array("min" => 6)); ?>
                  <?php echo $form->error($model, 'password'); ?>
                    <p class="hint">
                        Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
                    </p>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="form-actions">
            <span class="pull-right">
                   <?php echo CHtml::submitButton('Login', array(
                     'class' => 'btn btn-success'
                   )); ?>
            </span>
        </div>
      <?php $this->endWidget(); ?>
    </div><!-- form -->
</div>


<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR; ?>js/matrix.login.js"></script>
</body>

</html>