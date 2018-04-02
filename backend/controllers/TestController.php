<?php
/**
 * Created by PhpStorm.
 * User: thomaz
 * Date: 02/04/2018
 * Time: 01:15
 */

namespace backend\controllers;


use yii\web\Controller;

class TestController extends Controller
{

    public function actionIndex()
    {


        return $this->render('error', ['name'=>'fsdf', 'message' => 'deu ruim vagabundo']);
    }

    public function actionTest() {
        return "Ola mundo";
    }

}