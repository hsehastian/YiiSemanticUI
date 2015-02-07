<?php
/**
 * Built-in client script packages.
 *
 * Please see {@link CClientScript::packages} for explanation of the structure
 * of the returned array.
 *
 * @author Ruslan Fadeev <fadeevr@gmail.com>
 *
 * @var Bootstrap $this
 */
return array(
	'navbar' => array(
        'baseUrl' => $this->getAssetsUrl() . '/custom/components',
        'css' => array($this->minify ? 'navbar.css' : 'navbar.css'),
        'js' => array($this->minify ? 'navbar.js' : 'navbar.js'),
        'depends' => array('jquery', 'jquery.ui'),
    ),
    'dropdown' => array(
        'baseUrl' => $this->getAssetsUrl() . '/semantic-ui/components',
        'css' => array($this->minify ? 'dropdown.min.css' : 'dropdown.css'),
        'js' => array($this->minify ? 'dropdown.min.js' : 'dropdown.js'),
        'depends' => array('transition'),
    ),
    'transition' => array(
        'baseUrl' => $this->getAssetsUrl() . '/semantic-ui/components',
        'css' => array($this->minify ? 'transition.min.css' : 'transition.css'),
        'js' => array($this->minify ? 'transition.min.js' : 'transition.js'),
        'depends' => array('jquery', 'jquery.ui'),
    ),
    //'dropdown' => array(
        //'baseUrl' => $this->getAssetsUrl() . '/semantic-ui/components',
        //'css' => array($this->minify ? 'dropdown.min.css' : 'dropdown.css'),
        //'js' => array($this->minify ? 'dropdown.min.js' : 'dropdown.js'),
        //'depends' => array('jquery', 'jquery.ui'),
    //),
);