<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="noticia">

	<div class="titulo">
		<a href="<?=Yii::app()->request->baseUrl;?>/index.php/post/<?=$data->id;?>">
			<?php echo CHtml::image($data->idImage, $data->title, array('class'=>'imageTitle')); ?>
			<h2><?php echo $data->title; ?></h2>
		</a>
		
	</div>
	<br />
	<div class="conteudo">
		<?php echo $data->message; ?>
		<br />
	</div>

	<div class="data">
		<p>Postado em:<?php echo CHtml::encode($data->creationTime); ?></p>
	</div>

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateTime')); ?>:</b>
	<?php echo CHtml::encode($data->updateTime); ?>
	<br />


</div>