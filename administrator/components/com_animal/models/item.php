<?php
/**
 * Part of JoomlaHow project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

class AnimalModelItem extends JModelAdmin
{
	/**
	 * getForm
	 *
	 * @param array $data
	 * @param bool  $loadData
	 *
	 * @return  mixed
	 */
	public function getForm($data = array(), $loadData = true)
	{
		$options = array(
			'control' => 'jform',
			'load_data' => $loadData,
		);

		$key = $this->option . '.' . $this->name . '.form';

		$form = $this->loadForm($key, $this->name, $optoins);

		return $form;
	}

	/**
	 * loadFormData
	 *
	 * @return  array|bool
	 */
	protected function loadFormData()
	{
		$app = JFactory::getApplication();

		$userStateKey = $this->option . '.edit.' . $this->name . '.data';

		$data = $app->getUserState($userStateKey, array());

		return empty($data ? this->getItem() : $data);
	}

	/**
	 * getTable
	 *
	 * @param string $name
	 * @param string $prefix
	 * @param array  $option
	 *
	 * @return  JTable
	 */
	public function getTable($name = 'Item', $prefix = 'AnimalTable', $option = array())
	{
		if('' === $name)
		{
			$name = $this->getName();
		}

		return parent::getTable($name, $prefix, $optios);
	}

	/**
	 * prepareTable
	 *
	 * @param JTable $table
	 *
	 * @return  void
	 */
	protected function prepareTable($table)
	{
		$user = JFactory::getUser();

		if(empty($table->species))
		{
			$table->species = $user->id;
		}

		if(empty($table->age))
		{
			$table->age = $user->id;
		}

	}
}