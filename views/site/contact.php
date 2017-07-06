<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Rincian Inkonsistensi';
$this->params['breadcrumbs'][] = $this->title;
// https://stackoverflow.com/questions/31125334/yii2-activerecord-to-array

?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
        <p>
            Rincian pertanyaan yang konsisten akan diberi tanda ceklist (&#10004;) dan tidak konsisten akan diberi tanda silang (X).
        </p>

        <div class="row">
            <div class="col-lg-12">
                <?php
                echo GridView::widget([
                    'dataProvider' => $provider,
                    'layout' => "{items}\n{summary}\n{pager}",
                    'summaryOptions' => ['class' => 'summary pull-right'],
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'kode_wilayah',
                        'nu', 
                        'kom',
                        'kode_operator', 
                        'B12_R1201', 
                        'TOTAL', 
                        'B12_R1202', 
                        'TOTAL2',
                        [
                            'attribute' => 'konsistensi_entrian',
                            'format' => 'raw',
                            'value' => function ($model) {                      
                                    return '<div>'.$model['TOTAL2'].' and other html-code</div> <i class="glyphicon glyphicon-ok"></i><i class="glyphicon glyphicon-remove"></i>';
                            },
                        ],

                    ],
                    // 'pagerOptions'=>['class' => 'pull-right']
                ]);
                ?>
            </div>
        </div>

</div>
