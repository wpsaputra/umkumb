<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Tabs;

$this->title = 'Rincian Validasi (Total)';
$this->params['breadcrumbs'][] = $this->title;

$provider->pagination->pageParam = 'umk-page';
$provider->sort->sortParam = 'umk-sort';

$provider2->pagination->pageParam = 'umbp-page';
$provider2->sort->sortParam = 'umbp-sort';

$provider3->pagination->pageParam = 'umbk-page';
$provider3->sort->sortParam = 'umbk-sort';

$provider4->pagination->pageParam = 'umbnk-page';
$provider4->sort->sortParam = 'umbnk-sort';

$script = <<< JS
    $(function() {
        // save the latest tab (http://stackoverflow.com/a/18845441)
        // https://github.com/yiisoft/yii2/issues/4890
        $('a[data-toggle="tab"]').on('click', function (e) {
            localStorage.setItem('lastTabretotal', $(e.target).attr('href'));
        });

        //go to the latest tab, if it exists:
        var lastTab = localStorage.getItem('lastTabretotal');

        if (lastTab) {
            $('a[href="'+lastTab+'"]').click();
        }
    });
JS;
$this->registerJs($script, yii\web\View::POS_END);

function printGridView($data_provider){
    echo GridView::widget([
            'dataProvider' => $data_provider,
            'layout' => "{items}\n{summary}\n{pager}",
            'summaryOptions' => ['class' => 'summary pull-right'],
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                // 'clean_by',
                [
                    'attribute' => 'clean_by',
                    'label' => 'Kode Operator',
                ],
                // 'realname',
                [
                    'attribute' => 'realname',
                    'label' => 'Nama Operator',
                ], 
                // 'count',
                [
                    'attribute' => 'count',
                    'label' => 'Jumlah Validasi',
                ],
            ],
            // 'pagerOptions'=>['class' => 'pull-right']
        ]);
}

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <p> 
        Tabel berikut merupakan jumlah total dokumen yang telah di validasi oleh Operator.
    </p>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">UMK</a></li>
        <li><a data-toggle="tab" href="#menu1">UMB-P</a></li>
        <li><a data-toggle="tab" href="#menu2">UMB-K</a></li>
        <li><a data-toggle="tab" href="#menu3">UMB-NK</a></li>
        <li><a data-toggle="tab" href="#menu4">Total</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="row">
                <div class="col-lg-12">
                    <h3>UMK</h3>
                    <?php printGridView($provider); ?>
                </div>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <div class="row">
                <div class="col-lg-12">
                    <h3>UMB-P</h3>
                    <?php printGridView($provider2); ?>
                </div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <div class="row">
                <div class="col-lg-12">
                    <h3>UMB-K</h3>
                    <?php printGridView($provider3); ?>
                </div>
            </div>
        </div>
        <div id="menu3" class="tab-pane fade">
            <div class="row">
                <div class="col-lg-12">
                    <h3>UMB-NK</h3>
                    <?php printGridView($provider4); ?>
                </div>
            </div>
        </div>
        <div id="menu4" class="tab-pane fade">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Total</h3>
                    <?php printGridView($provider5); ?>
                </div>
            </div>
        </div>
    </div>
</div>
