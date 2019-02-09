<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.02.2019
 * Time: 20:25
 */

namespace app\controllers;

use app\models\tables\Users;
use yii\db\Query;
use yii\web\Controller;

class DbController extends Controller
{


    public function actionIndex()
    {
        $db = \Yii::$app->db;
        print_r($db->createCommand('SELECT * FROM `users`')
            ->queryAll());

        $test = $db;

        exit;
    }
    public function actionAr() {

//        $user = new Users();
//        $user = Users::find()->all();



    }

}