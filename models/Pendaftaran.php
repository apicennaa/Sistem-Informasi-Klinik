<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendaftaran".
 *
 * @property int $id
 * @property int $id_pasien
 * @property string $tanggal
 * @property string $keluhan
 *
 * @property Pasien $pasien
 * @property Pembayaran[] $pembayarans
 * @property TindakanPasien[] $tindakanPasiens
 */
class Pendaftaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendaftaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'tanggal', 'keluhan'], 'required'],
            [['id_pasien'], 'integer'],
            [['tanggal'], 'safe'],
            [['keluhan'], 'string'],
            [['id_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['id_pasien' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pasien' => 'Id Pasien',
            'tanggal' => 'Tanggal',
            'keluhan' => 'Keluhan',
        ];
    }

    /**
     * Gets query for [[Pasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasien()
    {
        return $this->hasOne(Pasien::class, ['id' => 'id_pasien']);
    }

    /**
     * Gets query for [[Pembayarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembayarans()
    {
        return $this->hasMany(Pembayaran::class, ['id_pendaftaran' => 'id']);
    }

    /**
     * Gets query for [[TindakanPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindakanPasiens()
    {
        return $this->hasMany(TindakanPasien::class, ['id_pendaftaran' => 'id']);
    }
}
