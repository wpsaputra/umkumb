<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_rt_tp".
 *
 * @property string $kode_prov
 * @property string $kode_kab
 * @property string $kode_kec
 * @property string $kode_desa
 * @property string $nbs
 * @property integer $nu
 * @property integer $kom
 * @property string $jam_pencacahan
 * @property string $menit
 * @property string $Kode_komoditas
 * @property string $Nama_komoditas
 * @property string $b1_r101
 * @property string $b1_r102
 * @property string $b1_r103
 * @property string $b1_r104
 * @property string $b1_r105
 * @property string $b1_r106
 * @property string $b1_r107
 * @property string $b1_r108
 * @property string $b1_r109
 * @property string $b1_r110
 * @property string $b1_r111
 * @property string $b1_r112
 * @property string $b1_r113
 * @property string $b1_r114
 * @property string $b1_r115
 * @property integer $b1_r116
 * @property string $b2_r201
 * @property string $b2_r202
 * @property string $b2_r203_tgl
 * @property string $b2_r203_bln
 * @property string $b2_r204
 * @property string $b3_r301
 * @property string $b4_r402
 * @property string $b5a_r501
 * @property integer $b5a_r502
 * @property integer $b5a_r503
 * @property integer $b5a_r504
 * @property integer $b5a_R505a
 * @property integer $b5a_r505
 * @property integer $b5a_r506
 * @property integer $b5a_r507
 * @property integer $b5a_r508
 * @property double $b5a_r509
 * @property string $b5b_r510
 * @property string $b5b_r511
 * @property string $b5b_r512
 * @property string $b5b_r512a
 * @property string $b5b_r512b
 * @property string $b5b_r512c
 * @property string $b5b_r512d
 * @property string $b5b_r513a
 * @property string $b5b_r513b
 * @property string $b5b_r514
 * @property string $b5b_r514_lain1
 * @property string $b5b_r514_lain2
 * @property string $b5b_r514_lain3
 * @property string $b5b_r515
 * @property string $b5b_r515_lainnya
 * @property string $b5b_r516
 * @property string $b5b_r517
 * @property string $b5b_r518
 * @property string $b5b_r519
 * @property string $b5b_r520
 * @property string $b5b_r521
 * @property string $b5b_r522
 * @property string $b5b_r523
 * @property string $b5b_r524
 * @property string $b5b_r524_lainnya
 * @property string $b5b_r525
 * @property string $b5b_r526
 * @property string $b5b_r527
 * @property string $b5b_r528
 * @property string $b5b_r528_lainnya
 * @property string $b5b_r529
 * @property string $b5b_r530
 * @property string $b5b_r531
 * @property string $b5b_r531_lainnya
 * @property string $b5b_r532
 * @property string $b5b_r533
 * @property string $b5b_r534
 * @property string $b5b_r535
 * @property string $b5b_r535_lainnya
 * @property integer $b6_r601
 * @property integer $b6_r602
 * @property integer $b6_r603
 * @property integer $b6_r604i
 * @property integer $b6_r605j
 * @property integer $b6_r606h_k8
 * @property integer $b6_r606h_k9
 * @property integer $b6_r606h_k10
 * @property integer $b6_r606p_k8
 * @property integer $b6_r606p_k9
 * @property integer $b6_r607
 * @property string $b6_r608a
 * @property integer $b6_r608b
 * @property integer $b6_r608c
 * @property string $b6_r609a
 * @property integer $b6_r609b
 * @property integer $b6_r609c
 * @property integer $b6_r610
 * @property integer $b6_r611
 * @property integer $b6_r612_jumlah_k3
 * @property integer $b6_r612_jumlah_k8
 * @property integer $b6_r613
 * @property integer $b6_r614
 * @property integer $b6_r615
 * @property string $b7_r701
 * @property string $b7_r702
 * @property integer $b7_r703_1
 * @property integer $b7_r703_2
 * @property integer $b7_r703_3
 * @property string $b7_r704
 * @property string $b7_r705_1
 * @property string $b7_r705_2
 * @property string $b7_r705_3
 * @property string $b7_r705_4
 * @property string $b7_r705_5
 * @property string $b7_r705_6
 * @property string $b7_r705_6lainnya
 * @property string $b7_r706
 * @property string $b7_r707
 * @property string $b7_r708
 * @property string $b7_r709_1
 * @property string $b7_r709_2
 * @property string $b7_r709_3
 * @property string $b7_r709_4a
 * @property string $b7_r709_4b
 * @property string $b7_r709_5
 * @property string $b7_r709_6
 * @property string $b7_r709_6lainnya
 * @property string $b7_r710
 * @property string $b7_r710_lainnya
 * @property string $b7_r711_1
 * @property string $b7_r711_2
 * @property string $b7_r711_3
 * @property string $b7_r711_4
 * @property string $b7_r711_5
 * @property string $b7_r711_6
 * @property string $b7_r711_6lainnya
 * @property string $b7_r712
 * @property string $b7_r713
 * @property string $b7_r714_1
 * @property string $b7_r714_2
 * @property string $b7_r714_3
 * @property string $b7_r714_4
 * @property string $b7_r714_4lainnya
 * @property string $b7_r715_1
 * @property string $b7_r715_2
 * @property string $b7_r715_3
 * @property string $b7_r715_4
 * @property string $b7_r715_5
 * @property string $b7_r715_6
 * @property string $b7_r715_6lainnya
 * @property string $b7_r716
 * @property string $b7_r717
 * @property string $b7_r717_lainnya
 * @property string $b7_r718
 * @property string $b7_r719
 * @property string $b7_r719_lainnya
 * @property string $b7_r720
 * @property string $b7_r721
 * @property integer $b7_r722a_1
 * @property integer $b7_r722a_2
 * @property integer $b7_r722a_3
 * @property integer $b7_r722a_4
 * @property string $b7_r722b
 * @property string $b7_r722b_lainnya
 * @property string $b8_r801
 * @property string $b8_r802
 * @property integer $b8_r803
 * @property string $b8_r804
 * @property string $b8_r805
 * @property string $b8_r805_lainnya
 * @property string $b8_r806
 * @property string $b8_r806_lainnya
 * @property string $b8_r807
 * @property string $b9_r901
 * @property string $b9_r902
 * @property string $b9_r903
 * @property string $b9_r904
 * @property string $b9_r905
 * @property string $b9_r906
 * @property string $b9_r907
 * @property string $b9_r908
 * @property integer $b10_r1001a_k2
 * @property integer $b10_r1001a_k3
 * @property integer $b10_r1001a_k4
 * @property integer $b10_r1001a_k5
 * @property integer $b10_r1001b_k2
 * @property integer $b10_r1001b_k3
 * @property integer $b10_r1001b_k4
 * @property integer $b10_r1001b_k5
 * @property integer $b10_r1001c_k2
 * @property integer $b10_r1001c_k3
 * @property integer $b10_r1001c_k4
 * @property integer $b10_r1001c_k5
 * @property integer $b10_r1001d_k2
 * @property integer $b10_r1001d_k3
 * @property integer $b10_r1001d_k4
 * @property integer $b10_r1001d_k5
 * @property integer $b10_r1001e_k2
 * @property integer $b10_r1001e_k3
 * @property integer $b10_r1001e_k5
 * @property integer $b10_r1001f_k2
 * @property integer $b10_r1001f_k3
 * @property integer $b10_r1001f_k5
 * @property string $b10_r1002
 * @property integer $b11_r1101_k2_jumlah
 * @property integer $b11_r1101_k3_jumlah
 * @property integer $b11_r1101_k4_jumlah
 * @property integer $b11_r1101_k5_jumlah
 * @property string $b12_Catatan
 * @property string $jam_selesai
 * @property string $menit_selesai
 * @property string $b14_r1401
 * @property integer $b14_r1402
 * @property double $b14_r1403
 * @property integer $b14_r1404
 * @property integer $b14_r1405a_k2
 * @property integer $b14_r1405a_k3
 * @property integer $b14_r1405a_1k2
 * @property integer $b14_r1405a_1k3
 * @property integer $b14_r1405a_2k2
 * @property integer $b14_r1405a_2k3
 * @property integer $b14_r1405b_k2
 * @property integer $b14_r1405b_k3
 * @property integer $b14_r1405b_1k2
 * @property integer $b14_r1405b_1k3
 * @property integer $b14_r1405b_2k2
 * @property integer $b14_r1405b_2k3
 * @property integer $b14_r1405b_3k2
 * @property integer $b14_r1405b_3k3
 * @property integer $b14_r1405b_4k2
 * @property integer $b14_r1405b_4k3
 * @property integer $b14_r1405b_4i_k2
 * @property integer $b14_r1405b_4i_k3
 * @property integer $b14_r1405b_4ii_k2
 * @property integer $b14_r1405b_4ii_k3
 * @property integer $b14_r1405b_5k2
 * @property integer $b14_r1405b_5k3
 * @property integer $b14_r1405b_6k2
 * @property integer $b14_r1405b_6k3
 * @property integer $b14_r1405b_7k2
 * @property integer $b14_r1405b_7k3
 * @property integer $b14_r1405b_8k2
 * @property integer $b14_r1405b_8k3
 * @property integer $b14_r1405b_9k2
 * @property integer $b14_r1405b_9k3
 * @property integer $b14_r1405b_10k2
 * @property integer $b14_r1405b_10k3
 * @property integer $b14_r1405b_11k2
 * @property integer $b14_r1405b_11k3
 * @property integer $b14_r1405b_12k2
 * @property integer $b14_r1405b_12k3
 * @property integer $b14_r1405b_12i_k2
 * @property integer $b14_r1405b_12i_k3
 * @property integer $b14_r1405b_12ii_k2
 * @property integer $b14_r1405b_12ii_k3
 * @property integer $b14_r1405b_13k2
 * @property integer $b14_r1405b_13k3
 * @property integer $b14_r1405c_k2
 * @property integer $b14_r1405c_k3
 * @property double $b14_r1405d_k2
 * @property double $b14_r1405d_k3
 * @property string $b15_r1501
 * @property string $b15_r1502
 * @property string $b15_r1503
 * @property string $b15_r1504
 * @property string $b15_r1505
 * @property string $b15_r1506
 * @property string $b15_r1507
 * @property string $b15_r1508
 * @property string $b15_r1509
 * @property string $b15_r1510
 * @property string $b15_r1511
 * @property string $Catatan_pemeriksa
 * @property string $b16_r1601
 * @property string $b16_r1602
 * @property string $b16_r1603_tgl
 * @property string $b16_r1603_bln
 * @property string $b16_r1604
 * @property string $status_dok
 * @property string $insert_by
 * @property string $clean_by
 * @property string $kode_operator
 * @property integer $jumlah_entri
 * @property string $start_entry
 * @property string $end_entry
 * @property string $flag_dok
 * @property string $flag_krt
 * @property string $reserve1
 * @property string $reserve2
 * @property string $reserve3
 * @property string $reserve4
 * @property string $reserve5
 *
 * @property MRt $nu0
 * @property TRtTpArt[] $tRtTpArts
 * @property TRtTpB1101[] $tRtTpB1101s
 * @property TRtTpB612[] $tRtTpB612s
 * @property TRtTpTabel[] $tRtTpTabels
 */
