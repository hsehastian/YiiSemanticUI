<?php
/**
 * SUIActiveForm class file.
 */
class SUIActiveForm extends CActiveForm
{
	// Allowed form size
	const FORM_SIZE_NORMAL 	= '';
	const FORM_SIZE_SMALL 	= 'small';
	const FORM_SIZE_LARGE 	= 'large';

	protected static $sizeClasses = array (
		self::FORM_SIZE_NORMAL => '',
		self::FORM_SIZE_SMALL => 'small',
		self::FORM_SIZE_LARGE => 'large',
	);

	/**
	 * The form size
	 * A form can also be small or large.
	 * @var string
	 */
	public $size = self::FORM_SIZE_NORMAL;
	
	/**
	 * Make the form width fluid
	 * A form can take the width of its container.
	 * @var string
	 */
	public $fluid = false;
	
	/**
	 * Invert the form background color schema
	 * A form on a dark background may have to invert its color scheme.
	 * @var string
	 */
	public $inverted = false;

	/**
	 * Enabling segment on the form
	 * A segment is used to create a grouping of related content.
	 * @var string
	 */
	public $segment = false;

	/**
	 * Whether to render field error after input. Only for vertical and horizontal types.
	 * @var bool
	 */
	public $showErrors = true;

	/**
	 * Prepend wrapper CSS class.
	 * @var string
	 */
	public $prependCssClass = 'ui input';

	/**
	 * Append wrapper CSS class.
	 * @var string
	 */
	public $appendCssClass = 'ui input';
	
	/**
	 * Tag for wrapping field with prepended and/or appended data.
	 * @var string
	 */
	public $addOnWrapperTag = 'div';

	/**
	 * Add-on CSS class.
	 * @var string
	 */
	public $addOnCssClass = 'addon';

	/**
	 * Add-on wrapper tag.
	 * @var string
	 */
	public $addOnTag = 'div';

	/**
	 * Initializes the widget.
	 * This renders the form open tag.
	 */
	public function init() {

		Yii::app()->getClientScript()->registerPackage('form');

		self::addCssClass($this->htmlOptions, 'ui form');

		if ($this->fluid) {
			self::addCssClass($this->htmlOptions, 'fluid');
		}

		if ($this->inverted) {
			self::addCssClass($this->htmlOptions, 'inverted');
		}

		if( $this->segment) {
			self::addCssClass($this->htmlOptions, 'segment');
		}

		self::addCssClass($this->htmlOptions, self::$sizeClasses[$this->size]);
		
		$this->errorMessageCssClass = 'ui error message';

		$this->clientOptions['errorCssClass'] = 'error';
		$this->clientOptions['successCssClass'] = 'positive';
		$this->clientOptions['inputContainer'] = 'div.field';

		parent::init();
	}

	/**
	 * Displays a summary of validation errors for one or several models.
	 *
	 * This method is override {@link CActiveForm::errorSummary}.
	 *
	 * @param mixed $models The models whose input errors are to be displayed. This can be either a single model or an array of models.
	 * @param string $header A piece of HTML code that appears in front of the errors
	 * @param string $footer A piece of HTML code that appears at the end of the errors
	 * @param array $htmlOptions Additional HTML attributes to be rendered in the container div tag.
	 * @return string The error summary. Empty if no errors are found.
	 * @see CActiveForm::errorSummary
	 *
	 * Note: by default Semantic-UI error message is hidden, it need 'visible' class to unhide it.
	 * TODO: try to integrate it with {@link SuiMessage:errorSummary}
	 */	
	public function errorSummary($models, $header=null, $footer=null, $htmlOptions=array()) {	
		$content='';
	    if(!is_array($models))
	        $models=array($models);
	    
	    if(isset($htmlOptions['firstError'])){
	        $firstError=$htmlOptions['firstError'];
	        unset($htmlOptions['firstError']);
	    }else {
	        $firstError=false;
	    }

	    foreach($models as $m){
	        foreach($m->getErrors() as $errors){
	            foreach($errors as $error){
	                if($error!='')
	                    $content.="<li>$error</li>\n";
	                if($firstError)
	                    break;
	            }
	        }
	    }

		if($content!==''){
	        if($header===null)
	            $header='<div class="header">'.Yii::t('yii','Please fix the following input errors:').'</div>';
	        if(!isset($htmlOptions['class']))
	            $htmlOptions['class']='ui visible error message';
	        return CHtml::tag('div',$htmlOptions,$header."\n<ul class=\"list\">\n$content</ul>".$footer);
	    }else {
	        return '';
	    }
	}

