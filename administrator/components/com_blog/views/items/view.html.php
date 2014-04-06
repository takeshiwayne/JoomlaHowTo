<?php
/**
 * Created by PhpStorm.
 * User: wayne
 * Date: 2014/3/27
 * Time: 上午 11:24
 * Class BlogViewItems
 */
class BlogViewItems extends JViewLegacy
{
	/**
	 * @var array
	 */

	protected $items = array();

	protected $pagination;

	protected $state;

	/**
	 * Execute and display a template script.
	 *
	 * @param string $tpl The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return mixed A string if successful, otherwise a Error object.
	 */
	public function display($tpl = null)
	{
		$this->items = $this->get('items');
		$this->pagination = $this->get('Pagination');
		$this->state = $this->get('State');

		$this->setToolBar();

		return parent::display($tpl);

	}

	/**
	 * Set page title and toolbar
	 *
	 * @return void
	 */
	public function setToolBar()
	{
		JToolbarHelper::title('Edit blog item');

		JToolbarHelper::addNew('item.add');
		JToolbarHelper::editList('item.edit');
		JToolbarHelper::deleteList('Are you sure?', 'items.delete');


	}
}