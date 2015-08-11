<?php
/*
 * userController
 * 
 * @author Adam Majchrzak
 * @jusee.pl
 */

class userController extends Engine_Controller	{
	
	public $_user;
	
	public function __construct($engine)	{
		
		parent::__construct($engine);
		
		if(!$this->_auth->hasIdentity())	{
			$this->_engine->addHttpHeader("Location: ".$this->_router->getUrl('cms', 'auth'));
			exit();
		}
		
		$this->_user 	= UsersModel::Instance();
		$this->_cms 	= IndexModel::Instance();
		
		$this->_head->addStyleFile('jquery.ui.all.css', 'screen', true, '/css/jquery-ui/'); 	// JqueryUI CSS
		$this->_head->addStyleToImport('index', 'cms', 'base.css');	
		
		$this->_head->addScriptFile('jquery-ui-'.$this->_config->jqueryui.'.min.js', true, '/scripts/jquery-ui/');		// JqueryUI JS
		$this->_head->addScriptFile('base.js', true, '/scripts/cms/');		// JqueryUI JS
		$this->_head->addScriptFile('jquery.uniform.min.js', true, '/scripts/cms/');		// JqueryUI JS
		$this->_head->addScriptFile('user.js', true, '/scripts/cms/');		// JqueryUI JS
	}
	
	public function index()	{

		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'view'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
		
		$this->_view->users_list = $this->_user->getUsersList();
		$this->_engine->setToRender('index.tpl');
	}

	public function alert()	{
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'view'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
		
		$this->_view->alerts_list = $this->_user->getAlertsList();
		$this->_engine->setToRender('alert.list.tpl');
	}
	
	public function add()	{
		
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'add'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
		
		$this->_engine->setToRender('add.tpl');
	}
	
	public function edit()	{
		
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'edit'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
		
		if($this->_router->isPostRequest())	{
			
			if(empty($_POST['user_id']) || $_POST['user_id'] == '0' || $_POST['user_id'] == '')	{
				$this->_user->addUserDetails($_POST);
			}	else {
				$this->_user->saveUserDetails($_POST);	
			}
			
			$this->_engine->addHttpHeader("Location: ".$this->_router->getUrl('cms', 'user'));
			exit();
		}
		
		$this->_view->user_details = $this->_user->getUserDetails((int)$this->_router->getItemSegments(3));
		
		$this->_engine->setToRender('edit.tpl');
	}
	
	public function permission() {
		
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'edit'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
		
		if($this->_router->isPostRequest())	{
			if(!empty($_POST['user_id']) && $_POST['user_id'] != '0')	{
				$this->_user->saveUserPermission($_POST);
			}
			$this->_engine->addHttpHeader("Location: /".$this->_router->getUrl('cms', 'user'));
			exit();
		}
		
		
		$up					=	$this->_user->getUserPermission((int)$this->_router->getItemSegments(3));
		$up 				=	json_decode($up['params']);
		$this->_view->st	=	$up->sitetree;
		
		$this->_view->user_id	=	(int)$this->_router->getItemSegments(3);
		$this->_view->structure_tree = $this->_cms->getSiteStructure('0');
		
		$this->_engine->setToRender('permission.list.tpl');
	}
	
}
	
?>