class TRtTp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_rt_tp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_prov', 'kode_kab', 'kode_kec', 'kode_desa', 'nbs', 'nu', 'kom'], 'required'],
            [['kode_prov', 'kode_kab', 'kode_kec', 'kode_desa', 'nbs', 'jam_pencacahan', 'menit', 'Kode_komoditas', 'Nama_komoditas', 'b1_r101', 'b1_r102', 'b1_r103', 'b1_r104', 'b1_r105', 'b1_r106', 'b1_r107', 'b1_r108', 'b1_r109', 'b1_r110', 'b1_r111', 'b1_r112', 'b1_r113', 'b1_r114', 'b1_r115', 'b2_r201', 'b2_r202', 'b2_r203_tgl', 'b2_r203_bln', 'b2_r204', 'b3_r301', 'b4_r402', 'b5a_r501', 'b5b_r510', 'b5b_r511', 'b5b_r512', 'b5b_r512a', 'b5b_r512b', 'b5b_r512c', 'b5b_r512d', 'b5b_r513a', 'b5b_r513b', 'b5b_r514', 'b5b_r514_lain1', 'b5b_r514_lain2', 'b5b_r514_lain3', 'b5b_r515', 'b5b_r515_lainnya', 'b5b_r516', 'b5b_r517', 'b5b_r518', 'b5b_r519', 'b5b_r520', 'b5b_r521', 'b5b_r522', 'b5b_r523', 'b5b_r524', 'b5b_r524_lainnya', 'b5b_r525', 'b5b_r526', 'b5b_r527', 'b5b_r528', 'b5b_r528_lainnya', 'b5b_r529', 'b5b_r530', 'b5b_r531', 'b5b_r531_lainnya', 'b5b_r532', 'b5b_r533', 'b5b_r534', 'b5b_r535', 'b5b_r535_lainnya', 'b6_r608a', 'b6_r609a', 'b7_r701', 'b7_r702', 'b7_r704', 'b7_r705_1', 'b7_r705_2', 'b7_r705_3', 'b7_r705_4', 'b7_r705_5', 'b7_r705_6', 'b7_r705_6lainnya', 'b7_r706', 'b7_r707', 'b7_r708', 'b7_r709_1', 'b7_r709_2', 'b7_r709_3', 'b7_r709_4a', 'b7_r709_4b', 'b7_r709_5', 'b7_r709_6', 'b7_r709_6lainnya', 'b7_r710', 'b7_r710_lainnya', 'b7_r711_1', 'b7_r711_2', 'b7_r711_3', 'b7_r711_4', 'b7_r711_5', 'b7_r711_6', 'b7_r711_6lainnya', 'b7_r712', 'b7_r713', 'b7_r714_1', 'b7_r714_2', 'b7_r714_3', 'b7_r714_4', 'b7_r714_4lainnya', 'b7_r715_1', 'b7_r715_2', 'b7_r715_3', 'b7_r715_4', 'b7_r715_5', 'b7_r715_6', 'b7_r715_6lainnya', 'b7_r716', 'b7_r717', 'b7_r717_lainnya', 'b7_r718', 'b7_r719', 'b7_r719_lainnya', 'b7_r720', 'b7_r721', 'b7_r722b', 'b7_r722b_lainnya', 'b8_r801', 'b8_r802', 'b8_r804', 'b8_r805', 'b8_r805_lainnya', 'b8_r806', 'b8_r806_lainnya', 'b8_r807', 'b9_r901', 'b9_r902', 'b9_r903', 'b9_r904', 'b9_r905', 'b9_r906', 'b9_r907', 'b9_r908', 'b10_r1002', 'b12_Catatan', 'jam_selesai', 'menit_selesai', 'b14_r1401', 'b15_r1501', 'b15_r1502', 'b15_r1503', 'b15_r1504', 'b15_r1505', 'b15_r1506', 'b15_r1507', 'b15_r1508', 'b15_r1509', 'b15_r1510', 'b15_r1511', 'Catatan_pemeriksa', 'b16_r1601', 'b16_r1602', 'b16_r1603_tgl', 'b16_r1603_bln', 'b16_r1604', 'status_dok', 'insert_by', 'clean_by', 'kode_operator', 'flag_dok', 'flag_krt', 'reserve1', 'reserve2', 'reserve3', 'reserve4', 'reserve5'], 'string'],
            [['nu', 'kom', 'b1_r116', 'b5a_r502', 'b5a_r503', 'b5a_r504', 'b5a_R505a', 'b5a_r505', 'b5a_r506', 'b5a_r507', 'b5a_r508', 'b6_r601', 'b6_r602', 'b6_r603', 'b6_r604i', 'b6_r605j', 'b6_r606h_k8', 'b6_r606h_k9', 'b6_r606h_k10', 'b6_r606p_k8', 'b6_r606p_k9', 'b6_r607', 'b6_r608b', 'b6_r608c', 'b6_r609b', 'b6_r609c', 'b6_r610', 'b6_r611', 'b6_r612_jumlah_k3', 'b6_r612_jumlah_k8', 'b6_r613', 'b6_r614', 'b6_r615', 'b7_r703_1', 'b7_r703_2', 'b7_r703_3', 'b7_r722a_1', 'b7_r722a_2', 'b7_r722a_3', 'b7_r722a_4', 'b8_r803', 'b10_r1001a_k2', 'b10_r1001a_k3', 'b10_r1001a_k4', 'b10_r1001a_k5', 'b10_r1001b_k2', 'b10_r1001b_k3', 'b10_r1001b_k4', 'b10_r1001b_k5', 'b10_r1001c_k2', 'b10_r1001c_k3', 'b10_r1001c_k4', 'b10_r1001c_k5', 'b10_r1001d_k2', 'b10_r1001d_k3', 'b10_r1001d_k4', 'b10_r1001d_k5', 'b10_r1001e_k2', 'b10_r1001e_k3', 'b10_r1001e_k5', 'b10_r1001f_k2', 'b10_r1001f_k3', 'b10_r1001f_k5', 'b11_r1101_k2_jumlah', 'b11_r1101_k3_jumlah', 'b11_r1101_k4_jumlah', 'b11_r1101_k5_jumlah', 'b14_r1402', 'b14_r1404', 'b14_r1405a_k2', 'b14_r1405a_k3', 'b14_r1405a_1k2', 'b14_r1405a_1k3', 'b14_r1405a_2k2', 'b14_r1405a_2k3', 'b14_r1405b_k2', 'b14_r1405b_k3', 'b14_r1405b_1k2', 'b14_r1405b_1k3', 'b14_r1405b_2k2', 'b14_r1405b_2k3', 'b14_r1405b_3k2', 'b14_r1405b_3k3', 'b14_r1405b_4k2', 'b14_r1405b_4k3', 'b14_r1405b_4i_k2', 'b14_r1405b_4i_k3', 'b14_r1405b_4ii_k2', 'b14_r1405b_4ii_k3', 'b14_r1405b_5k2', 'b14_r1405b_5k3', 'b14_r1405b_6k2', 'b14_r1405b_6k3', 'b14_r1405b_7k2', 'b14_r1405b_7k3', 'b14_r1405b_8k2', 'b14_r1405b_8k3', 'b14_r1405b_9k2', 'b14_r1405b_9k3', 'b14_r1405b_10k2', 'b14_r1405b_10k3', 'b14_r1405b_11k2', 'b14_r1405b_11k3', 'b14_r1405b_12k2', 'b14_r1405b_12k3', 'b14_r1405b_12i_k2', 'b14_r1405b_12i_k3', 'b14_r1405b_12ii_k2', 'b14_r1405b_12ii_k3', 'b14_r1405b_13k2', 'b14_r1405b_13k3', 'b14_r1405c_k2', 'b14_r1405c_k3', 'jumlah_entri'], 'integer'],
            [['b5a_r509', 'b14_r1403', 'b14_r1405d_k2', 'b14_r1405d_k3'], 'number'],
            [['start_entry', 'end_entry'], 'safe'],
            [['nu'], 'exist', 'skipOnError' => true, 'targetClass' => MRt::className(), 'targetAttribute' => ['nu' => 'nu']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_prov' => 'Kode Prov',
            'kode_kab' => 'Kode Kab',
            'kode_kec' => 'Kode Kec',
            'kode_desa' => 'Kode Desa',
            'nbs' => 'Nbs',
            'nu' => 'Nu',
            'kom' => 'Kom',
            'jam_pencacahan' => 'Jam Pencacahan',
            'menit' => 'Menit',
            'Kode_komoditas' => 'Kode Komoditas',
            'Nama_komoditas' => 'Nama Komoditas',
            'b1_r101' => 'B1 R101',
            'b1_r102' => 'B1 R102',
            'b1_r103' => 'B1 R103',
            'b1_r104' => 'B1 R104',
            'b1_r105' => 'B1 R105',
            'b1_r106' => 'B1 R106',
            'b1_r107' => 'B1 R107',
            'b1_r108' => 'B1 R108',
            'b1_r109' => 'B1 R109',
            'b1_r110' => 'B1 R110',
            'b1_r111' => 'B1 R111',
            'b1_r112' => 'B1 R112',
            'b1_r113' => 'B1 R113',
            'b1_r114' => 'B1 R114',
            'b1_r115' => 'B1 R115',
            'b1_r116' => 'B1 R116',
            'b2_r201' => 'B2 R201',
            'b2_r202' => 'B2 R202',
            'b2_r203_tgl' => 'B2 R203 Tgl',
            'b2_r203_bln' => 'B2 R203 Bln',
            'b2_r204' => 'B2 R204',
            'b3_r301' => 'B3 R301',
            'b4_r402' => 'B4 R402',
            'b5a_r501' => 'B5a R501',
            'b5a_r502' => 'B5a R502',
            'b5a_r503' => 'B5a R503',
            'b5a_r504' => 'B5a R504',
            'b5a_R505a' => 'B5a  R505a',
            'b5a_r505' => 'B5a R505',
            'b5a_r506' => 'B5a R506',
            'b5a_r507' => 'B5a R507',
            'b5a_r508' => 'B5a R508',
            'b5a_r509' => 'B5a R509',
            'b5b_r510' => 'B5b R510',
            'b5b_r511' => 'B5b R511',
            'b5b_r512' => 'B5b R512',
            'b5b_r512a' => 'B5b R512a',
            'b5b_r512b' => 'B5b R512b',
            'b5b_r512c' => 'B5b R512c',
            'b5b_r512d' => 'B5b R512d',
            'b5b_r513a' => 'B5b R513a',
            'b5b_r513b' => 'B5b R513b',
            'b5b_r514' => 'B5b R514',
            'b5b_r514_lain1' => 'B5b R514 Lain1',
            'b5b_r514_lain2' => 'B5b R514 Lain2',
            'b5b_r514_lain3' => 'B5b R514 Lain3',
            'b5b_r515' => 'B5b R515',
            'b5b_r515_lainnya' => 'B5b R515 Lainnya',
            'b5b_r516' => 'B5b R516',
            'b5b_r517' => 'B5b R517',
            'b5b_r518' => 'B5b R518',
            'b5b_r519' => 'B5b R519',
            'b5b_r520' => 'B5b R520',
            'b5b_r521' => 'B5b R521',
            'b5b_r522' => 'B5b R522',
            'b5b_r523' => 'B5b R523',
            'b5b_r524' => 'B5b R524',
            'b5b_r524_lainnya' => 'B5b R524 Lainnya',
            'b5b_r525' => 'B5b R525',
            'b5b_r526' => 'B5b R526',
            'b5b_r527' => 'B5b R527',
            'b5b_r528' => 'B5b R528',
            'b5b_r528_lainnya' => 'B5b R528 Lainnya',
            'b5b_r529' => 'B5b R529',
            'b5b_r530' => 'B5b R530',
            'b5b_r531' => 'B5b R531',
            'b5b_r531_lainnya' => 'B5b R531 Lainnya',
            'b5b_r532' => 'B5b R532',
            'b5b_r533' => 'B5b R533',
            'b5b_r534' => 'B5b R534',
            'b5b_r535' => 'B5b R535',
            'b5b_r535_lainnya' => 'B5b R535 Lainnya',
            'b6_r601' => 'B6 R601',
            'b6_r602' => 'B6 R602',
            'b6_r603' => 'B6 R603',
            'b6_r604i' => 'B6 R604i',
            'b6_r605j' => 'B6 R605j',
            'b6_r606h_k8' => 'B6 R606h K8',
            'b6_r606h_k9' => 'B6 R606h K9',
            'b6_r606h_k10' => 'B6 R606h K10',
            'b6_r606p_k8' => 'B6 R606p K8',
            'b6_r606p_k9' => 'B6 R606p K9',
            'b6_r607' => 'B6 R607',
            'b6_r608a' => 'B6 R608a',
            'b6_r608b' => 'B6 R608b',
            'b6_r608c' => 'B6 R608c',
            'b6_r609a' => 'B6 R609a',
            'b6_r609b' => 'B6 R609b',
            'b6_r609c' => 'B6 R609c',
            'b6_r610' => 'B6 R610',
            'b6_r611' => 'B6 R611',
            'b6_r612_jumlah_k3' => 'B6 R612 Jumlah K3',
            'b6_r612_jumlah_k8' => 'B6 R612 Jumlah K8',
            'b6_r613' => 'B6 R613',
            'b6_r614' => 'B6 R614',
            'b6_r615' => 'B6 R615',
            'b7_r701' => 'B7 R701',
            'b7_r702' => 'B7 R702',
            'b7_r703_1' => 'B7 R703 1',
            'b7_r703_2' => 'B7 R703 2',
            'b7_r703_3' => 'B7 R703 3',
            'b7_r704' => 'B7 R704',
            'b7_r705_1' => 'B7 R705 1',
            'b7_r705_2' => 'B7 R705 2',
            'b7_r705_3' => 'B7 R705 3',
            'b7_r705_4' => 'B7 R705 4',
            'b7_r705_5' => 'B7 R705 5',
            'b7_r705_6' => 'B7 R705 6',
            'b7_r705_6lainnya' => 'B7 R705 6lainnya',
            'b7_r706' => 'B7 R706',
            'b7_r707' => 'B7 R707',
            'b7_r708' => 'B7 R708',
            'b7_r709_1' => 'B7 R709 1',
            'b7_r709_2' => 'B7 R709 2',
            'b7_r709_3' => 'B7 R709 3',
            'b7_r709_4a' => 'B7 R709 4a',
            'b7_r709_4b' => 'B7 R709 4b',
            'b7_r709_5' => 'B7 R709 5',
            'b7_r709_6' => 'B7 R709 6',
            'b7_r709_6lainnya' => 'B7 R709 6lainnya',
            'b7_r710' => 'B7 R710',
            'b7_r710_lainnya' => 'B7 R710 Lainnya',
            'b7_r711_1' => 'B7 R711 1',
            'b7_r711_2' => 'B7 R711 2',
            'b7_r711_3' => 'B7 R711 3',
            'b7_r711_4' => 'B7 R711 4',
            'b7_r711_5' => 'B7 R711 5',
            'b7_r711_6' => 'B7 R711 6',
            'b7_r711_6lainnya' => 'B7 R711 6lainnya',
            'b7_r712' => 'B7 R712',
            'b7_r713' => 'B7 R713',
            'b7_r714_1' => 'B7 R714 1',
            'b7_r714_2' => 'B7 R714 2',
            'b7_r714_3' => 'B7 R714 3',
            'b7_r714_4' => 'B7 R714 4',
            'b7_r714_4lainnya' => 'B7 R714 4lainnya',
            'b7_r715_1' => 'B7 R715 1',
            'b7_r715_2' => 'B7 R715 2',
            'b7_r715_3' => 'B7 R715 3',
            'b7_r715_4' => 'B7 R715 4',
            'b7_r715_5' => 'B7 R715 5',
            'b7_r715_6' => 'B7 R715 6',
            'b7_r715_6lainnya' => 'B7 R715 6lainnya',
            'b7_r716' => 'B7 R716',
            'b7_r717' => 'B7 R717',
            'b7_r717_lainnya' => 'B7 R717 Lainnya',
            'b7_r718' => 'B7 R718',
            'b7_r719' => 'B7 R719',
            'b7_r719_lainnya' => 'B7 R719 Lainnya',
            'b7_r720' => 'B7 R720',
            'b7_r721' => 'B7 R721',
            'b7_r722a_1' => 'B7 R722a 1',
            'b7_r722a_2' => 'B7 R722a 2',
            'b7_r722a_3' => 'B7 R722a 3',
            'b7_r722a_4' => 'B7 R722a 4',
            'b7_r722b' => 'B7 R722b',
            'b7_r722b_lainnya' => 'B7 R722b Lainnya',
            'b8_r801' => 'B8 R801',
            'b8_r802' => 'B8 R802',
            'b8_r803' => 'B8 R803',
            'b8_r804' => 'B8 R804',
            'b8_r805' => 'B8 R805',
            'b8_r805_lainnya' => 'B8 R805 Lainnya',
            'b8_r806' => 'B8 R806',
            'b8_r806_lainnya' => 'B8 R806 Lainnya',
            'b8_r807' => 'B8 R807',
            'b9_r901' => 'B9 R901',
            'b9_r902' => 'B9 R902',
            'b9_r903' => 'B9 R903',
            'b9_r904' => 'B9 R904',
            'b9_r905' => 'B9 R905',
            'b9_r906' => 'B9 R906',
            'b9_r907' => 'B9 R907',
            'b9_r908' => 'B9 R908',
            'b10_r1001a_k2' => 'B10 R1001a K2',
            'b10_r1001a_k3' => 'B10 R1001a K3',
            'b10_r1001a_k4' => 'B10 R1001a K4',
            'b10_r1001a_k5' => 'B10 R1001a K5',
            'b10_r1001b_k2' => 'B10 R1001b K2',
            'b10_r1001b_k3' => 'B10 R1001b K3',
            'b10_r1001b_k4' => 'B10 R1001b K4',
            'b10_r1001b_k5' => 'B10 R1001b K5',
            'b10_r1001c_k2' => 'B10 R1001c K2',
            'b10_r1001c_k3' => 'B10 R1001c K3',
            'b10_r1001c_k4' => 'B10 R1001c K4',
            'b10_r1001c_k5' => 'B10 R1001c K5',
            'b10_r1001d_k2' => 'B10 R1001d K2',
            'b10_r1001d_k3' => 'B10 R1001d K3',
            'b10_r1001d_k4' => 'B10 R1001d K4',
            'b10_r1001d_k5' => 'B10 R1001d K5',
            'b10_r1001e_k2' => 'B10 R1001e K2',
            'b10_r1001e_k3' => 'B10 R1001e K3',
            'b10_r1001e_k5' => 'B10 R1001e K5',
            'b10_r1001f_k2' => 'B10 R1001f K2',
            'b10_r1001f_k3' => 'B10 R1001f K3',
            'b10_r1001f_k5' => 'B10 R1001f K5',
            'b10_r1002' => 'B10 R1002',
            'b11_r1101_k2_jumlah' => 'B11 R1101 K2 Jumlah',
            'b11_r1101_k3_jumlah' => 'B11 R1101 K3 Jumlah',
            'b11_r1101_k4_jumlah' => 'B11 R1101 K4 Jumlah',
            'b11_r1101_k5_jumlah' => 'B11 R1101 K5 Jumlah',
            'b12_Catatan' => 'B12  Catatan',
            'jam_selesai' => 'Jam Selesai',
            'menit_selesai' => 'Menit Selesai',
            'b14_r1401' => 'B14 R1401',
            'b14_r1402' => 'B14 R1402',
            'b14_r1403' => 'B14 R1403',
            'b14_r1404' => 'B14 R1404',
            'b14_r1405a_k2' => 'B14 R1405a K2',
            'b14_r1405a_k3' => 'B14 R1405a K3',
            'b14_r1405a_1k2' => 'B14 R1405a 1k2',
            'b14_r1405a_1k3' => 'B14 R1405a 1k3',
            'b14_r1405a_2k2' => 'B14 R1405a 2k2',
            'b14_r1405a_2k3' => 'B14 R1405a 2k3',
            'b14_r1405b_k2' => 'B14 R1405b K2',
            'b14_r1405b_k3' => 'B14 R1405b K3',
            'b14_r1405b_1k2' => 'B14 R1405b 1k2',
            'b14_r1405b_1k3' => 'B14 R1405b 1k3',
            'b14_r1405b_2k2' => 'B14 R1405b 2k2',
            'b14_r1405b_2k3' => 'B14 R1405b 2k3',
            'b14_r1405b_3k2' => 'B14 R1405b 3k2',
            'b14_r1405b_3k3' => 'B14 R1405b 3k3',
            'b14_r1405b_4k2' => 'B14 R1405b 4k2',
            'b14_r1405b_4k3' => 'B14 R1405b 4k3',
            'b14_r1405b_4i_k2' => 'B14 R1405b 4i K2',
            'b14_r1405b_4i_k3' => 'B14 R1405b 4i K3',
            'b14_r1405b_4ii_k2' => 'B14 R1405b 4ii K2',
            'b14_r1405b_4ii_k3' => 'B14 R1405b 4ii K3',
            'b14_r1405b_5k2' => 'B14 R1405b 5k2',
            'b14_r1405b_5k3' => 'B14 R1405b 5k3',
            'b14_r1405b_6k2' => 'B14 R1405b 6k2',
            'b14_r1405b_6k3' => 'B14 R1405b 6k3',
            'b14_r1405b_7k2' => 'B14 R1405b 7k2',
            'b14_r1405b_7k3' => 'B14 R1405b 7k3',
            'b14_r1405b_8k2' => 'B14 R1405b 8k2',
            'b14_r1405b_8k3' => 'B14 R1405b 8k3',
            'b14_r1405b_9k2' => 'B14 R1405b 9k2',
            'b14_r1405b_9k3' => 'B14 R1405b 9k3',
            'b14_r1405b_10k2' => 'B14 R1405b 10k2',
            'b14_r1405b_10k3' => 'B14 R1405b 10k3',
            'b14_r1405b_11k2' => 'B14 R1405b 11k2',
            'b14_r1405b_11k3' => 'B14 R1405b 11k3',
            'b14_r1405b_12k2' => 'B14 R1405b 12k2',
            'b14_r1405b_12k3' => 'B14 R1405b 12k3',
            'b14_r1405b_12i_k2' => 'B14 R1405b 12i K2',
            'b14_r1405b_12i_k3' => 'B14 R1405b 12i K3',
            'b14_r1405b_12ii_k2' => 'B14 R1405b 12ii K2',
            'b14_r1405b_12ii_k3' => 'B14 R1405b 12ii K3',
            'b14_r1405b_13k2' => 'B14 R1405b 13k2',
            'b14_r1405b_13k3' => 'B14 R1405b 13k3',
            'b14_r1405c_k2' => 'B14 R1405c K2',
            'b14_r1405c_k3' => 'B14 R1405c K3',
            'b14_r1405d_k2' => 'B14 R1405d K2',
            'b14_r1405d_k3' => 'B14 R1405d K3',
            'b15_r1501' => 'B15 R1501',
            'b15_r1502' => 'B15 R1502',
            'b15_r1503' => 'B15 R1503',
            'b15_r1504' => 'B15 R1504',
            'b15_r1505' => 'B15 R1505',
            'b15_r1506' => 'B15 R1506',
            'b15_r1507' => 'B15 R1507',
            'b15_r1508' => 'B15 R1508',
            'b15_r1509' => 'B15 R1509',
            'b15_r1510' => 'B15 R1510',
            'b15_r1511' => 'B15 R1511',
            'Catatan_pemeriksa' => 'Catatan Pemeriksa',
            'b16_r1601' => 'B16 R1601',
            'b16_r1602' => 'B16 R1602',
            'b16_r1603_tgl' => 'B16 R1603 Tgl',
            'b16_r1603_bln' => 'B16 R1603 Bln',
            'b16_r1604' => 'B16 R1604',
            'status_dok' => 'Status Dok',
            'insert_by' => 'Insert By',
            'clean_by' => 'Clean By',
            'kode_operator' => 'Kode Operator',
            'jumlah_entri' => 'Jumlah Entri',
            'start_entry' => 'Start Entry',
            'end_entry' => 'End Entry',
            'flag_dok' => 'Flag Dok',
            'flag_krt' => 'Flag Krt',
            'reserve1' => 'Reserve1',
            'reserve2' => 'Reserve2',
            'reserve3' => 'Reserve3',
            'reserve4' => 'Reserve4',
            'reserve5' => 'Reserve5',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNu0()
    {
        return $this->hasOne(MRt::className(), ['nu' => 'nu']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTRtTpArts()
    {
        return $this->hasMany(TRtTpArt::className(), ['kom' => 'kom']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTRtTpB1101s()
    {
        return $this->hasMany(TRtTpB1101::className(), ['kom' => 'kom']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTRtTpB612s()
    {
        return $this->hasMany(TRtTpB612::className(), ['kom' => 'kom']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTRtTpTabels()
    {
        return $this->hasMany(TRtTpTabel::className(), ['kom' => 'kom']);
    }
}
