<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Rincian Inkonsistensi';
$this->params['breadcrumbs'][] = $this->title;
// https://stackoverflow.com/questions/31125334/yii2-activerecord-to-array

// Sort
$provider->pagination->pageParam = 'stu-page';
$provider->sort->sortParam = 'stu-sort';

$provider2->pagination->pageParam = 'spw-page';
$provider2->sort->sortParam = 'spw-sort';

$provider3->pagination->pageParam = 'spd-page';
$provider3->sort->sortParam = 'spd-sort';

$col1_ternak = 'B12_R1201';
$col2_ternak = 'B12_R1202';
$col1_padi_palawija = 'b14_r1405a_k2';
$col2_padi_palawija = 'b14_r1405b_4k2';


function printGridView($model, $col1, $col2)
{
    echo GridView::widget([
        'dataProvider' => $model,
        'layout' => "{items}\n{summary}\n{pager}",
        'summaryOptions' => ['class' => 'summary pull-right'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'kode_wilayah',
            'nu',
            'kom',
            'b1_r113', 
            [
                'attribute' => 'start_entry',
                'label' => 'Tanggal Entri',
            ],
                        // 'kode_operator',
                        // 'realname',
            [
                'attribute' => 'realname',
                'label' => 'Nama Operator',
            ],
            $col1,
            'TOTAL',
            $col2,
            'TOTAL2',
            [
                'attribute' => 'konsistensi_entrian',
                'format' => 'raw',
                'value' => function ($model) use (&$col1, &$col2) {
                    if ($model[$col1] === $model['TOTAL'] && $model[$col2] === $model['TOTAL2']) {
                        return '<i class="glyphicon glyphicon-ok text-success"></i>';

                    }
                    else {
                        return '<i class="glyphicon glyphicon-remove text-danger"></i>';
                    }
                },
            ],

        ],
                    // 'pagerOptions'=>['class' => 'pull-right']
    ]);


}

$script = <<< JS
    $(function() {
        // save the latest tab (http://stackoverflow.com/a/18845441)
        // https://github.com/yiisoft/yii2/issues/4890
        $('a[data-toggle="tab"]').on('click', function (e) {
            localStorage.setItem('lastTabee', $(e.target).attr('href'));
        });

        //go to the latest tab, if it exists:
        var lastTab = localStorage.getItem('lastTabee');

        if (lastTab) {
            $('a[href="'+lastTab+'"]').click();
        }
    });
JS;
$this->registerJs($script, yii\web\View::POS_END);

?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
        <p>
            Rincian pertanyaan yang konsisten akan diberi tanda ceklist (<i class="glyphicon glyphicon-ok text-success"></i>) dan tidak konsisten akan diberi tanda silang (<i class="glyphicon glyphicon-remove text-danger"></i>).
        </p>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Padi</a></li>
        <li><a data-toggle="tab" href="#menu1">Palawija</a></li>
        <li><a data-toggle="tab" href="#menu2">Peternakan</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Padi</h3>
                    <?php printGridView($provider3, $col1_padi_palawija, $col2_padi_palawija); ?>
                </div>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Palawija</h3>
                    <?php printGridView($provider2, $col1_padi_palawija, $col2_padi_palawija); ?>
                </div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Peternakan</h3>
                    <?php printGridView($provider, $col1_ternak, $col2_ternak); ?>
                </div>
            </div>
        </div>
    </div>

</div>