	/**
     * Form Elements.
     * ********************************************************************** */

	/**
	 * Generates a text input field for a model attribute.
	 *
	 * This method is a wrapper for {@link CActiveForm::textField} and {@link customField}.
	 * Please check {@link CActiveForm::textField} for detailed information about $htmlOptions argument.
	 *
	 * @param CModel $model The data model.
	 * @param string $attribute The attribute.
	 * @param array $htmlOptions Additional HTML attributes.
	 * @param array $options Group attributes.
	 * @return string The generated text field group.
	 * @see CActiveForm::textField
	 * @see customField
	 */
	public function textInputField($model, $attribute, $options = array()) {
		
		$this->initOptions($options);

		$widgetOptions = $options['widgetOptions'];
		
		$fieldData = array(array($this, 'textField'), array($model, $attribute, $widgetOptions['htmlOptions']));
		
		return $this->customFieldInternal($fieldData, $model, $attribute, $options);
	}

	/**
	 * Generates a password field group for a model attribute.
	 *
	 * This method is a wrapper for {@link CActiveForm::passwordField} and {@link customField}.
	 * Please check {@link CActiveForm::passwordField} for detailed information about $htmlOptions argument.
	 *
	 * @param CModel $model The data model.
	 * @param string $attribute The attribute.
	 * @param array $htmlOptions Additional HTML attributes.
	 * @param array $options Group attributes.
	 * @return string The generated password field group.
	 * @see CActiveForm::passwordField
	 * @see customField
	 */
	public function passwordInputField($model, $attribute, $options = array()) {
		
		$this->initOptions($options);
	
		$fieldData = array(array($this, 'passwordField'), array($model, $attribute, $options['widgetOptions']['htmlOptions']));
	
		return $this->customFieldInternal($fieldData, $model, $attribute, $options);
	}

	/**
	 * Generates a text area field for a model attribute.
	 *
	 * This method is a wrapper for {@link CActiveForm::textArea} and {@link customField}.
	 * Please check {@link CActiveForm::textArea} for detailed information about $htmlOptions argument.
	 *
	 * @param CModel $model The data model.
	 * @param string $attribute The attribute.
	 * @param array $htmlOptions Additional HTML attributes.
	 * @param array $options Group attributes.
	 * @return string The generated text area group.
	 * @see CActiveForm::textArea
	 * @see customField
	 */
	public function textAreaField($model, $attribute, $options = array()) {
		
		$this->initOptions($options);

		$fieldData = array(array($this, 'textArea'), array($model, $attribute, $options['widgetOptions']['htmlOptions']));

		return $this->customFieldInternal($fieldData, $model, $attribute, $options);
	}


	/**
	 * Generates a dropdown list field for a model attribute.
	 *
	 * This method is a wrapper for {@link CActiveForm::dropDownList} and {@link customField}.
	 * Please check {@link CActiveForm::dropDownList} for detailed information about $htmlOptions argument.
	 *
	 * @param CModel $model The data model.
	 * @param string $attribute The attribute.
	 * @param array $data Data for generating the list options (value=>display).
	 * @param array $htmlOptions Additional HTML attributes.
	 * @param array $options Group attributes.
	 * @return string The generated drop down list group.
	 * @see CActiveForm::dropDownList
	 * @see customField
	 */
	public function dropDownListField($model, $attribute, $options = array()) {
		
		$this->initOptions($options, true);
		$widgetOptions = $options['widgetOptions'];
				
		$this->addCssClass($widgetOptions['htmlOptions'], 'ui dropdown');
		
		$fieldData = array(array($this, 'dropDownList'), array($model, $attribute, $widgetOptions['data'], $widgetOptions['htmlOptions']));

		return $this->customFieldInternal($fieldData, $model, $attribute, $options);
	}

