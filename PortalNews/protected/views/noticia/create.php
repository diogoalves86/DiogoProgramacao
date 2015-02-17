<?php
/* @var $this NoticiaController */
/* @var $model Noticia */

$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Noticia', 'url'=>array('index')),
	array('label'=>'Manage Noticia', 'url'=>array('admin')),
);
?>

<h1>Create Noticia</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'autores'=>$autores, 'categorias'=>$categorias)); ?>