<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Tabs;

$this->title = 'Rincian Entri';
$this->params['breadcrumbs'][] = $this->title;

$provider->pagination->pageParam = 'stu-page';
$provider->sort->sortParam = 'stu-sort';

$provider2->pagination->pageParam = 'spw-page';
$provider2->sort->sortParam = 'spw-sort';

$provider3->pagination->pageParam = 'spd-page';
$provider3->sort->sortParam = 'spd-sort';

$script = <<< JS
    $(function() {
        // save the latest tab (http://stackoverflow.com/a/18845441)
        // https://github.com/yiisoft/yii2/issues/4890
        $('a[data-toggle="tab"]').on('click', function (e) {
            localStorage.setItem('lastTab', $(e.target).attr('href'));
        });

        //go to the latest tab, if it exists:
        var lastTab = localStorage.getItem('lastTab');

        if (lastTab) {
            $('a[href="'+lastTab+'"]').click();
        }
    });
JS;
$this->registerJs($script, yii\web\View::POS_END);

/****** Script for SelectTopNRows command from SSMS  ******/
// SELECT [kode_operator], COUNT([jumlah_entri])
// FROM [SOUT2017Sampel].[dbo].[t_rt_ternak] GROUP BY [kode_operator]

// SELECT [kode_operator], [realname], COUNT([jumlah_entri]) as [count]
// FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
// LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
// ON [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
// GROUP BY [kode_operator], [realname]

// SELECT [kode_operator], [realname], COUNT([jumlah_entri]) as [count]
// FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
// LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
// ON [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
// GROUP BY [kode_operator], [realname], [flag_dok]
// HAVING [flag_dok]='spd'

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

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
        <?php
        echo GridView::widget([
            'dataProvider' => $provider3,
            'layout' => "{items}\n{summary}\n{pager}",
            'summaryOptions' => ['class' => 'summary pull-right'],
            // 'pagerOptions'=>['class' => 'pull-right']
        ]);
        ?>
        </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
        <div class="row">
        <div class="col-lg-12">
        <h3>Palawija</h3>
        <?php
        echo GridView::widget([
            'dataProvider' => $provider2,
            'layout' => "{items}\n{summary}\n{pager}",
            'summaryOptions' => ['class' => 'summary pull-right'],
            // 'pagerOptions'=>['class' => 'pull-right']
        ]);
        ?>
        </div>
    </div>
    </div>
    <div id="menu2" class="tab-pane fade">
        <div class="row">
        <div class="col-lg-12">
        <h3>Peternakan</h3>
        <?php
        echo GridView::widget([
            'dataProvider' => $provider,
            'layout' => "{items}\n{summary}\n{pager}",
            'summaryOptions' => ['class' => 'summary pull-right'],
            // 'pagerOptions'=>['class' => 'pull-right']
        ]);
        ?>
        </div>
    </div>
    </div>
    </div>




</div>
