<?php

class Image
{
    public $binaryImage;

    public function __construct(){
    }
    
    public function rules()
    {
        return array(
                array('binaryImage', 'file', 'types' => 'jpg, gif, png'),
        );
    }

    public function changeName($idpost)
    {
    	$ext = pathinfo($this->binaryImage, PATHINFO_EXTENSION);
		return $idpost . '.' . $ext;
    }
}
