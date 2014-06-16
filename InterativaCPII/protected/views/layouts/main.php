<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="logo">
    <a href="#"><img src="http://www.radiocp2interativa.com.br/wp-content/themes/blankslate/img/logo.png"/></a>
</div>
<div class="content">
	<div class="top_bar">
		<div class="menu-main-menu-container">
		<?php $this->widget('zii.widgets.CMenu',array(
			'htmlOptions'=>array(
				'id'=>'menu-main-menu',
				'class'=>'menu',
			),
			'itemCssClass'=>'menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-44',
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index'),
				),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div>
	</div><!-- mainmenu -->
	
	<div class="middle_bar">
		<div class="left_column">
			<div class="noticias">
	<?php echo $content; ?>

			</div>
		</div>
	</div>
	<div class="right_column">
<div class="social">
    <a target="_blank" href="https://twitter.com/cp2interativa"><img src="http://www.radiocp2interativa.com.br/wp-content/themes/blankslate/img/twitter_icon.png" alt="Twitter Radio Interativa"/></a>
    <a target="_blank" href="https://www.facebook.com/cp2interativa"><img src="http://www.radiocp2interativa.com.br/wp-content/themes/blankslate/img/facebook_icon.png" alt="Facebook Radio Interativa"/></a>
    <a target="_blank" href="https://www.youtube.com/channel/UC0qOMx4D_4nFe-6m-syQ7Hg"><img src="http://www.radiocp2interativa.com.br/wp-content/themes/blankslate/img/youtube_icon.png" alt="Youtube Radio Interativa"/></a>
</div>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
