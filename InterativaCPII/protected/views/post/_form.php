<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="page">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<p>
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'title'); ?>
	</p>
	<p>
		<?php $this->widget('CMultiFileUpload',
		 	array(
				'model'=>$model,
					'attribute'=>'binaryImage',
					'accept'=>'jpg|jpeg|png',
			)); 
		?>
	</p>
	<p>
		<select name="comboUsers">
			<?php for ($i=0; $i < count($users); $i++):?>
				<option value="<?=$users[$i]['id']; ?>"><?=$users[$i]['name']; ?></option>
			<?php endfor; ?>
		</select>
	</p>

	<p>
		<?php echo $form->labelEx($model,'message'); ?>
		<br>
		<?php echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'message'); ?>
	</p>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->