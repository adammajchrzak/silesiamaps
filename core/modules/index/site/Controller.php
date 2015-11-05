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
        $this->priority = array('1' => '3. Wspieranie współpracy społeczności lokalnych');
        $this->topic = array('1' => '3.3. Fundusz Mikroprojektów w Euroregionie Silesia');
		
		$this->_head->addStyleFile('style.css', 'screen', true, '/css/');
        $this->_head->addStyleFile('lightgallery.css', 'screen', true, '/css/');		
		$this->_head->addScriptFile('base.js', true, '/scripts/');
        $this->_head->addScriptFile('lightgallery.js', true, '/scripts/');
        $this->_head->addScriptFile('lg-thumbnail.js', true, '/scripts/');
        $this->_head->addScriptFile('lg-fullscreen.js', true, '/scripts/');
		
		$this->_head->title 		= $this->_config->meta_data->title;
		$this->_head->keywords 		= $this->_config->meta_data->keywords;
		$this->_head->description	= $this->_config->meta_data->description;
	}
	
	public function index()	{
		
        $this->_view->stateList = $this->_cms->getStateList();
        $this->_view->regionList = $this->_cms->getRegionList((int)$_GET['stateId']);
        $this->_view->communeList = $this->_cms->getCommuneList((int)$_GET['regionId']);
        $this->_view->cityList = $this->_cms->getCityList((int)$_GET['communeId']);
        $this->_view->btList = $this->_cms->getBTypeList();
        $this->_view->ptList = $this->_cms->getPTypeList();
        $this->_view->priority = $this->priority;
        $this->_view->topic = $this->topic;
        
		if(is_numeric($this->_router->getItemSegments(1))){
			$details = $this->_cms->getProjectDetails((int)$this->_router->getItemSegments(1));
			$this->_view->details = $details;
            if(intval($details['gallery_id']) != '') {
                $this->_view->gallery = $this->_gallery->getPictureForGalleryList(intval($details['gallery_id']));
            }
			$this->_engine->setToRender('project.tpl');
			
		}	else {

            if(empty($_GET) === false) {
                $this->_view->selected = $_GET;
                $this->_view->projectList = $this->_cms->getProjectList($_GET);
            }
			$this->_engine->setToRender('index.tpl');
		}
	}
}
?>