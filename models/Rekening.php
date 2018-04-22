<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rekening".
 *
 * @property int $id
 * @property int $id_bank
 * @property string $atas_nama
 * @property string $nomor_rekening
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 */
class Rekening extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rekening';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_bank'], 'required'],
            [['id_bank', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['atas_nama'], 'string', 'max' => 255],
            [['nomor_rekening'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_bank' => 'Bank',
            'atas_nama' => 'Atas Nama',
            'nomor_rekening' => 'Nomor Rekening',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    public function getBank()
    {
        return $this->hasOne(Bank::className(), ['id' => 'id_bank']);
    }
}
