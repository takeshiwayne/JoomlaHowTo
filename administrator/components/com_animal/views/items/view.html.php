<?php
/**
 * Part of JoomlaHow project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Class AnimalViewItems
 *
 * @since 1.0
 */
class AnimalViewItems extends JViewLegacy
{
	/**
	 * Property items.
	 *
	 * @var  array
	 */
	protected $items = array();

	/**
	 * display
	 *
	 * @param null $tpl
	 *
	 * @return  mixed
	 */

	/**
	 * Property pagination.
	 *
	 * @var
	 */
	protected $pagination;

	/**
	 * @var object
	 */
	protected $state;

	/**
	 * display
	 *
	 * @param null $tpl
	 *
	 * @return  mixed
	 */
	public function display($tpl = null)
	{
		$this->items = $this->get('items');
		$this->state = $this->get('state');

		$this->pagination = $this->get('pagination');

		$this->setToolBar();

		return parent::display($tpl);
	}

	/**
	 * setToolbar
	 *
	 * @return  void
	 */
	public function setToolbar()
	{
		JToolbarHelper::title('this is item list');

		JToolbarHelper::addNew('item.add');
		JToolbarHelper::editList('item.edit');
		JToolbarHelper::deleteList('Are you sure?', 'items.delete');
	}

}
