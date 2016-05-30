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

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<input type="hidden" id="baseUrl" value="<?php echo Yii::app()->getRequest()->getBaseUrl(); ?>" >
<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); ?><!-- breadcrumbs -->

	<div class="container">
		<div id="content">
		<?php echo $content; ?>
		</div><!-- content -->
	</div>

	<div id="footer">
		Романов Никита<br/>
<!--		--><?php //echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->


<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/scripts.js"></script>
</body>
</html>