<?php
/**
 * @version     1.0.0
 * @package     com_stockinfos
 * @copyright   Copyright (C) 2011 Amy Stephen. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/** uncomment out to determine values available */
//echo '<pre>';var_dump($this->state);'</pre>';
//echo '<pre>';var_dump($this->params);'</pre>';
//echo '<pre>';var_dump($this->user);'</pre>';

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');

//$custom_fields = json_decode($this->item->custom_fields);

/** uncomment out to determine column names */
//echo '<pre>';var_dump($this->item);'</pre>';

/** uncomment out to display the names and values of all custom_fields  */
//foreach ($custom_fields as $name=>$value) {
//    echo '<br/>'.$name.' '.$value.'<br />';
//};

/** uncomment out to display a specific custom field */
//echo $custom_fields->image1;
?>
<div>

    <h1>Quote</h1>
    <p>Test content</p>

</div>