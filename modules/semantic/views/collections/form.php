<?php
/* @var $this DefaultController */
$this->breadcrumbs=array(
	$this->module->id,
	Yii::app()->controller->id,
	Yii::app()->controller->action->id,
);


Yii::app()->clientScript->registerScript('semantic-ui-form', '
$(document).ready(function(){
	var dropdown 	= $(\'.main select.ui.dropdown\'),
		checkbox 	= $(\'.ui.checkbox\'),
    	handler;

  handler = {};
  dropdown.dropdown();
  checkbox.checkbox();
});');
?>
<h1 class="ui dividing header">Types</h1>
<div class="main">
	<div class="ui header">Form</div>
	<?php $form=$this->beginWidget('sui.widgets.SUIActiveForm',array(
		'id'=>'personal-info-form',
		//'fluid'=>true,
		//'size'=>'large',
		//'inverted'=>true,
		'segment'=>true,
		'appendCssClass'=>'ui icon input',
		'enableAjaxValidation'=>false,
	)); ?>
	<h4 class="ui dividing header">Personal Information</h4>
	<?php echo $form->errorSummary($model); ?>
	<div class="two fields">
		<div class="field">
			<div class="two fields">
				<?php echo $form->textInputField($model, 'firstname', array()); ?>
				<?php echo $form->textInputField($model, 'lastname', array()); ?>
			</div>
		</div>
		<div class="field">
			<?php echo $form->dropDownListField($model, 'gender', array('widgetOptions'=>array('data'=>array('male'=>'Male', 'female'=>'Female')))); ?>
		</div>
	</div>
	<div class="two fields">
		<?php echo $form->dropDownListField($model, 'state', array('widgetOptions'=>array('data'=>Form::getStates(), 'htmlOptions'=>array('class'=>'search')))); ?>
		<div class="field"></div>
	</div>
	<?php echo $form->textAreaField($model, 'biography', array()); ?>

	<h4 class="ui dividing header">Account Info</h4>
	<div class="two fields">
		<?php echo $form->textInputField($model, 'username', array('append'=>'<i class="user icon"></i>', 'appendOptions'=>array('class'=>'icon', 'isRaw'=>true))); ?>
		<?php echo $form->passwordInputField($model, 'password', array('append'=>'<i class="lock icon"></i>', 'appendOptions'=>array('class'=>'icon', 'isRaw'=>true))); ?>
	</div>

	<h4 class="ui top attached header">Import Settings</h4>
	<div class="ui bottom attached segment">
	<?php echo $form->radioButtonListField($model, 'importSetting', array(
		'widgetOptions'=>array('data'=>array('y'=>'Yes', 'n'=>'No')),
		'fieldOptions'=>array('class'=>'grouped')
	)); ?>
	</div>

	<h4 class="ui dividing header">Settings</h4>
	<?php echo $form->radioButtonListField($settings, 'privacy', array(
		'widgetOptions'=>array(
			'data'=>array(
				0=>'Allow <b>anyone</b> to see my account',
				1=>'Allow <b>only friends</b> to see my account'
			),
			'htmlOptions'=>array(
				'radioType'=>'toggle'
			)
		),
		'fieldOptions'=>array('class'=>'grouped')
	)); ?>
	<?php echo $form->checkboxListField($settings, 'newsletter', array(
		'widgetOptions'=>array(
			'data'=>array(
				0=>'Top Posts This Week',
				1=>'Hot Deals'
			),
			'htmlOptions'=>array(
				'checkboxOptions'=>array('class'=>'slider')
			)
		),
		'fieldOptions'=>array('class'=>'grouped')
	)); ?>
	<div class="ui hidden divider"></div>
	<?php echo $form->checkboxField($settings, 'toc', array()); ?>

	<?php $this->widget('sui.widgets.SUIButton', array(
		'type'=>'submit',
		'label'=>'Register',
	)); ?>
	<?php $this->endWidget(); ?>
</div>