	/**
	 * Generates a checkbox field for a model attribute.
	 *
	 * This method is a wrapper for {@link CActiveForm::checkbox} and {@link customField}.
	 * Please check {@link CActiveForm::checkbox} for detailed information about $htmlOptions argument.
	 *
	 * @param CModel $model The data model.
	 * @param string $attribute The attribute.
	 * @param array $htmlOptions Additional HTML attributes.
	 * @param array $options Field attributes.
	 * @return string The generated checkbox field.
	 * @see CActiveForm::checkbox
	 * @see customField
	 */
	public function checkboxField($model, $attribute, $options = array()) {

		$this->initOptions($options);
	
		$field = $this->checkbox($model, $attribute, $options['widgetOptions']['htmlOptions']);
		if ((!array_key_exists('uncheckValue', $options['widgetOptions']) || isset($options['widgetOptions']['uncheckValue']))
		&& preg_match('/\<input.*?type="hidden".*?\>/', $field, $matches)
		) {
			$hiddenField = $matches[0];
			$field = str_replace($hiddenField, '', $field);
		}
	
		$realAttribute = $attribute;
		CHtml::resolveName($model, $realAttribute);
	
		ob_start();
		echo '<div class="ui checkbox">';
		if (isset($hiddenField)) echo $hiddenField;
		echo $field;
		echo CHtml::tag('label', $options['labelOptions'], false, false);
		if (isset($options['label'])) {
			if ($options['label'])
				echo $options['label'];
		} else
			echo ' '.$model->getAttributeLabel($realAttribute);
		echo CHtml::closeTag('label');
		echo '</div>';
		$fieldData = ob_get_clean();
	
		$options['label'] = '';
	
		return $this->customFieldInternal($fieldData, $model, $attribute, $options);
	}

	/**
	 * Generates a checkbox list field for a model attribute.
	 *
	 * This method is a wrapper for {@link CActiveForm::checkboxList} and {@link customField}.
	 * Please check {@link CActiveForm::checkboxList} for detailed information about $htmlOptions argument.
	 *
	 * @param CModel $model The data model.
	 * @param string $attribute The attribute.
	 * @param array $data Value-label pairs used to generate the check box list.
	 * @param array $htmlOptions Additional HTML attributes.
	 * @param array $options Field attributes.
	 * @return string The generated checkbox list field.
	 * @see CActiveForm::checkboxList
	 * @see customField
	 */
	public function checkboxListField($model, $attribute, $options = array()) {
		
		$this->initOptions($options, true);

		$widgetOptions = $options['widgetOptions']['htmlOptions'];
		
		if (!isset($widgetOptions['separator']))
			$widgetOptions['separator'] = "\n";

		$data = $options['widgetOptions']['data'];

		$fieldData = SUIHtml::activeCheckBoxList($model, $attribute, $data, $widgetOptions);

		return $this->customFieldInternal($fieldData, $model, $attribute, $options);
	}
	
	/**
	 * Generates a radio button field for a model attribute.
	 *
	 * This method is a wrapper for {@link CActiveForm::radioButton} and {@link customField}.
	 * Please check {@link CActiveForm::radioButton} for detailed information about $htmlOptions argument.
	 *
	 * @param CModel $model The data model.
	 * @param string $attribute The attribute.
	 * @param array $htmlOptions Additional HTML attributes.
	 * @param array $options Group attributes.
	 * @return string The generated radio button group.
	 * @see CActiveForm::radioButton
	 * @see customField
	 */
	public function radioButtonField($model, $attribute, $options = array()) {
		
		$this->initOptions($options);
		$widgetOptions = $options['widgetOptions']['htmlOptions'];
		
		self::addCssClass($options['labelOptions'], 'label radio');

		$field = $this->radioButton($model, $attribute, $widgetOptions);
		if ((!array_key_exists('uncheckValue', $widgetOptions) || isset($widgetOptions['uncheckValue']))
			&& preg_match('/\<input.*?type="hidden".*?\>/', $field, $matches)
		) {
			$hiddenField = $matches[0];
			$field = str_replace($hiddenField, '', $field);
		}

		$realAttribute = $attribute;
		CHtml::resolveName($model, $realAttribute);

		ob_start();
		if (isset($hiddenField)) echo $hiddenField;
		echo '<div class="ui radio checkbox">';
		echo CHtml::tag('label', $options['labelOptions'], false, false);
		if (isset($options['label'])) {
			if ($options['label'])
				echo $options['label'];
		} else
			echo $model->getAttributeLabel($realAttribute);
		echo CHtml::closeTag('label');
		echo $field;
		echo "</div>";
		$fieldData = ob_get_clean();

		$widgetOptions['label'] = '';

		return $this->customFieldInternal($fieldData, $model, $attribute, $options);
	}

