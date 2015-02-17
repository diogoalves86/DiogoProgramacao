<?php

/**
 * This is the model class for table "Noticia".
 *
 * The followings are the available columns in table 'Noticia':
 * @property integer $id
 * @property integer $idAutor
 * @property integer $idCategoria
 * @property string $data
 * @property string $titulo
 * @property string $conteudo
 *
 * The followings are the available model relations:
 * @property Categoria $idCategoria0
 * @property Administrador $idAutor0
 */
class Noticia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Noticia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idAutor, idCategoria, data, titulo, conteudo', 'required'),
			array('idAutor, idCategoria', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>400),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idAutor, idCategoria, data, titulo, conteudo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idCategoria0' => array(self::BELONGS_TO, 'Categoria', 'idCategoria'),
			'idAutor0' => array(self::BELONGS_TO, 'Administrador', 'idAutor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idAutor' => 'Id Autor',
			'idCategoria' => 'Id Categoria',
			'data' => 'Data',
			'titulo' => 'Titulo',
			'conteudo' => 'Conteudo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('idAutor',$this->idAutor);
		$criteria->compare('idCategoria',$this->idCategoria);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('conteudo',$this->conteudo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Noticia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
