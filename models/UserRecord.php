<?php
namespace app\models;
use Faker\Factory;
use yii\db\ActiveRecord;
class UserRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    public function setTestUser()
    {
        $faker = Factory::create();
        $user = [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => $faker->password,
        $this->status = 2
        ];
        return $user;
    }
}