<?php

/* @var $this yii\web\View */
use miloschuman\highcharts\Highcharts;

$this->title = 'Monitoring UMK-UMB';
$clean_total = 0;
$error_total = 0;
$blm_entri_total = 0;

// UMK
$sql = "SELECT [StatusDok] FROM [UMB_UMK_2017].[dbo].[UMK_VAL] where [StatusDok]='C'";
$clean_umk = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql . ') as count_alias')->queryScalar();

$sql2 = "SELECT [StatusDok] FROM [UMB_UMK_2017].[dbo].[UMK_VAL] where [StatusDok]='E'";;
$error_umk = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql2 . ') as count_alias')->queryScalar();
$total_umk = 21584;
$blm_entri_umk = $total_umk - $clean_umk - $error_umk;

$clean_total = $clean_total + $clean_umk;
$error_total = $error_total + $error_umk;
$blm_entri_total = $blm_entri_total + $blm_entri_umk;

$clean_umk = $clean_umk / $total_umk;
$error_umk = $error_umk / $total_umk;
$blm_entri_umk = $blm_entri_umk / $total_umk;

// UMB-P
$sql = "SELECT [StatusDok] FROM [UMB_UMK_2017].[dbo].[UMB_SP_VAL] where [StatusDok]='C'";
$clean_umbp = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql . ') as count_alias')->queryScalar();

$sql2 = "SELECT [StatusDok] FROM [UMB_UMK_2017].[dbo].[UMB_SP_VAL] where [StatusDok]='E'";;
$error_umbp = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql2 . ') as count_alias')->queryScalar();
$total_umbp = 544;
$blm_entri_umbp = $total_umbp - $clean_umbp - $error_umbp;

$clean_total = $clean_total + $clean_umbp;
$error_total = $error_total + $error_umbp;
$blm_entri_total = $blm_entri_total + $blm_entri_umbp;

$clean_umbp = $clean_umbp / $total_umbp;
$error_umbp = $error_umbp / $total_umbp;
$blm_entri_umbp = $blm_entri_umbp / $total_umbp;

// UMB-K
$sql = "SELECT [StatusDok] FROM [UMB_UMK_2017].[dbo].[UMB_JK_VAL] where [StatusDok]='C'";
$clean_umbk = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql . ') as count_alias')->queryScalar();

$sql2 = "SELECT [StatusDok] FROM [UMB_UMK_2017].[dbo].[UMB_JK_VAL] where [StatusDok]='E'";;
$error_umbk = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql2 . ') as count_alias')->queryScalar();
$total_umbk = 295;
$blm_entri_umbk = $total_umbk - $clean_umbk - $error_umbk;

$clean_total = $clean_total + $clean_umbk;
$error_total = $error_total + $error_umbk;
$blm_entri_total = $blm_entri_total + $blm_entri_umbk;

$clean_umbk = $clean_umbk / $total_umbk;
$error_umbk = $error_umbk / $total_umbk;
$blm_entri_umbk = $blm_entri_umbk / $total_umbk;

// UMB-NK
$sql = "SELECT [StatusDok] FROM [UMB_UMK_2017].[dbo].[UMB_JNK_VAL] where [StatusDok]='C'";
$clean_umbnk = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql . ') as count_alias')->queryScalar();

$sql2 = "SELECT [StatusDok] FROM [UMB_UMK_2017].[dbo].[UMB_JNK_VAL] where [StatusDok]='E'";;
$error_umbnk = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql2 . ') as count_alias')->queryScalar();
$total_umbnk = 1519;
$blm_entri_umbnk = $total_umbnk - $clean_umbnk - $error_umbnk;

$clean_total = $clean_total + $clean_umbnk;
$error_total = $error_total + $error_umbnk;
$blm_entri_total = $blm_entri_total + $blm_entri_umbnk;

$clean_umbnk = $clean_umbnk / $total_umbnk;
$error_umbnk = $error_umbnk / $total_umbnk;
$blm_entri_umbnk = $blm_entri_umbnk / $total_umbnk;

// Total
$total_total = $total_umk + $total_umbp + $total_umbk + $total_umbnk;
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
                        ['Blm Transfer', $blm_entri],
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
            <p>- Jumlah Transfer Total <?php echo '<strong>'.($clean_total+$error_total)*$total_total.'</strong>'.' dari '.'<strong>'.$total_total.'</strong>'.' dokumen' ?></p>
            <p>- Jumlah Clean Total <?php echo '<strong>'.($clean_total)*$total_total.'</strong>'.' dari '.'<strong>'.$total_total.'</strong>'.' dokumen' ?></p>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <?php printPie('Progress Validasi UMK', $clean_umk, $error_umk, $blm_entri_umk); ?>
            </div>
            <div class="col-lg-4">
                <?php printPie('Progress Validasi UMB-P', $clean_umbp, $error_umbp, $blm_entri_umbp); ?>
            </div>
            <div class="col-lg-4">
                <?php printPie('Progress Validasi UMB-K', $clean_umbk, $error_umbk, $blm_entri_umbk); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <?php printPie('Progress Validasi UMB-NK', $clean_umbnk, $error_umbnk, $blm_entri_umbnk); ?>
            </div>
            <div class="col-lg-4">
                <?php printPie('Progress Validasi Total', $clean_total, $error_total, $blm_entri_total); ?>
            </div>
        </div>
    </div>
</div>
