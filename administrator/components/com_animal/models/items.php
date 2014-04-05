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
	public function getListQuery()
	{
		$db = $this->getDbo();
		$query = $db->getQuery(true);

		$query->select('a.*')
			  ->from('#__animal AS a');

		return $query;
	}
}