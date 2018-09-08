<?php
/**
 * Created by PhpStorm.
 * User: aerovir
 * Date: 06.09.18
 * Time: 15:39
 */

namespace app\controllers;
use yii\web\Controller;
use yii;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}