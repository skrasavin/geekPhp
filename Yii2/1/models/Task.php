<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.02.2019
 * Time: 11:35
 */

namespace app\models;


use yii\base\Model;
use app\components\validators\StatusValidator;

class Task extends Model {

    public $title;
    public $desc;
    public $status;

    public function rules() {

        return [
          [['title','desc'], 'required'],
          [['title'], 'string', 'max' => 10],
          [['desc'], 'string', 'min' => 5],
          [['status'],StatusValidator::className()],
        ];
    }

//    public function myValidate($attribute) {
//
//        if($this->$attribute > 3) {
//            $this->addError($attribute,'Определено только 3 состояния задачи');
//
//        }
//    }

}