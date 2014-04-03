<?php
/**
 * Part of JoomlaHow project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Class AnimalTableAnimals
 *
 * @since 1.0
 */
class AnimalTableAnimals extends JTable
{
	public function __construct($db)
	{
		parent::__construct('#__animal', 'id', $db);
	}
}