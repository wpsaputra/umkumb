<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\OperatorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="moperator-search">

    <?php $form = ActiveForm::begin([
        'method' => 'get',
        'options' => [
            'class' => 'form-inline'
        ]
    ]); ?>

    <div class="pull-right">
         <?php 
           echo DatePicker::widget([
           'model' => $model,
           'attribute' => 'tanggal',
           'options' => ['class' => 'form-control'],
                    //'language' => 'ru',
                    // 'dateFormat' => 'yyyy-MM-dd',
                    // 'dateFormat' => 'yyyy-MM-dd',
            ]);
            
        ?>
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
<br/>
