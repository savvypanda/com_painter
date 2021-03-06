<?php
/**
 * Painter Countries Controller
 *
 * @package    Painter
 * @subpackage Components
 */

// NO DIRECT ACCESS
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controlleradmin');

class PainterControllerCountries extends JControllerAdmin
{
	/**
	 * constructor (registers additional tasks to methods)
	 * @return void
	 */
	function __construct()
	{
		parent::__construct();
		$this->view_item = "countries&tmpl=component";
		$this->view_list = "countries&tmpl=component";
	}
	/**
	 * Method to display the view
	 *
	 * @access	public
	 */
	function display()
	{
		parent::display();
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
	public function getModel($name = 'Countries', $prefix = 'Painter', $config = array('ignore_request' => true))
	{
		switch($this->getTask()){
		case "delete":
		case "saveorder":
		case "orderup":
		case "orderdown":
		case "publish":
		case "unpublish":
			$name = 'Country';
			break;
		default:
			if(JRequest::getCmd('layout') == 'edit'){
				$name = 'Country';
			}
			break;
		}
		return parent::getModel($name, 'PainterModel', $config);
	}
	
	public function delete(){
	}
}