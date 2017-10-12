<?php

/* @var $this yii\web\View */
use miloschuman\highcharts\Highcharts;

$this->title = 'Monitoring UMK-UMB';
$clean_total = 0;
$error_total = 0;
$blm_entri_total = 0;

// UMK
$sql = "SELECT [status_dok] FROM [SOUT2017Sampel].[dbo].[t_rt_umk] where [status_dok]='C'";
$clean_umk = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql . ') as count_alias')->queryScalar();

$sql2 = "SELECT [status_dok] FROM [SOUT2017Sampel].[dbo].[t_rt_umk] where [status_dok]='E'";
$error_umk = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql2 . ') as count_alias')->queryScalar();
$total_umk = 4220;
$blm_entri_umk = $total_umk - $clean_umk - $error_umk;

$clean_total = $clean_total + $clean_umk;
$error_total = $error_total + $error_umk;
$blm_entri_total = $blm_entri_total + $blm_entri_umk;

$clean_umk = $clean_umk / $total_umk;
$error_umk = $error_umk / $total_umk;
$blm_entri_umk = $blm_entri_umk / $total_umk;

// UMB-K
$sql = "SELECT [status_dok] FROM [SOUT2017Sampel].[dbo].[t_rt_tp] where [status_dok]='C' AND [flag_dok]='spw'";
$clean_umbk = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql . ') as count_alias')->queryScalar();

$sql2 = "SELECT [status_dok] FROM [SOUT2017Sampel].[dbo].[t_rt_tp] where [status_dok]='E' AND [flag_dok]='spw'";
$error_umbk = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql2 . ') as count_alias')->queryScalar();
$total_umbk = 4627;
$blm_entri_umbk = $total_umbk - $clean_umbk - $error_umbk;

$clean_total = $clean_total + $clean_umbk;
$error_total = $error_total + $error_umbk;
$blm_entri_total = $blm_entri_total + $blm_entri_umbk;

$clean_umbk = $clean_umbk / $total_umbk;
$error_umbk = $error_umbk / $total_umbk;
$blm_entri_umbk = $blm_entri_umbk / $total_umbk;

// Padi
$sql = "SELECT [status_dok] FROM [SOUT2017Sampel].[dbo].[t_rt_tp] where [status_dok]='C' AND [flag_dok]='spd'";
$clean_padi = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql . ') as count_alias')->queryScalar();

$sql2 = "SELECT [status_dok] FROM [SOUT2017Sampel].[dbo].[t_rt_tp] where [status_dok]='E' AND [flag_dok]='spd'";
$error_padi = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql2 . ') as count_alias')->queryScalar();
$total_padi = 2126;
$blm_entri_padi = $total_padi - $clean_padi - $error_padi;

$clean_total = $clean_total + $clean_padi;
$error_total = $error_total + $error_padi;
$blm_entri_total = $blm_entri_total + $blm_entri_padi;

$clean_padi = $clean_padi / $total_padi;
$error_padi = $error_padi / $total_padi;
$blm_entri_padi = $blm_entri_padi / $total_padi;

// Total
$total_total = $total_padi + $total_umbk + $total_umk;
$clean_total = $clean_total / $total_total;
$error_total = $error_total / $total_total;
$blm_entri_total = $blm_entri_total / $total_total;

// https://stackoverflow.com/questions/676824/how-to-calculate-the-difference-between-two-dates-using-php
$current_date = new DateTime();
$deadline_date = new DateTime('10/31/2017');
$diff = $current_date->diff($deadline_date);
// print_r($diff->days);



function printPie($judul, $clean, $error, $blm_entri)
{
    echo Highcharts::widget([
        'options' => [
            'title' => ['text' => $judul],
            'credits' => ['enabled' => false],
            'tooltip' => [
                'pointFormat' => '{series.name}: <b>{point.percentage:.1f}%</b>'
            ],
            'colors' => [
                // '#7cb5ec',

                '#90ed7d',
                '#f7a35c',
                '#3A3A4F',
                // '#434348',
            ],

            'plotOptions' => [
                'pie' => [
                    'cursor' => 'pointer',
                    'dataLabels' => [
                        'enabled' => true,
                        'format' => '<b>{point.name}</b>: {point.percentage:.1f} %',
                    ]
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
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p><strong>Warning!</strong> Pengolahan UMK UMB akan berakhir <?php print_r($diff->days); ?> hari lagi</p>
            <p>- Jumlah Entrian Total <?php echo '<strong>'.($clean_total+$error_total)*$total_total.'</strong>'.' dari '.'<strong>'.$total_total.'</strong>'.' dokumen' ?></p>
            <p>- Jumlah Clean Total <?php echo '<strong>'.($clean_total)*$total_total.'</strong>'.' dari '.'<strong>'.$total_total.'</strong>'.' dokumen' ?></p>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <?php printPie('Progress Entri Padi', $clean_padi, $error_padi, $blm_entri_padi); ?>
            </div>
            <div class="col-lg-4">
                <?php printPie('Progress Entri umbk', $clean_umbk, $error_umbk, $blm_entri_umbk); ?>
            </div>
            <div class="col-lg-4">
                <?php printPie('Progress Entri Peumkan', $clean_umk, $error_umk, $blm_entri_umk); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <?php printPie('Progress Entri Total', $clean_total, $error_total, $blm_entri_total); ?>
            </div>
        </div>
    </div>
</div>
