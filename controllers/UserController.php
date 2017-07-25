<?php

namespace frontend\controllers;

use common\models\User;
use common\models\LoginForm;
use yii\rest\ActiveController;
USE Yii;

class UserController extends ActiveController {

    public $modelClass = 'common\models\User';

    public function actions() {
        $actions = parent::actions();
        unset($actions['create']);
        return $actions;
    }

    public function actionSignup() {
        $user = new User();
        $user->attributes = Yii::$app->request->post();
        $user->setPassword($user->password);
        $user->generateAuthKey();
        if ($user->save()) {
            return $user;
        } else {

            return null;
        }
    }

    public function actionSignin() {


        $model = new LoginForm();
        $model->attributes = Yii::$app->request->post();

        if ($model->login()) {
            return User::findOne(\Yii::$app->user->identity->id);
        } else {
            return Yii::$app->request->post();
        }
    }

//    public function actions() {
//        $actions = parent::actions();
//
//        // disable the "delete" and "create" actions
//        unset($actions['delete'], $actions['view'], $actions['update']);
//
//        // customize the data provider preparation with the "prepareDataProvider()" method
////    $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
//
//        return $actions;
//    }
//    public function actionCreate() {
//        $user = new User();
//        $params = $_REQUEST;
//
//
//        $user->attributes = $params;
//
//        $user->setPassword($user->password);
//        $user->generateAuthKey();
//        if ($user->save()) {
//            return $user;
//        } else {
//            return "sdfsd";
//        }
//    }
}
