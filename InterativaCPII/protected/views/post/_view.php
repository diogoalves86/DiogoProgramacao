<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="noticia">

	<div class="titulo">
		<h2><?php echo CHtml::encode($data->title); ?></h2>
		<?php echo CHtml::image($data->idImage, $data->title); ?>
		
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