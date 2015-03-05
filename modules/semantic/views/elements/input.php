<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
	Yii::app()->controller->id,
	Yii::app()->controller->action->id,
);
?>
<h1 class="ui dividing header">Types</h1>
<div class="main">
	<div class="ui header">Input</div>
	<?php echo SUIHtml::textField('search', '', array('placeholder'=>'Search...')); ?>
</div>