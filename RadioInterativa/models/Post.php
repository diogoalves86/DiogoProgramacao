<?php

namespace app\models;

use Yii;
use app\components as Components;

/**
 * This is the model class for table "Post".
 *
 * @property integer $id
 * @property integer $idUser
 * @property string $idImage
 * @property string $title
 * @property string $message
 * @property string $creationTime
 * @property string $updateTime
 *
 * @property User $idUser0
 */
class Post extends \yii\base\Model
{
    public function rules()
    {
        return [
            [['idUser', 'idImage', 'title', 'message', 'creationTime'], 'required'],
            [['idUser'], 'integer'],
            [['message'], 'string'],
            [['creationTime', 'updateTime'], 'safe'],
            [['idImage', 'title'], 'string', 'max' => 400]
        ];
    }

    /**
     * @inheritdoc
     */
    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idUser' => 'Id User',
            'idImage' => 'Id Image',
            'title' => 'Titulo',
            'message' => 'Conteúdo',
            'creationTime' => 'Data de publicação',
            'updateTime' => 'Data de atualização',
        ];
    }

    public function convertJSONData(){
        $JsonClass = new Components\WordpressJSONData('http://www.radiocp2interativa.com.br/api/get_recent_posts/');
        $jsonData = json_decode($JsonClass->getRecentPosts());
        return $jsonData;
    }
}
