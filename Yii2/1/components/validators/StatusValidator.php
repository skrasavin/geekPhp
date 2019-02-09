<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.02.2019
 * Time: 22:38
 */
namespace app\components\validators;
use yii\validators\Validator;

class StatusValidator extends Validator
{
    public function validateAttribute($model, $attribute) {
        $value = $model->$attribute;
        print_r($attribute);

        if($value > 3) {
            $model->addError($attribute,'Определено только 3 состояния задачи');
        }
    }
}
