<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MOperator */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="moperator-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_operator')->textInput() ?>

    <?= $form->field($model, 'kode_prov')->textInput() ?>

    <?= $form->field($model, 'kode_kab')->textInput() ?>

    <?= $form->field($model, 'kode_op')->textInput() ?>

    <?= $form->field($model, 'username')->textInput() ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'realname')->textInput() ?>

    <?= $form->field($model, 'userlevel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
