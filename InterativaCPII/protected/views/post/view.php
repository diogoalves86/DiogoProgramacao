<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>
	<div class="noticia">

		<div class="titulo">
			<a href="<?=Yii::app()->request->baseUrl;?>/index.php/post/<?=$model->id;?>">
				<?php echo CHtml::image($model->idImage, $model->title, array('class'=>'imageTitle')); ?>
				<h2><?php echo $model->title; ?></h2>
			</a>
			
		</div>
		<br />
		<div class="conteudo">
			<?php echo $model->message; ?>
			<br />
		</div>

		<div class="data">
			<p>Postado em:<?php echo CHtml::encode($model->creationTime); ?></p>
		</div>

		<b><?php echo CHtml::encode($model->getAttributeLabel('updateTime')); ?>:</b>
		<?php echo CHtml::encode($model->updateTime); ?>
		<br />


	</div>
