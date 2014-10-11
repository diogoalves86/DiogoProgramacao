<?php

namespace app\models;

use Yii;

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
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Post';
    }

    /**
     * @inheritdoc
     */
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
            'title' => 'Title',
            'message' => 'Message',
            'creationTime' => 'Creation Time',
            'updateTime' => 'Update Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser0()
    {
        return $this->hasOne(User::className(), ['id' => 'idUser']);
    }
}
