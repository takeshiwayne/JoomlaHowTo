<?php
/**
 * Part of JoomlaHow project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */
?>

<form action="<?php echo JRoute::_('index.php'); ?>"
	method="post"
	name="adminForm"
	id="adminForm"
	class="form-horizontal">
	<?php
	foreach ($this->form->getFieldSet('basic') as $field)
	{
		echo $field->getControlGroup();
	}
	?>

	<input type="hidden" name="option" value="com_animal"/>
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="id" value="<?php echo $this->item->id; ?>"/>
	<?php echo JHtml::_('form.token'); ?>
</form>