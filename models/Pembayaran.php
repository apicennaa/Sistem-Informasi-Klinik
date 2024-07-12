<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembayaran".
 *
 * @property int $id
 * @property int $id_pendaftaran
 * @property float $total_biaya
 * @property string $tanggal
 *
 * @property Pendaftaran $pendaftaran
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pendaftaran', 'total_biaya', 'tanggal'], 'required'],
            [['id_pendaftaran'], 'integer'],
            [['total_biaya'], 'number'],
            [['tanggal'], 'safe'],
            [['id_pendaftaran'], 'exist', 'skipOnError' => true, 'targetClass' => Pendaftaran::class, 'targetAttribute' => ['id_pendaftaran' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pendaftaran' => 'Id Pendaftaran',
            'total_biaya' => 'Total Biaya',
            'tanggal' => 'Tanggal',
        ];
    }

    /**
     * Gets query for [[Pendaftaran]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPendaftaran()
    {
        return $this->hasOne(Pendaftaran::class, ['id' => 'id_pendaftaran']);
    }
}
