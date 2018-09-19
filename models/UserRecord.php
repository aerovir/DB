<?php
namespace app\models;
use Faker\Factory;
use yii\db\ActiveRecord;
require_once 'C:\OSPanel\domains\DobrayaBanya\vendor\fzaninotto\faker\src\autoload.php';
class UserRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @return array
     */
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