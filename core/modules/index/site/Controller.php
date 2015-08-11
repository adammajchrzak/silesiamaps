<?php 

/*
 * indexController
 * 
 * @author Adam Majchrzak
 * @jusee.pl
 */
 
class indexController extends Engine_Controller	{
	
	public function __construct($engine)	{
		
		parent::__construct($engine);
		
		$this->_cms 		= IndexModel::Instance();
		$this->_gallery		= GalleryModel::Instance();
		
		$this->_head->addStyleFile('jquery.ui.all.css', 'screen', true, '/css/jquery-ui/'); // JqueryUI CSS
		$this->_head->addStyleFile('style.main.css', 'screen', true, '/css/');
		$this->_head->addStyleFile('gallery.css', 'screen', true, '/css/');
		
		$this->_head->addScriptFile('base.js', true, '/scripts/');
		$this->_head->addScriptFile('jquery.colorbox.js', true, '/scripts/');
		$this->_head->addScriptFile('jquery.uniform.min.js', true, '/scripts/cms/');		// JqueryUI JS
		
		$this->_head->title 		= $this->_config->meta_data->title;
		$this->_head->keywords 		= $this->_config->meta_data->keywords;
		$this->_head->description	= $this->_config->meta_data->description;
	}
	
	public function index()	{
		
		if(is_numeric($this->_router->getItemSegments(2))){
			
			$details = $this->_cms->getPageContent((int)$this->_router->getItemSegments(2));
			
			$this->_view->details = $details;	
			$this->_engine->setToRender('project.tpl');
			
		}	else {
            
			$this->_engine->_templateFile = 'site_intro';
			$this->_engine->setToRender('intro.tpl');
		}
	}
}
?>