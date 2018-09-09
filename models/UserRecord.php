<?php
namespace app\models;
use yii\db\ActiveRecord;
class UserRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    public function setTestUser()
    {
        $this->name = 'John';
        $this->email = 'mail@mail.rf';
        $this->passhash = 'sha512 hash hash hash !!!!';
        $this->status = 2;
    }
}