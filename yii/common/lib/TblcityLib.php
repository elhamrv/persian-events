<?php

namespace common\lib;

use Yii;

/**
 * This is the model class for table "tblcity".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $code
 * @property int|null $country_id
 */
class TblcityLib extends \common\models\Tblcity
{
    

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
     * @return TblcityQueryLib the active query used by this AR class.
     */
    public static function find()
    {
        return new TblcityQueryLib(get_called_class());
    }
}