	/**
	 * Generates a radio button list field for a model attribute.
	 *
	 * This method is a wrapper for {@link CActiveForm::radioButtonList} and {@link customField}.
	 * Please check {@link CActiveForm::radioButtonList} for detailed information about $htmlOptions argument.
	 *
	 * @param CModel $model The data model.
	 * @param string $attribute The attribute.
	 * @param array $data Value-label pairs used to generate the radio button list.
	 * @param array $htmlOptions Additional HTML attributes.
	 * @param array $options Group attributes.
	 * @return string The generated radio button list group.
	 * @see CActiveForm::radioButtonList
	 * @see customField
	 */
	public function radioButtonListField($model, $attribute, $options = array()) {
		
		$this->initOptions($options, true);
		
		$widgetOptions = $options['widgetOptions']['htmlOptions'];
				
		if (!isset($widgetOptions['separator']))
			$widgetOptions['separator'] = "\n";
		
		$data = $options['widgetOptions']['data'];

		$fieldData = SUIHtml::activeRadioButtonList($model, $attribute, $data, $widgetOptions);

		return $this->customFieldInternal($fieldData, $model, $attribute, $options);
	}

	/**
	 * Generates a custom field group for a model attribute.
	 *
	 * @param array|string $fieldData Pre-rendered field as string or array of arguments for call_user_func_array()
	 * function.
	 * @param CModel $model The data model.
	 * @param string $attribute The attribute.
	 * @param array $options Field attributes.
	 * @return string The generated custom field.
	 * @see call_user_func_array
	 */
	public function customField($fieldData, $model, $attribute, $options = array()) {
		
		$this->initOptions($options);

		return $this->customFieldInternal($fieldData, $model, $attribute, $options);
	}

	/**
	 * Generates a custom field group for a model attribute.
	 *
	 * It's base function for generating group with field.
	 *
	 * @param array|string $fieldData Pre-rendered field as string or array of arguments for call_user_func_array() function.
	 * @param CModel $model The data model.
	 * @param string $attribute The attribute.
	 * @param array $options Group attributes.
	 * @return string The generated custom filed group.
	 */
	protected function customFieldInternal(&$fieldData, &$model, &$attribute, &$options) {
		
		$this->setDefaultPlaceholder($fieldData);

		ob_start();
		$fieldOptions = isset($options['fieldOptions']) ? $options['fieldOptions']: array();

		if(isset($options['widgetOptions']['data'])){
			$fieldTypeFilter = array('dropDownList');
			if (is_array($fieldData)) {
				if (in_array($fieldData[0][1], $fieldTypeFilter)) {
			 		self::addCssClass($fieldOptions, 'field');
			 	}
			}else {
				self::addCssClass($fieldOptions, 'fields');
			}
		}else {
			self::addCssClass($fieldOptions, 'field');
		}

		if ($model->isAttributeRequired($attribute)){
			self::addCssClass($fieldOptions, 'required');
		}
		
		if ($model->hasErrors($attribute))
			self::addCssClass($fieldOptions, 'error');
		
		echo CHtml::openTag('div', $fieldOptions);

		self::addCssClass($options['labelOptions'], 'label');
		if (isset($options['label'])) {
			if (!empty($options['label'])) {
				echo CHtml::label($options['label'], CHtml::activeId($model, $attribute), $options['labelOptions']);
			}
		} else {
			echo $this->label($model, $attribute, $options['labelOptions']);
		}

		if (!empty($options['prepend']) || !empty($options['append']))
			$this->renderAddOnBegin($options['prepend'], $options['append'], $options['prependOptions']);

		if (is_array($fieldData)) {
			echo call_user_func_array($fieldData[0], $fieldData[1]);
		} else {
			echo $fieldData;
		}

		if (!empty($options['prepend']) || !empty($options['append']))
			$this->renderAddOnEnd($options['append'], $options['appendOptions']);

        if ($this->showErrors && $options['errorOptions'] !== false) {
            echo $this->error($model, $attribute, $options['errorOptions'], $options['enableAjaxValidation'], $options['enableClientValidation']);
        }

        echo "</div>\r\n"; 
		return ob_get_clean();
	}

    /**
     * Utilities.
     * ********************************************************************** */

