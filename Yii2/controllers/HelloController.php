<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02.02.2019
 * Time: 23:40
 */

namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller {
    public function actionIndex() {
        echo 'index';exit;
    }
    public function actionWorld() {
        return $this->render('world',[
            'title' => 'Hello world',
            'content' => 'testhelloworld'
        ]);
    }

}