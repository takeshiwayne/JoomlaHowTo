<?php
/**
 * Part of JoomlaHow project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Class AnimalViewItem
 *
 * @since 1.0
 */
class AnimalViewItem extends JViewLegacy
{
	/**
	 * Property form.
	 *
	 * @var
	 */
	protected $form;
	/**
	 * Property item.
	 *
	 * @var  array
	 */
	protected $item = array ();

	/**
	 * display
	 *
	 * @return  mixed
	 */
	public function display($tpl = null)
	{
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');

		$this->setToolBar();

		return parent::display($tpl);
	}

	public function setToolBar()
	{
		JToolbarHelper::title('edit aniaml item');

		JToolbarHelper::apply('item.apply');
		JToolbarHelper::save('item.save');
		JToolbarHelper::save2new('item.save2new');
		JToolbarHelper::cancel('item.cancel');
	}
}