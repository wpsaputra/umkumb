<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_rt_ternak".
 *
 * @property string $kode_prov
 * @property string $kode_kab
 * @property string $kode_kec
 * @property string $kode_desa
 * @property string $nbs
 * @property integer $nu
 * @property integer $kom
 * @property string $B1_R100
 * @property string $B1_R101
 * @property string $B1_R102
 * @property string $B1_R103
 * @property string $B1_R104
 * @property string $B1_R105
 * @property string $B1_R106
 * @property string $B1_R107
 * @property string $B1_R108
 * @property string $B1_R109
 * @property string $B1_R110
 * @property integer $B1_R111
 * @property integer $B1_R112
 * @property string $B1_R113
 * @property string $B1_R114
 * @property string $B1_R115
 * @property string $B2_R201
 * @property string $B2_R202
 * @property string $B2_R203tgl
 * @property string $B2_R203bln
 * @property string $B2_R204
 * @property string $B3_R301
 * @property string $B4_R401
 * @property string $B4_R402
 * @property string $B4_R403a
 * @property string $B4_R403b
 * @property string $B4_R403c
 * @property string $B4_R403d
 * @property string $B4_R403ei
 * @property string $B4_R403eii
 * @property integer $B5_R501a
 * @property integer $B5_R501b1
 * @property integer $B5_R501b2
 * @property integer $B5_R501b3
 * @property integer $B5_R501b4
 * @property integer $B5_R501c
 * @property integer $B5_R501d
 * @property integer $B5_R502a
 * @property integer $B5_R502b
 * @property integer $B5_R502c
 * @property integer $B5_R502d
 * @property integer $B5_R502e
 * @property integer $B5_R503a
 * @property integer $B5_R503b
 * @property integer $B5_R503c
 * @property string $B5_R504a
 * @property string $B5_R504a_lainnya
 * @property string $B5_R504b
 * @property string $B5_R504c
 * @property integer $B5_R505o2
 * @property integer $R601a_jml_K2
 * @property integer $R601a_jml_K3
 * @property integer $R601a_jml_K4
 * @property integer $R601a_jml_K5
 * @property integer $R601a_jml_K6
 * @property integer $R601a_jml_K7
 * @property integer $B6_R601b1a
 * @property integer $B6_R601b1b
 * @property integer $B6_R601b2
 * @property integer $B6_R601b3
 * @property integer $R602a_jml_K2
 * @property integer $R602a_jml_K3
 * @property integer $R602a_jml_K4
 * @property integer $R602a_jml_K5
 * @property integer $R602a_jml_K6
 * @property integer $R602a_jml_K7
 * @property integer $R602a_jml_K8
 * @property integer $R602a_jml_K9
 * @property integer $R602a_jml_K10
 * @property integer $B6_R602b1
 * @property integer $B6_R602b1ai
 * @property integer $B6_R602b1aii
 * @property integer $B6_R602b1b
 * @property integer $B6_R602b1c
 * @property integer $B6_R602b2a
 * @property integer $B6_R602b2b
 * @property integer $B6_R602b3a_K2
 * @property integer $B6_R602b3a_K3
 * @property integer $B6_R602b3b_K2
 * @property integer $B6_R602b3b_K3
 * @property integer $B6_R602b3c_K2
 * @property integer $B6_R602b3c_K3
 * @property integer $B6_R602b3d_K2
 * @property integer $B6_R602b3d_K3
 * @property integer $B6_R602b3e_K2
 * @property integer $B6_R602b4
 * @property integer $B6_R602b5a
 * @property integer $B6_R602b5b
 * @property integer $B6_R602b6
 * @property integer $B6_R602c1
 * @property integer $B6_R602c2
 * @property integer $R701a_jml_K3
 * @property integer $R701a_jml_K5
 * @property integer $R701b_jml_K3
 * @property integer $R701b_jml_K5
 * @property integer $R702_jml_K4
 * @property integer $R702_jml_K6
 * @property integer $B7_R703a_K2
 * @property integer $B7_R703a_K3
 * @property integer $B7_R703a_K4
 * @property integer $B7_R703a_K5
 * @property integer $B7_R703b_K2
 * @property integer $B7_R703b_K3
 * @property integer $B7_R703b_K4
 * @property integer $B7_R703b_K5
 * @property integer $B7_R703c_K2
 * @property integer $B7_R703c_K3
 * @property integer $B7_R703c_K4
 * @property integer $B7_R703c_K5
 * @property integer $B7_R703d_K2
 * @property integer $B7_R703d_K3
 * @property integer $B7_R703d_K4
 * @property integer $B7_R703d_K5
 * @property integer $R704_jml_K4
 * @property integer $R704_jml_K6
 * @property integer $R705_jml_K2
 * @property integer $R705_jml_K3
 * @property integer $B8_R801a
 * @property integer $B8_R801b1
 * @property string $B8_R801b2
 * @property string $B8_R801c
 * @property integer $B8_R801d
 * @property string $B8_R801e
 * @property string $B8_R801f
 * @property string $B8_R801g
 * @property integer $B8_R801h1
 * @property string $B8_R801h2
 * @property integer $B8_R801i
 * @property integer $B8_R802a
 * @property string $B8_R802b
 * @property string $B8_R802c
 * @property string $B8_R802d
 * @property integer $B8_R802e
 * @property integer $B8_R803a_K2
 * @property integer $B8_R803a_K3
 * @property integer $B8_R803b_K2
 * @property integer $B8_R803b_K3
 * @property integer $B8_R803c_K2
 * @property integer $B8_R803c_K3
 * @property integer $B8_R803d_K2
 * @property integer $B8_R803d_K3
 * @property integer $B8_R803e_K2
 * @property integer $B8_R803e_K3
 * @property integer $B8_R803f_K2
 * @property integer $B8_R803f_K3
 * @property integer $B8_R803g_K2
 * @property integer $B8_R803g_K3
 * @property integer $B8_R803h_K2
 * @property integer $B8_R803i_K2
 * @property integer $B8_R803i_K3
 * @property integer $B8_R803j_K2
 * @property integer $B8_R803j_K3
 * @property integer $B8_R803k_K3
 * @property integer $B8_R803l_K3
 * @property integer $R804_jml_K3
 * @property integer $R804_jml_K4
 * @property integer $R804_jml_K5
 * @property integer $R804_jml_K6
 * @property integer $R804_jml_K7
 * @property integer $R804_jml_K8
 * @property integer $R804_jml_K9
 * @property integer $B8_R805a_K2
 * @property integer $B8_R805a_K3
 * @property integer $B8_R805a_K4
 * @property integer $B8_R805a_K5
 * @property integer $B8_R805b_K2
 * @property integer $B8_R805b_K3
 * @property integer $B8_R805b_K4
 * @property integer $B8_R805b_K5
 * @property integer $B8_R805c_K2
 * @property integer $B8_R805c_K3
 * @property integer $B8_R805c_K4
 * @property integer $B8_R805c_K5
 * @property integer $B8_R805d_K2
 * @property integer $B8_R805d_K3
 * @property integer $B8_R805d_K4
 * @property integer $B8_R805d_K5
 * @property integer $B8_R806a_K2
 * @property integer $B8_R806a_K3
 * @property integer $B8_R806a_K4
 * @property integer $B8_R806b1_K2
 * @property integer $B8_R806b1_K3
 * @property integer $B8_R806b1_K4
 * @property integer $B8_R806b2_K2
 * @property integer $B8_R806b2_K3
 * @property integer $B8_R806b2_K4
 * @property integer $B8_R806c_K2
 * @property integer $B8_R806c_K3
 * @property integer $B8_R806c_K4
 * @property string $B8_R807a1_K2
 * @property integer $B8_R807a1_K3
 * @property integer $B8_R807a1_K4
 * @property string $B8_R807a2_K2
 * @property integer $B8_R807a2_K3
 * @property integer $B8_R807a2_K4
 * @property string $B8_R807a3_K2
 * @property integer $B8_R807a3_K3
 * @property integer $B8_R807a3_K4
 * @property string $B8_R807a4_K2
 * @property integer $B8_R807a4_K3
 * @property integer $B8_R807a4_K4
 * @property string $B8_R807a5_K2
 * @property integer $B8_R807a5_K3
 * @property integer $B8_R807a5_K4
 * @property integer $B8_R807a6_K4
 * @property integer $B8_R807b_K4
 * @property string $B8_R807c_K2
 * @property integer $B8_R807c_K3
 * @property integer $B8_R807c_K4
 * @property integer $B8_R807d_K4
 * @property string $B9_R901a
 * @property string $B9_R901b
 * @property string $B9_R901c
 * @property string $B9_R901c_lainnya
 * @property string $B9_R902a
 * @property string $B9_R902bi
 * @property string $B9_R902bi_lainnya
 * @property string $B9_R902bii
 * @property string $B9_R902bii_lainnya
 * @property string $B9_R902c
 * @property string $B9_R902d
 * @property string $B9_R902d_lainnya
 * @property string $B9_R903a
 * @property string $B9_R903b
 * @property string $B9_R903b_lainnya
 * @property integer $B9_R903c_K1
 * @property string $B9_R903c_K2
 * @property string $B9_R903c_K3
 * @property string $B9_R903c_K4
 * @property string $B9_R903c_K5
 * @property string $B9_R903c_K6
 * @property string $B9_R903c_K7
 * @property string $B9_R903c_K8
 * @property string $B9_R903c_K9
 * @property string $B9_R903c_K10
 * @property string $B9_R903c_K11
 * @property string $B9_R903c_K12
 * @property double $B9_R904a1
 * @property double $B9_R904a2
 * @property double $B9_R904a3
 * @property double $B9_R904a4
 * @property double $B9_R904a5
 * @property double $B9_R904a6
 * @property double $B9_R904a7
 * @property double $B9_R904a8
 * @property double $B9_R904a9
 * @property double $B9_R904a10
 * @property double $B9_R904b
 * @property double $B9_R904c
 * @property double $B9_R904d
 * @property double $B9_R904e
 * @property double $B9_R904f
 * @property string $B9_R904g
 * @property string $B9_R905
 * @property double $B9_R906a
 * @property double $B9_R906b
 * @property double $B9_R906c
 * @property string $B9_R907a
 * @property string $B9_R907b
 * @property string $B9_R907b_lainnya
 * @property string $B9_R908a
 * @property string $B9_R908b
 * @property string $B10_R1001a
 * @property integer $B10_R1001b_1
 * @property integer $B10_R1001b_2
 * @property string $B10_R1001c
 * @property string $B10_R1001c_lainnya
 * @property string $B10_R1002a
 * @property string $B10_R1002b
 * @property string $B10_R1002ci
 * @property string $B10_R1002cii
 * @property string $B10_R1002ciii
 * @property string $B10_R1002civ
 * @property string $B10_R1002cv
 * @property string $B10_R1002cvi
 * @property string $B10_R1002cvi_lainnya
 * @property string $B10_R1003a
 * @property integer $B10_R1003b_1
 * @property integer $B10_R1003b_2
 * @property string $B10_R1003c
 * @property string $B10_R1003c_lainnya
 * @property string $B10_R1004a
 * @property string $B10_R1004b
 * @property string $B10_R1004ci
 * @property string $B10_R1004cii
 * @property string $B10_R1004ciii
 * @property string $B10_R1004civ
 * @property string $B10_R1004cv
 * @property string $B10_R1004cvi
 * @property string $B10_R1004cvii
 * @property string $B10_R1004cvii_lainnya
 * @property string $B10_R1005a
 * @property string $B10_R1005b
 * @property string $B10_R1005b_lainnya
 * @property integer $B10_R1006a
 * @property string $B10_R1006a_lainnya
 * @property string $B10_R1006b
 * @property string $B10_R1006b_lainnya
 * @property string $B10_R1006c
 * @property string $B10_R1006c_lainnya
 * @property string $B10_R1007a
 * @property string $B10_R1007b
 * @property string $B10_R1007b_lainnya
 * @property integer $B10_R1007c_1
 * @property integer $B10_R1007c_2
 * @property string $B10_R1007d
 * @property string $B10_R1007d_lainnya
 * @property string $B10_R1007e
 * @property string $B10_R1007e_lainnya
 * @property string $B10_R1008a
 * @property string $B10_R1008b
 * @property string $B11_R1101
 * @property string $B11_R1102
 * @property string $B11_R1103
 * @property string $B11_R1104
 * @property string $B11_R1105
 * @property string $B11_R1106
 * @property string $B11_R1107
 * @property string $B11_R1107_lainnya
 * @property string $B11_R1108
 * @property string $B11_R1108_lainnya
 * @property string $B11_R1109
 * @property string $CATATAN
 * @property integer $B12_R1201
 * @property integer $B12_R1201a_1
 * @property integer $B12_R1201a_2
 * @property integer $B12_R1201b
 * @property integer $B12_R1201c
 * @property integer $B12_R1201d
 * @property integer $B12_R1201e
 * @property integer $B12_R1201f
 * @property integer $B12_R1202
 * @property integer $B12_R1202a_1
 * @property integer $B12_R1202a_2
 * @property integer $B12_R1202a_3
 * @property integer $B12_R1202a_4
 * @property integer $B12_R1202b
 * @property integer $B12_R1202c
 * @property integer $B12_R1202d
 * @property integer $B12_R1202e
 * @property integer $B12_R1202f
 * @property string $PEMERIKSA
 * @property string $B14_R1401
 * @property string $B14_R1402
 * @property string $B14_R1403tgl
 * @property string $B14_R1403bln
 * @property string $B14_R1404
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
 * @property TRtTernakB601[] $tRtTernakB601s
 * @property TRtTernakB602[] $tRtTernakB602s
 * @property TRtTernakB8[] $tRtTernakB8s
 * @property TRtTernakTabel[] $tRtTernakTabels
 */
