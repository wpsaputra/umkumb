<?php

/* @var $this yii\web\View */
use miloschuman\highcharts\Highcharts;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
            <?php 
            echo Highcharts::widget([
                'options' => [
                    'title' => ['text' => 'Progress Entri Padi'],
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
                                ['Clean', 30],
                                ['Error', 20],
                                ['Blm Entri', 50],
                            ],
                                        // 'dataLabels' => [
                                        //     'enabled' => false
                                        // ],
                                        // 'showInLegend' => true
                        ] // new closing bracket
                    ],
                ],
            ]);
            
            ?>
            </div>
            <div class="col-lg-4">
            <?php 
            echo Highcharts::widget([
                'options' => [
                    'credits' => ['enabled' => false],
                    'title' => ['text' => 'Progress Entri Palawija'],
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
                                ['Firefox', 45.0],
                                ['IE', 26.8],
                                ['Safari', 8.5],
                                ['Opera', 6.2],
                                ['Others', 0.7]
                            ],
                        ] // new closing bracket
                    ],
                ],
            ]);
            ?>
            </div>
            <div class="col-lg-4">
            <?php 
            echo Highcharts::widget([
                'options' => [
                    'credits' => ['enabled' => false],
                    'title' => ['text' => 'Progress Entri Peternakan'],
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
                                ['Firefox', 45.0],
                                ['IE', 26.8],
                                ['Safari', 8.5],
                                ['Opera', 6.2],
                                ['Others', 0.7]
                            ],
                        ] // new closing bracket
                    ],
                ],
            ]);
            ?>
            </div>







        </div>
    </div>
</div>
