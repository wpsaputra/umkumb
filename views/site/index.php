<?php

/* @var $this yii\web\View */
use miloschuman\highcharts\Highcharts;

$this->title = 'My Yii Application';
$sql = "SELECT [status_dok] FROM [SOUT2017Sampel].[dbo].[t_rt_ternak] where [status_dok]='C'";
$clean_ternak = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql . ') as count_alias')->queryScalar();

$sql2 = "SELECT [status_dok] FROM [SOUT2017Sampel].[dbo].[t_rt_ternak] where [status_dok]='E'";
$error_ternak = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql2 . ') as count_alias')->queryScalar();


function printPie($judul, $clean, $error, $blm_entri)
{
    echo Highcharts::widget([
        'options' => [
            'title' => ['text' => $judul],
            'credits' => ['enabled' => false],
            'colors' => [
                        // '#7cb5ec',
                '#90ed7d',
                '#f7a35c',
                '#434348',
            ],

            'plotOptions' => [
                'pie' => [
                    'cursor' => 'pointer',
                ],
            ],
            'series' => [
                [ // new opening bracket



                    'type' => 'pie',
                    'name' => 'Elements',
                    'data' => [
                        ['Clean', $clean],
                        ['Error', $error],
                        ['Blm Entri', $blm_entri],
                    ],
                                        // 'dataLabels' => [
                                        //     'enabled' => false
                                        // ],
                                        // 'showInLegend' => true
                ] // new closing bracket
            ],
        ],
    ]);

}
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <?php printPie('Progress Entri Padi', 10, 20, 70); ?>
            </div>
            <div class="col-lg-4">
                <?php printPie('Progress Entri Palawija', 10, 20, 70); ?>
            </div>
            <div class="col-lg-4">
                <?php printPie('Progress Entri Peternakan', 10, 20, 70); ?>
            </div>

        </div>
    </div>
</div>
