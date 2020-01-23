<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tblcity".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $code
 * @property int|null $country_id
 */
class Tblcity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblcity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'country_id'], 'integer'],
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'code' => Yii::t('app', 'Code'),
            'country_id' => Yii::t('app', 'Country ID'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TblcityQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblcityQuery(get_called_class());
    }
}
