<?php
/**
 * Painter Customer Controller
 *
 * @package    Painter
 * @subpackage Components
 */

// NO DIRECT ACCESS
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controllerform');

class PainterControllerMaterial extends JControllerForm
{
	/**
	 * constructor (registers additional tasks to methods)
	 *
	 * @return void
	 */
	function __construct()
	{
		parent::__construct();
		$this->view_item = "materials";
		$this->view_list = "materials";
	}
	
	/**
	 * Method to get a model object, loading it if required.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  object  The model.
	 */
	public function getModel($name = '', $prefix = 'Painter', $config = array('ignore_request' => true))
	{
		return parent::getModel('Material', 'PainterModel', $config);
	}
}