<?php

namespace common\models;

use yii\db\ActiveRecord;


class Cargo extends ActiveRecord
{


    public static function tableName()
    {
        return '{{%crmvector_tbl}}';
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

        ];
    }

    public function attributeLabels()
    {
        return [

        ];
    }
}