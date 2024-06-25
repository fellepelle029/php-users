<?php

namespace app\models;

use yii\db\ActiveRecord;

class Users extends ActiveRecord
{

    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            [['firstName', 'lastName'], 'required'],
            [['firstName', 'lastName'], 'string', 'max' => 255],
        ];
    }

}