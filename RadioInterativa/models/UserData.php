<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $login
 * @property string $password
 * @property string $creationTime
 * @property string $updateTime
 *
 * @property Post[] $posts
 */
class UserData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'login', 'password', 'creationTime'], 'required'],
            [['creationTime', 'updateTime'], 'safe'],
            [['name', 'email', 'password'], 'string', 'max' => 300],
            [['login'], 'string', 'max' => 400]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'login' => 'Login',
            'password' => 'Password',
            'creationTime' => 'Creation Time',
            'updateTime' => 'Update Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['idUser' => 'id']);
    }
}
