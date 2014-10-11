<?php

namespace app\controllers;

class PostController extends \yii\web\Controller
{
    public function actionListaPost(){
        return $this->render('index');
    }

}
