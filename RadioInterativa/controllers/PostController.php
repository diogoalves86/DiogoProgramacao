<?php

namespace app\controllers;

use app\models as Models;

class PostController extends \yii\web\Controller
{
    public function actionView(){
        $Model = new Models\Post();
        $jsonData = $Model->convertJSONData();
        $posts = $jsonData->posts;
        return $this->render('view', ['jsonData'=>$jsonData, 'posts'=>$posts]);
    }


}
