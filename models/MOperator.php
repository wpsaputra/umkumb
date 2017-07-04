<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "m_operator".
 *
 * @property string $id_operator
 * @property string $kode_prov
 * @property string $kode_kab
 * @property string $kode_op
 * @property string $username
 * @property string $password
 * @property string $realname
 * @property string $userlevel
 */
class MOperator extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_operator';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_operator', 'kode_prov', 'kode_kab', 'kode_op', 'username', 'password', 'realname', 'userlevel'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_operator' => 'Id Operator',
            'kode_prov' => 'Kode Prov',
            'kode_kab' => 'Kode Kab',
            'kode_op' => 'Kode Op',
            'username' => 'Username',
            'password' => 'Password',
            'realname' => 'Realname',
            'userlevel' => 'Userlevel',
        ];
    }
}
