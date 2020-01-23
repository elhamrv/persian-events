<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Tblcity]].
 *
 * @see Tblcity
 */
class TblcityQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Tblcity[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Tblcity|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
