<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengarang".
 *
 * @property int $id
 * @property string $nama
 * @property string $email
 * @property string $biografi
 */
class Pengarang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pengarang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'email', 'biografi'], 'required'],
            [['biografi'], 'string'],
            [['nama', 'email'], 'string', 'max' => 30],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'email' => 'Email',
            'biografi' => 'Biografi',
        ];
    }
}
