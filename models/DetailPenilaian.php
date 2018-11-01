<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%detailpenilaian}}".
 *
 * @property int $idpenilaian
 * @property int $idkriteriaPoint
 * @property double $point
 * @property double $nilaiNormalisasi
 * @property double $nilaiMatrik
 *
 * @property Kriteriapoint $kriteriaPoint
 * @property Penilaian $penilaian
 */
class DetailPenilaian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%detailpenilaian}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpenilaian', 'idkriteriaPoint', 'point', 'nilaiNormalisasi', 'nilaiMatrik'], 'required'],
            [['idpenilaian', 'idkriteriaPoint'], 'integer'],
            [['point', 'nilaiNormalisasi', 'nilaiMatrik'], 'number'],
            [['idkriteriaPoint'], 'exist', 'skipOnError' => true, 'targetClass' => Kriteriapoint::className(), 'targetAttribute' => ['idkriteriaPoint' => 'id']],
            [['idpenilaian'], 'exist', 'skipOnError' => true, 'targetClass' => Penilaian::className(), 'targetAttribute' => ['idpenilaian' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpenilaian' => 'Idpenilaian',
            'idkriteriaPoint' => 'Idkriteria Point',
            'point' => 'Point',
            'nilaiNormalisasi' => 'Nilai Normalisasi',
            'nilaiMatrik' => 'Nilai Matrik',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKriteriaPoint()
    {
        return $this->hasOne(Kriteriapoint::className(), ['id' => 'idkriteriaPoint']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaian()
    {
        return $this->hasOne(Penilaian::className(), ['id' => 'idpenilaian']);
    }
}
