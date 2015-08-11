<?php 

/*
 * indexController
 * 
 * @author Adam Majchrzak
 * @jusee.pl
 */

class indexController extends Engine_Controller	{
	
	public $_cms;
	
	public function __construct($engine)	{
		
		parent::__construct($engine);
		
		if(!$this->_auth->hasIdentity())	{
			$this->_engine->addHttpHeader("Location: /".$this->_router->getUrl('cms', 'auth'));
			exit();
		}
		
		$this->_cms 	= IndexModel::Instance();
		$this->_gallery	= GalleryModel::Instance();
		$this->_user 	= UsersModel::Instance();
		
		$this->_head->addStyleFile('jquery.ui.all.css', 'screen', true, '/css/jquery-ui/');         // JqueryUI CSS
		// $this->_head->addStyleFile('Aristo.css', 'screen', true, '/css/jquery-ui-aristo/');
		// $this->_head->addStyleFile('jquery.ui.uniform.css', 'screen', true, '/css/jquery-ui/'); 	// JqueryUI CSS
		$this->_head->addStyleToImport('index', 'cms', 'base.css');
		
		$this->_head->addScriptFile('jquery-ui-'.$this->_config->jqueryui.'.min.js', true, '/scripts/jquery-ui/');		// JqueryUI JS
		$this->_head->addScriptFile('base.js', true, '/scripts/cms/');              // JqueryUI JS
		$this->_head->addScriptFile('jquery.uniform.min.js', true, '/scripts/cms/');// JqueryUI JS
		$this->_head->addScriptFile('index.js', true, '/scripts/cms/');             // JqueryUI JS
		$this->_head->addScriptFile('jquery.CKEditor.js', true, '/scripts/cms/');	// JqueryUI JS
		$this->_head->addScriptFile('jquery.ui.datepicker-pl.js', true, '/scripts/');
		$this->_head->addScriptFile('ckeditor.js', true, '/scripts/cms/ckeditor/');
		
		$this->_view->sidebar =  $this->_view->render('modules/'.$this->_engine->getModuleName().'/cms/templates/sidebar.tpl');
	}
	
	public function index()	{
		
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'view'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
        
		$this->_view->project_list = $this->_cms->getProjectList();
		$this->_view->main_content =  $this->_view->render('modules/index/cms/templates/tree.tpl');
		$this->_engine->setToRender('index.tpl');
	}
	
	public function add()	{
		
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'add'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}

		$details['page_id'] = '0';
		$this->_view->details = $details;
        
		$this->_view->priority_list = $this->_cms->getPriorityList();
        $this->_view->topic_list    = $this->_cms->getTopicList();
        $this->_view->type_list     = $this->_cms->getTypeList();
        $this->_view->city_list     = $this->_cms->getCityList();
        $this->_view->commune_list  = $this->_cms->getCommuneList();
        $this->_view->state_list    = $this->_cms->getStateList();
        $this->_view->region_list   = $this->_cms->getRegionList();
        $this->_view->ptype_list    = $this->_cms->getPTypeList();
        $this->_view->btype_list    = $this->_cms->getBTypeList();
        $this->_view->gallery_list  = $this->_gallery->getGalleryList();
        
		$this->_view->main_content =  $this->_view->render('modules/index/cms/templates/add.tpl');
		$this->_engine->setToRender('index.tpl');
	}
	
	public function edit()	{
		
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'edit'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
		
		if($this->_router->isPostRequest())	{
			if($_POST['project_id'] == '0' || $_POST['project_id'] == '')	{
				$this->_cms->addProjectDetails($_POST);
			}	else {
				$this->_cms->saveProjectDetails($_POST);	
			}
			
			$this->_engine->addHttpHeader("Location: /".$this->_router->getUrl('cms', 'index'));
			exit();
		}
        
        $this->_view->priority_list = $this->_cms->getPriorityList();
        $this->_view->topic_list    = $this->_cms->getTopicList();
        $this->_view->type_list     = $this->_cms->getTypeList();
        $this->_view->city_list     = $this->_cms->getCityList();
        $this->_view->commune_list  = $this->_cms->getCommuneList();
        $this->_view->state_list    = $this->_cms->getStateList();
        $this->_view->region_list   = $this->_cms->getRegionList();
        $this->_view->ptype_list    = $this->_cms->getPTypeList();
        $this->_view->btype_list    = $this->_cms->getBTypeList();
        $this->_view->gallery_list  = $this->_gallery->getGalleryList();
        
		$details                   = $this->_cms->getProjectDetails((int)$this->_router->getItemSegments(3));
		$this->_view->details 	   = $details;
		
		$this->_view->sidebar 	   = $this->_view->render('modules/index/cms/templates/sidebar.edit.tpl');
		$this->_view->main_content = $this->_view->render('modules/index/cms/templates/edit.tpl');
		$this->_engine->setToRender('index.tpl');
	}
	
	public function move()	{
		
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'edit'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
		
		if($this->_router->isAjaxRequest())	{
			$this->_cms->movePageInStructure($_REQUEST);
		}
		
		exit();
	}
	
	public function delete()	{
		
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'delete'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
		
		if($this->_router->isAjaxRequest())	{
            $this->_cms->deleteProject($_REQUEST);
		}

		$this->_engine->addHttpHeader("Location: /".$this->_router->getUrl('cms', 'index'));
		exit();
	}
	
	public function restricted()	{
		
		$this->_engine->setToRender('restricted.tpl');
	}
}
?>