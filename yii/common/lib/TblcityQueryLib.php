<?php

namespace common\lib;

/**
 * This is the ActiveQuery class for [[Tblcity]].
 *
 * @see Tblcity
 */
class TblcityQueryLib extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblcityLib[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblcityLib|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
