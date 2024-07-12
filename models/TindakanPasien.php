<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan_pasien".
 *
 * @property int $id
 * @property int $id_pendaftaran
 * @property int $id_tindakan
 * @property int $jumlah
 *
 * @property Pendaftaran $pendaftaran
 * @property Tindakan $tindakan
 */
class TindakanPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pendaftaran', 'id_tindakan', 'jumlah'], 'required'],
            [['id_pendaftaran', 'id_tindakan', 'jumlah'], 'integer'],
            [['id_pendaftaran'], 'exist', 'skipOnError' => true, 'targetClass' => Pendaftaran::class, 'targetAttribute' => ['id_pendaftaran' => 'id']],
            [['id_tindakan'], 'exist', 'skipOnError' => true, 'targetClass' => Tindakan::class, 'targetAttribute' => ['id_tindakan' => 'id']],
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
            'id_tindakan' => 'Id Tindakan',
            'jumlah' => 'Jumlah',
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

    /**
     * Gets query for [[Tindakan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindakan()
    {
        return $this->hasOne(Tindakan::class, ['id' => 'id_tindakan']);
    }
}
