<?php
/**
 * Part of JoomlaHow project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

class AnimalControllerItems extends JControllerAdmin
{
	public function getModel($name = 'Item', $prefix = 'ItemModel', $config = array('ignore_request' => true))
	{
		$model= parent::getModel($name, $prefix, $config);

		return $model;
	}
}