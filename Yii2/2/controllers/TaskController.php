<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.02.2019
 * Time: 22:07
 */

namespace app\controllers;


use app\models\Task;
use yii\web\Controller;

class TaskController extends Controller
{
    public function actionTestModel()
    {
        $model = new Task();

        $model->setAttributes([
            'title' => 'taskTitle',
            'desc' => 'descTitle',
            'status' => 5
        ]);

//        print_r($model->validate());
        var_dump($model->validate());
        var_dump($model->getErrors());
        exit;
    }
}