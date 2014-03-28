<?php
/**
 * Created by PhpStorm.
 * User: wayne
 * Date: 2014/3/27
 * Time: 上午 10:50
 */

defined('_JEXEC') or die;

$controller	= JControllerLegacy::getInstance('Blog');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();