    /**
	 * Sets default placeholder value in case of CModel attribute depending on attribute label
	 *  
	 * @param array|string $fieldData Pre-rendered field as string or array of arguments for call_user_func_array() function.
	 */
	protected function setDefaultPlaceholder(&$fieldData) {
		
		if(!is_array($fieldData) 
			|| empty($fieldData[0][1]) /* 'textField' */
			|| !is_array($fieldData[1]) /* ($model, $attribute, $htmlOptions) */
		)
			return;
			
		$model = $fieldData[1][0];
		if(!$model instanceof CModel)
			return;
		
		$attribute = $fieldData[1][1];
		if(!empty($fieldData[1][3]) && is_array($fieldData[1][3])) {
			/* ($model, $attribute, $data, $htmlOptions) */
			$htmlOptions = &$fieldData[1][3];
		} else {
			/* ($model, $attribute, $htmlOptions) */
			$htmlOptions = &$fieldData[1][2];
		}
		if (!isset($htmlOptions['placeholder'])) {
			$htmlOptions['placeholder'] = $model->getAttributeLabel($attribute);
		}
		
	}

    /**
	 * Renders add-on begin.
	 *
	 * @param string $prependText Prepended text.
	 * @param string $appendText Appended text.
	 * @param array $prependOptions Prepend options.
	 */
	protected function renderAddOnBegin($prependText, $appendText, $prependOptions) {
		
		$wrapperCssClass = array();
		if (!empty($prependText))
			$wrapperCssClass[] = $this->prependCssClass;
		if (!empty($appendText))
			$wrapperCssClass[] = $this->appendCssClass;

		echo CHtml::tag($this->addOnWrapperTag, array('class' => implode(' ', $wrapperCssClass)), false, false);
		if (!empty($prependText)) {
			if (isset($prependOptions['isRaw']) && $prependOptions['isRaw']) {
				echo $prependText;
			} else {
				self::addCssClass($prependOptions, $this->addOnCssClass);
				echo CHtml::tag($this->addOnTag, $prependOptions, $prependText);
			}
		}
	}

	/**
	 * Renders add-on end.
	 *
	 * @param string $appendText Appended text.
	 * @param array $appendOptions Append options.
	 */
	protected function renderAddOnEnd($appendText, $appendOptions) {
		
		if (!empty($appendText)) {
			if (isset($appendOptions['isRaw']) && $appendOptions['isRaw']) {
				echo $appendText;
			} else {
				self::addCssClass($appendOptions, $this->addOnCssClass);
				echo CHtml::tag($this->addOnTag, $appendOptions, $appendText);
			}
		}

		echo CHtml::closeTag($this->addOnWrapperTag);
	}

	/**
	 * @param array $options
	 */
	protected function initOptions(&$options, $initData = false) {
				
		if (!isset($options['fieldOptions']))
			$options['fieldOptions'] = array();

		if (!isset($options['labelOptions']))
			$options['labelOptions'] = array();
		
		if (!isset($options['widgetOptions']))
			$options['widgetOptions'] = array();
		
		if (!isset($options['widgetOptions']['htmlOptions']))
			$options['widgetOptions']['htmlOptions'] = array();
		
		if($initData && !isset($options['widgetOptions']['data']))
			$options['widgetOptions']['data'] = array();
		
		if (!isset($options['errorOptions']))
			$options['errorOptions'] = array();
	
		if (!isset($options['prependOptions']))
			$options['prependOptions'] = array();
	
		if (!isset($options['prepend']))
			$options['prepend'] = null;
	
		if (!isset($options['appendOptions']))
			$options['appendOptions'] = array();
	
		if (!isset($options['append']))
			$options['append'] = null;
	
		if(!isset($options['enableAjaxValidation']))
			$options['enableAjaxValidation'] = true;
	
		if(!isset($options['enableClientValidation']))
			$options['enableClientValidation'] = true;
	}

	/**
	 * Utility function for appending class names for a generic $htmlOptions array.
	 *
	 * @param array $htmlOptions
	 * @param string $class
	 */
	protected static function addCssClass(&$htmlOptions, $class) {
		
		if (empty($class)) {
			return;
		}

		if (isset($htmlOptions['class'])) {
			$htmlOptions['class'] .= ' ' . $class;
		} else {
			$htmlOptions['class'] = $class;
		}
	}
}