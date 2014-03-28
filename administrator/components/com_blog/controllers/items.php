<?php
/**
 * Created by PhpStorm.
 * User: wayne
 * Date: 2014/3/28
 * Time: 上午 9:34
 */

/**
 * Class BlogControllerItems
 */

class BlogControllerItems extends JControllerAdmin
{
	/**
	 * Method to get a model object, loading it if required.
	 */

	public function getModel($name = 'Item', $prefix = 'BlogModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}