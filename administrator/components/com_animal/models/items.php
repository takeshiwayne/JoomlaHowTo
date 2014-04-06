<?php
/**
 * Part of JoomlaHow project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Class AnimalModelItems
 *
 * @since 1.0
 */
class AnimalModelItems extends JModelList
{
	/**
	 * @param array $config
	 */
	public function __construct($config = array())
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id', 'a.id',
				'name', 'a.name',
				'species', 'a.species',
				'size', 'a.size',
				'age', 'a.age',
			);
		}

		parent::__construct($config);
	}

	/**
	 * getListQuery
	 *
	 * @return  JDatabaseQuery
	 */
	public function getListQuery()
	{
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		$orderCol = $this->getState('list.ordering', 'a.id');
		$orderDir = $this->getState('list.direction', 'asc');
		$filterSearch = $this->getState('filter.search');

		$query->select('a.*')
			  ->from('#__animal AS a')
		      ->order($db->escape($orderCol . ' ' . $orderDir));

		if (! empty($filterSearch))
		{
			$query->where('a.`name` LIKE "%' . $filterSearch . '%"');
		}

		return $query;
	}

	/**
	 * Method to auto-populate the model state.
	 *
	 * @param string $ordering  An optional ordering field.
	 * @param string $direction An optional direction (asc|desc).
	 *
	 * @return void
	 */
	public function populateState($ordering = 'a.id', $direction = 'asc')
	{
		parent::populateState($ordering, $direction);

		$filterSearch = $this->getUserStateFromRequest($this->context . '.filter.search', 'filter_search');
		$this->setState('filter.search', trim($filterSearch));
	}
}