class TRtTernak extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_rt_ternak';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_prov', 'kode_kab', 'kode_kec', 'kode_desa', 'nbs', 'nu', 'kom'], 'required'],
            [['kode_prov', 'kode_kab', 'kode_kec', 'kode_desa', 'nbs', 'B1_R100', 'B1_R101', 'B1_R102', 'B1_R103', 'B1_R104', 'B1_R105', 'B1_R106', 'B1_R107', 'B1_R108', 'B1_R109', 'B1_R110', 'B1_R113', 'B1_R114', 'B1_R115', 'B2_R201', 'B2_R202', 'B2_R203tgl', 'B2_R203bln', 'B2_R204', 'B3_R301', 'B4_R401', 'B4_R402', 'B4_R403a', 'B4_R403b', 'B4_R403c', 'B4_R403d', 'B4_R403ei', 'B4_R403eii', 'B5_R504a', 'B5_R504a_lainnya', 'B5_R504b', 'B5_R504c', 'B8_R801b2', 'B8_R801c', 'B8_R801e', 'B8_R801f', 'B8_R801g', 'B8_R801h2', 'B8_R802b', 'B8_R802c', 'B8_R802d', 'B8_R807a1_K2', 'B8_R807a2_K2', 'B8_R807a3_K2', 'B8_R807a4_K2', 'B8_R807a5_K2', 'B8_R807c_K2', 'B9_R901a', 'B9_R901b', 'B9_R901c', 'B9_R901c_lainnya', 'B9_R902a', 'B9_R902bi', 'B9_R902bi_lainnya', 'B9_R902bii', 'B9_R902bii_lainnya', 'B9_R902c', 'B9_R902d', 'B9_R902d_lainnya', 'B9_R903a', 'B9_R903b', 'B9_R903b_lainnya', 'B9_R903c_K2', 'B9_R903c_K3', 'B9_R903c_K4', 'B9_R903c_K5', 'B9_R903c_K6', 'B9_R903c_K7', 'B9_R903c_K8', 'B9_R903c_K9', 'B9_R903c_K10', 'B9_R903c_K11', 'B9_R903c_K12', 'B9_R904g', 'B9_R905', 'B9_R907a', 'B9_R907b', 'B9_R907b_lainnya', 'B9_R908a', 'B9_R908b', 'B10_R1001a', 'B10_R1001c', 'B10_R1001c_lainnya', 'B10_R1002a', 'B10_R1002b', 'B10_R1002ci', 'B10_R1002cii', 'B10_R1002ciii', 'B10_R1002civ', 'B10_R1002cv', 'B10_R1002cvi', 'B10_R1002cvi_lainnya', 'B10_R1003a', 'B10_R1003c', 'B10_R1003c_lainnya', 'B10_R1004a', 'B10_R1004b', 'B10_R1004ci', 'B10_R1004cii', 'B10_R1004ciii', 'B10_R1004civ', 'B10_R1004cv', 'B10_R1004cvi', 'B10_R1004cvii', 'B10_R1004cvii_lainnya', 'B10_R1005a', 'B10_R1005b', 'B10_R1005b_lainnya', 'B10_R1006a_lainnya', 'B10_R1006b', 'B10_R1006b_lainnya', 'B10_R1006c', 'B10_R1006c_lainnya', 'B10_R1007a', 'B10_R1007b', 'B10_R1007b_lainnya', 'B10_R1007d', 'B10_R1007d_lainnya', 'B10_R1007e', 'B10_R1007e_lainnya', 'B10_R1008a', 'B10_R1008b', 'B11_R1101', 'B11_R1102', 'B11_R1103', 'B11_R1104', 'B11_R1105', 'B11_R1106', 'B11_R1107', 'B11_R1107_lainnya', 'B11_R1108', 'B11_R1108_lainnya', 'B11_R1109', 'CATATAN', 'PEMERIKSA', 'B14_R1401', 'B14_R1402', 'B14_R1403tgl', 'B14_R1403bln', 'B14_R1404', 'status_dok', 'insert_by', 'clean_by', 'kode_operator', 'flag_dok', 'flag_krt', 'reserve1', 'reserve2', 'reserve3', 'reserve4', 'reserve5'], 'string'],
            [['nu', 'kom', 'B1_R111', 'B1_R112', 'B5_R501a', 'B5_R501b1', 'B5_R501b2', 'B5_R501b3', 'B5_R501b4', 'B5_R501c', 'B5_R501d', 'B5_R502a', 'B5_R502b', 'B5_R502c', 'B5_R502d', 'B5_R502e', 'B5_R503a', 'B5_R503b', 'B5_R503c', 'B5_R505o2', 'R601a_jml_K2', 'R601a_jml_K3', 'R601a_jml_K4', 'R601a_jml_K5', 'R601a_jml_K6', 'R601a_jml_K7', 'B6_R601b1a', 'B6_R601b1b', 'B6_R601b2', 'B6_R601b3', 'R602a_jml_K2', 'R602a_jml_K3', 'R602a_jml_K4', 'R602a_jml_K5', 'R602a_jml_K6', 'R602a_jml_K7', 'R602a_jml_K8', 'R602a_jml_K9', 'R602a_jml_K10', 'B6_R602b1', 'B6_R602b1ai', 'B6_R602b1aii', 'B6_R602b1b', 'B6_R602b1c', 'B6_R602b2a', 'B6_R602b2b', 'B6_R602b3a_K2', 'B6_R602b3a_K3', 'B6_R602b3b_K2', 'B6_R602b3b_K3', 'B6_R602b3c_K2', 'B6_R602b3c_K3', 'B6_R602b3d_K2', 'B6_R602b3d_K3', 'B6_R602b3e_K2', 'B6_R602b4', 'B6_R602b5a', 'B6_R602b5b', 'B6_R602b6', 'B6_R602c1', 'B6_R602c2', 'R701a_jml_K3', 'R701a_jml_K5', 'R701b_jml_K3', 'R701b_jml_K5', 'R702_jml_K4', 'R702_jml_K6', 'B7_R703a_K2', 'B7_R703a_K3', 'B7_R703a_K4', 'B7_R703a_K5', 'B7_R703b_K2', 'B7_R703b_K3', 'B7_R703b_K4', 'B7_R703b_K5', 'B7_R703c_K2', 'B7_R703c_K3', 'B7_R703c_K4', 'B7_R703c_K5', 'B7_R703d_K2', 'B7_R703d_K3', 'B7_R703d_K4', 'B7_R703d_K5', 'R704_jml_K4', 'R704_jml_K6', 'R705_jml_K2', 'R705_jml_K3', 'B8_R801a', 'B8_R801b1', 'B8_R801d', 'B8_R801h1', 'B8_R801i', 'B8_R802a', 'B8_R802e', 'B8_R803a_K2', 'B8_R803a_K3', 'B8_R803b_K2', 'B8_R803b_K3', 'B8_R803c_K2', 'B8_R803c_K3', 'B8_R803d_K2', 'B8_R803d_K3', 'B8_R803e_K2', 'B8_R803e_K3', 'B8_R803f_K2', 'B8_R803f_K3', 'B8_R803g_K2', 'B8_R803g_K3', 'B8_R803h_K2', 'B8_R803i_K2', 'B8_R803i_K3', 'B8_R803j_K2', 'B8_R803j_K3', 'B8_R803k_K3', 'B8_R803l_K3', 'R804_jml_K3', 'R804_jml_K4', 'R804_jml_K5', 'R804_jml_K6', 'R804_jml_K7', 'R804_jml_K8', 'R804_jml_K9', 'B8_R805a_K2', 'B8_R805a_K3', 'B8_R805a_K4', 'B8_R805a_K5', 'B8_R805b_K2', 'B8_R805b_K3', 'B8_R805b_K4', 'B8_R805b_K5', 'B8_R805c_K2', 'B8_R805c_K3', 'B8_R805c_K4', 'B8_R805c_K5', 'B8_R805d_K2', 'B8_R805d_K3', 'B8_R805d_K4', 'B8_R805d_K5', 'B8_R806a_K2', 'B8_R806a_K3', 'B8_R806a_K4', 'B8_R806b1_K2', 'B8_R806b1_K3', 'B8_R806b1_K4', 'B8_R806b2_K2', 'B8_R806b2_K3', 'B8_R806b2_K4', 'B8_R806c_K2', 'B8_R806c_K3', 'B8_R806c_K4', 'B8_R807a1_K3', 'B8_R807a1_K4', 'B8_R807a2_K3', 'B8_R807a2_K4', 'B8_R807a3_K3', 'B8_R807a3_K4', 'B8_R807a4_K3', 'B8_R807a4_K4', 'B8_R807a5_K3', 'B8_R807a5_K4', 'B8_R807a6_K4', 'B8_R807b_K4', 'B8_R807c_K3', 'B8_R807c_K4', 'B8_R807d_K4', 'B9_R903c_K1', 'B10_R1001b_1', 'B10_R1001b_2', 'B10_R1003b_1', 'B10_R1003b_2', 'B10_R1006a', 'B10_R1007c_1', 'B10_R1007c_2', 'B12_R1201', 'B12_R1201a_1', 'B12_R1201a_2', 'B12_R1201b', 'B12_R1201c', 'B12_R1201d', 'B12_R1201e', 'B12_R1201f', 'B12_R1202', 'B12_R1202a_1', 'B12_R1202a_2', 'B12_R1202a_3', 'B12_R1202a_4', 'B12_R1202b', 'B12_R1202c', 'B12_R1202d', 'B12_R1202e', 'B12_R1202f', 'jumlah_entri'], 'integer'],
            [['B9_R904a1', 'B9_R904a2', 'B9_R904a3', 'B9_R904a4', 'B9_R904a5', 'B9_R904a6', 'B9_R904a7', 'B9_R904a8', 'B9_R904a9', 'B9_R904a10', 'B9_R904b', 'B9_R904c', 'B9_R904d', 'B9_R904e', 'B9_R904f', 'B9_R906a', 'B9_R906b', 'B9_R906c'], 'number'],
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
            'B1_R100' => 'B1  R100',
            'B1_R101' => 'B1  R101',
            'B1_R102' => 'B1  R102',
            'B1_R103' => 'B1  R103',
            'B1_R104' => 'B1  R104',
            'B1_R105' => 'B1  R105',
            'B1_R106' => 'B1  R106',
            'B1_R107' => 'B1  R107',
            'B1_R108' => 'B1  R108',
            'B1_R109' => 'B1  R109',
            'B1_R110' => 'B1  R110',
            'B1_R111' => 'B1  R111',
            'B1_R112' => 'B1  R112',
            'B1_R113' => 'B1  R113',
            'B1_R114' => 'B1  R114',
            'B1_R115' => 'B1  R115',
            'B2_R201' => 'B2  R201',
            'B2_R202' => 'B2  R202',
            'B2_R203tgl' => 'B2  R203tgl',
            'B2_R203bln' => 'B2  R203bln',
            'B2_R204' => 'B2  R204',
            'B3_R301' => 'B3  R301',
            'B4_R401' => 'B4  R401',
            'B4_R402' => 'B4  R402',
            'B4_R403a' => 'B4  R403a',
            'B4_R403b' => 'B4  R403b',
            'B4_R403c' => 'B4  R403c',
            'B4_R403d' => 'B4  R403d',
            'B4_R403ei' => 'B4  R403ei',
            'B4_R403eii' => 'B4  R403eii',
            'B5_R501a' => 'B5  R501a',
            'B5_R501b1' => 'B5  R501b1',
            'B5_R501b2' => 'B5  R501b2',
            'B5_R501b3' => 'B5  R501b3',
            'B5_R501b4' => 'B5  R501b4',
            'B5_R501c' => 'B5  R501c',
            'B5_R501d' => 'B5  R501d',
            'B5_R502a' => 'B5  R502a',
            'B5_R502b' => 'B5  R502b',
            'B5_R502c' => 'B5  R502c',
            'B5_R502d' => 'B5  R502d',
            'B5_R502e' => 'B5  R502e',
            'B5_R503a' => 'B5  R503a',
            'B5_R503b' => 'B5  R503b',
            'B5_R503c' => 'B5  R503c',
            'B5_R504a' => 'B5  R504a',
            'B5_R504a_lainnya' => 'B5  R504a Lainnya',
            'B5_R504b' => 'B5  R504b',
            'B5_R504c' => 'B5  R504c',
            'B5_R505o2' => 'B5  R505o2',
            'R601a_jml_K2' => 'R601a Jml  K2',
            'R601a_jml_K3' => 'R601a Jml  K3',
            'R601a_jml_K4' => 'R601a Jml  K4',
            'R601a_jml_K5' => 'R601a Jml  K5',
            'R601a_jml_K6' => 'R601a Jml  K6',
            'R601a_jml_K7' => 'R601a Jml  K7',
            'B6_R601b1a' => 'B6  R601b1a',
            'B6_R601b1b' => 'B6  R601b1b',
            'B6_R601b2' => 'B6  R601b2',
            'B6_R601b3' => 'B6  R601b3',
            'R602a_jml_K2' => 'R602a Jml  K2',
            'R602a_jml_K3' => 'R602a Jml  K3',
            'R602a_jml_K4' => 'R602a Jml  K4',
            'R602a_jml_K5' => 'R602a Jml  K5',
            'R602a_jml_K6' => 'R602a Jml  K6',
            'R602a_jml_K7' => 'R602a Jml  K7',
            'R602a_jml_K8' => 'R602a Jml  K8',
            'R602a_jml_K9' => 'R602a Jml  K9',
            'R602a_jml_K10' => 'R602a Jml  K10',
            'B6_R602b1' => 'B6  R602b1',
            'B6_R602b1ai' => 'B6  R602b1ai',
            'B6_R602b1aii' => 'B6  R602b1aii',
            'B6_R602b1b' => 'B6  R602b1b',
            'B6_R602b1c' => 'B6  R602b1c',
            'B6_R602b2a' => 'B6  R602b2a',
            'B6_R602b2b' => 'B6  R602b2b',
            'B6_R602b3a_K2' => 'B6  R602b3a  K2',
            'B6_R602b3a_K3' => 'B6  R602b3a  K3',
            'B6_R602b3b_K2' => 'B6  R602b3b  K2',
            'B6_R602b3b_K3' => 'B6  R602b3b  K3',
            'B6_R602b3c_K2' => 'B6  R602b3c  K2',
            'B6_R602b3c_K3' => 'B6  R602b3c  K3',
            'B6_R602b3d_K2' => 'B6  R602b3d  K2',
            'B6_R602b3d_K3' => 'B6  R602b3d  K3',
            'B6_R602b3e_K2' => 'B6  R602b3e  K2',
            'B6_R602b4' => 'B6  R602b4',
            'B6_R602b5a' => 'B6  R602b5a',
            'B6_R602b5b' => 'B6  R602b5b',
            'B6_R602b6' => 'B6  R602b6',
            'B6_R602c1' => 'B6  R602c1',
            'B6_R602c2' => 'B6  R602c2',
            'R701a_jml_K3' => 'R701a Jml  K3',
            'R701a_jml_K5' => 'R701a Jml  K5',
            'R701b_jml_K3' => 'R701b Jml  K3',
            'R701b_jml_K5' => 'R701b Jml  K5',
            'R702_jml_K4' => 'R702 Jml  K4',
            'R702_jml_K6' => 'R702 Jml  K6',
            'B7_R703a_K2' => 'B7  R703a  K2',
            'B7_R703a_K3' => 'B7  R703a  K3',
            'B7_R703a_K4' => 'B7  R703a  K4',
            'B7_R703a_K5' => 'B7  R703a  K5',
            'B7_R703b_K2' => 'B7  R703b  K2',
            'B7_R703b_K3' => 'B7  R703b  K3',
            'B7_R703b_K4' => 'B7  R703b  K4',
            'B7_R703b_K5' => 'B7  R703b  K5',
            'B7_R703c_K2' => 'B7  R703c  K2',
            'B7_R703c_K3' => 'B7  R703c  K3',
            'B7_R703c_K4' => 'B7  R703c  K4',
            'B7_R703c_K5' => 'B7  R703c  K5',
            'B7_R703d_K2' => 'B7  R703d  K2',
            'B7_R703d_K3' => 'B7  R703d  K3',
            'B7_R703d_K4' => 'B7  R703d  K4',
            'B7_R703d_K5' => 'B7  R703d  K5',
            'R704_jml_K4' => 'R704 Jml  K4',
            'R704_jml_K6' => 'R704 Jml  K6',
            'R705_jml_K2' => 'R705 Jml  K2',
            'R705_jml_K3' => 'R705 Jml  K3',
            'B8_R801a' => 'B8  R801a',
            'B8_R801b1' => 'B8  R801b1',
            'B8_R801b2' => 'B8  R801b2',
            'B8_R801c' => 'B8  R801c',
            'B8_R801d' => 'B8  R801d',
            'B8_R801e' => 'B8  R801e',
            'B8_R801f' => 'B8  R801f',
            'B8_R801g' => 'B8  R801g',
            'B8_R801h1' => 'B8  R801h1',
            'B8_R801h2' => 'B8  R801h2',
            'B8_R801i' => 'B8  R801i',
            'B8_R802a' => 'B8  R802a',
            'B8_R802b' => 'B8  R802b',
            'B8_R802c' => 'B8  R802c',
            'B8_R802d' => 'B8  R802d',
            'B8_R802e' => 'B8  R802e',
            'B8_R803a_K2' => 'B8  R803a  K2',
            'B8_R803a_K3' => 'B8  R803a  K3',
            'B8_R803b_K2' => 'B8  R803b  K2',
            'B8_R803b_K3' => 'B8  R803b  K3',
            'B8_R803c_K2' => 'B8  R803c  K2',
            'B8_R803c_K3' => 'B8  R803c  K3',
            'B8_R803d_K2' => 'B8  R803d  K2',
            'B8_R803d_K3' => 'B8  R803d  K3',
            'B8_R803e_K2' => 'B8  R803e  K2',
            'B8_R803e_K3' => 'B8  R803e  K3',
            'B8_R803f_K2' => 'B8  R803f  K2',
            'B8_R803f_K3' => 'B8  R803f  K3',
            'B8_R803g_K2' => 'B8  R803g  K2',
            'B8_R803g_K3' => 'B8  R803g  K3',
            'B8_R803h_K2' => 'B8  R803h  K2',
            'B8_R803i_K2' => 'B8  R803i  K2',
            'B8_R803i_K3' => 'B8  R803i  K3',
            'B8_R803j_K2' => 'B8  R803j  K2',
            'B8_R803j_K3' => 'B8  R803j  K3',
            'B8_R803k_K3' => 'B8  R803k  K3',
            'B8_R803l_K3' => 'B8  R803l  K3',
            'R804_jml_K3' => 'R804 Jml  K3',
            'R804_jml_K4' => 'R804 Jml  K4',
            'R804_jml_K5' => 'R804 Jml  K5',
            'R804_jml_K6' => 'R804 Jml  K6',
            'R804_jml_K7' => 'R804 Jml  K7',
            'R804_jml_K8' => 'R804 Jml  K8',
            'R804_jml_K9' => 'R804 Jml  K9',
            'B8_R805a_K2' => 'B8  R805a  K2',
            'B8_R805a_K3' => 'B8  R805a  K3',
            'B8_R805a_K4' => 'B8  R805a  K4',
            'B8_R805a_K5' => 'B8  R805a  K5',
            'B8_R805b_K2' => 'B8  R805b  K2',
            'B8_R805b_K3' => 'B8  R805b  K3',
            'B8_R805b_K4' => 'B8  R805b  K4',
            'B8_R805b_K5' => 'B8  R805b  K5',
            'B8_R805c_K2' => 'B8  R805c  K2',
            'B8_R805c_K3' => 'B8  R805c  K3',
            'B8_R805c_K4' => 'B8  R805c  K4',
            'B8_R805c_K5' => 'B8  R805c  K5',
            'B8_R805d_K2' => 'B8  R805d  K2',
            'B8_R805d_K3' => 'B8  R805d  K3',
            'B8_R805d_K4' => 'B8  R805d  K4',
            'B8_R805d_K5' => 'B8  R805d  K5',
            'B8_R806a_K2' => 'B8  R806a  K2',
            'B8_R806a_K3' => 'B8  R806a  K3',
            'B8_R806a_K4' => 'B8  R806a  K4',
            'B8_R806b1_K2' => 'B8  R806b1  K2',
            'B8_R806b1_K3' => 'B8  R806b1  K3',
            'B8_R806b1_K4' => 'B8  R806b1  K4',
            'B8_R806b2_K2' => 'B8  R806b2  K2',
            'B8_R806b2_K3' => 'B8  R806b2  K3',
            'B8_R806b2_K4' => 'B8  R806b2  K4',
            'B8_R806c_K2' => 'B8  R806c  K2',
            'B8_R806c_K3' => 'B8  R806c  K3',
            'B8_R806c_K4' => 'B8  R806c  K4',
            'B8_R807a1_K2' => 'B8  R807a1  K2',
            'B8_R807a1_K3' => 'B8  R807a1  K3',
            'B8_R807a1_K4' => 'B8  R807a1  K4',
            'B8_R807a2_K2' => 'B8  R807a2  K2',
            'B8_R807a2_K3' => 'B8  R807a2  K3',
            'B8_R807a2_K4' => 'B8  R807a2  K4',
            'B8_R807a3_K2' => 'B8  R807a3  K2',
            'B8_R807a3_K3' => 'B8  R807a3  K3',
            'B8_R807a3_K4' => 'B8  R807a3  K4',
            'B8_R807a4_K2' => 'B8  R807a4  K2',
            'B8_R807a4_K3' => 'B8  R807a4  K3',
            'B8_R807a4_K4' => 'B8  R807a4  K4',
            'B8_R807a5_K2' => 'B8  R807a5  K2',
            'B8_R807a5_K3' => 'B8  R807a5  K3',
            'B8_R807a5_K4' => 'B8  R807a5  K4',
            'B8_R807a6_K4' => 'B8  R807a6  K4',
            'B8_R807b_K4' => 'B8  R807b  K4',
            'B8_R807c_K2' => 'B8  R807c  K2',
            'B8_R807c_K3' => 'B8  R807c  K3',
            'B8_R807c_K4' => 'B8  R807c  K4',
            'B8_R807d_K4' => 'B8  R807d  K4',
            'B9_R901a' => 'B9  R901a',
            'B9_R901b' => 'B9  R901b',
            'B9_R901c' => 'B9  R901c',
            'B9_R901c_lainnya' => 'B9  R901c Lainnya',
            'B9_R902a' => 'B9  R902a',
            'B9_R902bi' => 'B9  R902bi',
            'B9_R902bi_lainnya' => 'B9  R902bi Lainnya',
            'B9_R902bii' => 'B9  R902bii',
            'B9_R902bii_lainnya' => 'B9  R902bii Lainnya',
            'B9_R902c' => 'B9  R902c',
            'B9_R902d' => 'B9  R902d',
            'B9_R902d_lainnya' => 'B9  R902d Lainnya',
            'B9_R903a' => 'B9  R903a',
            'B9_R903b' => 'B9  R903b',
            'B9_R903b_lainnya' => 'B9  R903b Lainnya',
            'B9_R903c_K1' => 'B9  R903c  K1',
            'B9_R903c_K2' => 'B9  R903c  K2',
            'B9_R903c_K3' => 'B9  R903c  K3',
            'B9_R903c_K4' => 'B9  R903c  K4',
            'B9_R903c_K5' => 'B9  R903c  K5',
            'B9_R903c_K6' => 'B9  R903c  K6',
            'B9_R903c_K7' => 'B9  R903c  K7',
            'B9_R903c_K8' => 'B9  R903c  K8',
            'B9_R903c_K9' => 'B9  R903c  K9',
            'B9_R903c_K10' => 'B9  R903c  K10',
            'B9_R903c_K11' => 'B9  R903c  K11',
            'B9_R903c_K12' => 'B9  R903c  K12',
            'B9_R904a1' => 'B9  R904a1',
            'B9_R904a2' => 'B9  R904a2',
            'B9_R904a3' => 'B9  R904a3',
            'B9_R904a4' => 'B9  R904a4',
            'B9_R904a5' => 'B9  R904a5',
            'B9_R904a6' => 'B9  R904a6',
            'B9_R904a7' => 'B9  R904a7',
            'B9_R904a8' => 'B9  R904a8',
            'B9_R904a9' => 'B9  R904a9',
            'B9_R904a10' => 'B9  R904a10',
            'B9_R904b' => 'B9  R904b',
            'B9_R904c' => 'B9  R904c',
            'B9_R904d' => 'B9  R904d',
            'B9_R904e' => 'B9  R904e',
            'B9_R904f' => 'B9  R904f',
            'B9_R904g' => 'B9  R904g',
            'B9_R905' => 'B9  R905',
            'B9_R906a' => 'B9  R906a',
            'B9_R906b' => 'B9  R906b',
            'B9_R906c' => 'B9  R906c',
            'B9_R907a' => 'B9  R907a',
            'B9_R907b' => 'B9  R907b',
            'B9_R907b_lainnya' => 'B9  R907b Lainnya',
            'B9_R908a' => 'B9  R908a',
            'B9_R908b' => 'B9  R908b',
            'B10_R1001a' => 'B10  R1001a',
            'B10_R1001b_1' => 'B10  R1001b 1',
            'B10_R1001b_2' => 'B10  R1001b 2',
            'B10_R1001c' => 'B10  R1001c',
            'B10_R1001c_lainnya' => 'B10  R1001c Lainnya',
            'B10_R1002a' => 'B10  R1002a',
            'B10_R1002b' => 'B10  R1002b',
            'B10_R1002ci' => 'B10  R1002ci',
            'B10_R1002cii' => 'B10  R1002cii',
            'B10_R1002ciii' => 'B10  R1002ciii',
            'B10_R1002civ' => 'B10  R1002civ',
            'B10_R1002cv' => 'B10  R1002cv',
            'B10_R1002cvi' => 'B10  R1002cvi',
            'B10_R1002cvi_lainnya' => 'B10  R1002cvi Lainnya',
            'B10_R1003a' => 'B10  R1003a',
            'B10_R1003b_1' => 'B10  R1003b 1',
            'B10_R1003b_2' => 'B10  R1003b 2',
            'B10_R1003c' => 'B10  R1003c',
            'B10_R1003c_lainnya' => 'B10  R1003c Lainnya',
            'B10_R1004a' => 'B10  R1004a',
            'B10_R1004b' => 'B10  R1004b',
            'B10_R1004ci' => 'B10  R1004ci',
            'B10_R1004cii' => 'B10  R1004cii',
            'B10_R1004ciii' => 'B10  R1004ciii',
            'B10_R1004civ' => 'B10  R1004civ',
            'B10_R1004cv' => 'B10  R1004cv',
            'B10_R1004cvi' => 'B10  R1004cvi',
            'B10_R1004cvii' => 'B10  R1004cvii',
            'B10_R1004cvii_lainnya' => 'B10  R1004cvii Lainnya',
            'B10_R1005a' => 'B10  R1005a',
            'B10_R1005b' => 'B10  R1005b',
            'B10_R1005b_lainnya' => 'B10  R1005b Lainnya',
            'B10_R1006a' => 'B10  R1006a',
            'B10_R1006a_lainnya' => 'B10  R1006a Lainnya',
            'B10_R1006b' => 'B10  R1006b',
            'B10_R1006b_lainnya' => 'B10  R1006b Lainnya',
            'B10_R1006c' => 'B10  R1006c',
            'B10_R1006c_lainnya' => 'B10  R1006c Lainnya',
            'B10_R1007a' => 'B10  R1007a',
            'B10_R1007b' => 'B10  R1007b',
            'B10_R1007b_lainnya' => 'B10  R1007b Lainnya',
            'B10_R1007c_1' => 'B10  R1007c 1',
            'B10_R1007c_2' => 'B10  R1007c 2',
            'B10_R1007d' => 'B10  R1007d',
            'B10_R1007d_lainnya' => 'B10  R1007d Lainnya',
            'B10_R1007e' => 'B10  R1007e',
            'B10_R1007e_lainnya' => 'B10  R1007e Lainnya',
            'B10_R1008a' => 'B10  R1008a',
            'B10_R1008b' => 'B10  R1008b',
            'B11_R1101' => 'B11  R1101',
            'B11_R1102' => 'B11  R1102',
            'B11_R1103' => 'B11  R1103',
            'B11_R1104' => 'B11  R1104',
            'B11_R1105' => 'B11  R1105',
            'B11_R1106' => 'B11  R1106',
            'B11_R1107' => 'B11  R1107',
            'B11_R1107_lainnya' => 'B11  R1107 Lainnya',
            'B11_R1108' => 'B11  R1108',
            'B11_R1108_lainnya' => 'B11  R1108 Lainnya',
            'B11_R1109' => 'B11  R1109',
            'CATATAN' => 'Catatan',
            'B12_R1201' => 'B12  R1201',
            'B12_R1201a_1' => 'B12  R1201a 1',
            'B12_R1201a_2' => 'B12  R1201a 2',
            'B12_R1201b' => 'B12  R1201b',
            'B12_R1201c' => 'B12  R1201c',
            'B12_R1201d' => 'B12  R1201d',
            'B12_R1201e' => 'B12  R1201e',
            'B12_R1201f' => 'B12  R1201f',
            'B12_R1202' => 'B12  R1202',
            'B12_R1202a_1' => 'B12  R1202a 1',
            'B12_R1202a_2' => 'B12  R1202a 2',
            'B12_R1202a_3' => 'B12  R1202a 3',
            'B12_R1202a_4' => 'B12  R1202a 4',
            'B12_R1202b' => 'B12  R1202b',
            'B12_R1202c' => 'B12  R1202c',
            'B12_R1202d' => 'B12  R1202d',
            'B12_R1202e' => 'B12  R1202e',
            'B12_R1202f' => 'B12  R1202f',
            'PEMERIKSA' => 'Pemeriksa',
            'B14_R1401' => 'B14  R1401',
            'B14_R1402' => 'B14  R1402',
            'B14_R1403tgl' => 'B14  R1403tgl',
            'B14_R1403bln' => 'B14  R1403bln',
            'B14_R1404' => 'B14  R1404',
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
    public function getTRtTernakB601s()
    {
        return $this->hasMany(TRtTernakB601::className(), ['kom' => 'kom']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTRtTernakB602s()
    {
        return $this->hasMany(TRtTernakB602::className(), ['kom' => 'kom']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTRtTernakB8s()
    {
        return $this->hasMany(TRtTernakB8::className(), ['kom' => 'kom']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTRtTernakTabels()
    {
        return $this->hasMany(TRtTernakTabel::className(), ['kom' => 'kom']);
    }
}
