<?php


namespace app\controllers;


use app\models\UserIdentity;
use app\models\UserJoinForm;
use app\models\UserRecord;
use yii;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionJoin()
    {
//        $userRecord = new UserRecord();
//        $userRecord->setTestUser();
//        $userRecord->save();

        $userJoinForm = new UserJoinForm();
        return $this->render('join', compact('userJoinForm'));
    }

    public function actionLogin()
    {
        $uid = UserIdentity::findIdentity(mt_rand(1, 10));
        Yii::$app->user->login($uid);
        return $this->render('login');
    }

    public function actionDatapage()
    {
        return $this->render('datapage');
    }
}