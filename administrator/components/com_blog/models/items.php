<?php

/**
 * Class BlogModelItems
 */
class BlogModelItems extends JModelList
{
	/**
	 * Constructor.
	 *
	 * @param array $config An optional associative array of configuration settings.
	 */
	public function __construct($config = array())
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id', 'a.id',
				'title', 'a.title',
			);
		}

		parent::__construct($config);
	}

	/**
	 * Method to get a JDatabaseQuery object for retrieving the data set from a database.
	 *
	 * @return JDatabaseQuery A JDatabaseQuery object to retrieve the data set.
	 */
	public function getListQuery()
	{
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		$orderCol = $this->getState('list.ordering', 'a.id');
		$orderDir = $this->getState('list.direction', 'asc');
		$filterSearch = $this->getstate('filter.search');

		$query->select('a.*')
			->from('#__blog_items AS a')
			->order($db->escape($orderCol . ' ' . $orderDir));

		if (! empty($filterSearch))
		{
			$query->where('a.`title` LIKE "%' . $filterSearch . '%"');
		}

		return $query;
	}

	/**
	+	 * Method to auto-populate the model state.
	+	 *
	+	 * @param string $ordering  An optional ordering field.
	+	 * @param string $direction An optional direction (asc|desc).
	+	 *
	+	 * @return void
	+	 */

	public function populateState($ordering = 'a.id', $direction = 'asc')
	{
		parent::populateState($ordering = 'a.id', $direction = 'asc');

			$filterSearch = $this->getUserStateFromRequest($this->context . '.filter.search', 'filter_search');
			$this->setState('filter.search', trim($filterSearch));
	}
}